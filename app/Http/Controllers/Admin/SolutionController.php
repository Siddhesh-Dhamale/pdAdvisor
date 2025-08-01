<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SolutionController extends Controller
{
    protected $imageDir = 'frontend/img/solutions';

    private function uploadImage($file, $subDir = ''): string
    {
        $folder = $this->imageDir . ($subDir ? "/$subDir" : '');
        $path = public_path($folder);

        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . strtolower($extension);
        $file->move($path, $filename);

        return $filename;
    }

    private function deleteImage($path)
    {
        $full = public_path($path);
        if ($path && File::exists($full)) {
            File::delete($full);
        }
    }

    public function index()
    {
        $solutions = Solution::withCount([
            'solutionCards',
            'solutionCounters',
            'solutionResultCards',
            'solutionServices',
        ])
            ->orderByRaw('sort_order IS NULL, sort_order ASC')
            ->get();

        return view('admin.solutions.index', compact('solutions'));
    }

    public function create()
    {
        return view('admin.solutions.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:solutions,slug',
            'description' => 'nullable|string',
            'icon' => 'nullable|file|mimes:svg,png,jpg,jpeg|max:2048',
            'hero_heading' => 'nullable|string',
            'hero_description' => 'nullable|string',
            'subhero_heading' => 'nullable|string',
            'subhero_description' => 'nullable|string',
            'solution_cards_heading' => 'nullable|string',
            'counter_heading' => 'nullable|string',
            'result_cards_heading' => 'nullable|string',
            'cta_title' => 'nullable|string',
            'cta_button_text' => 'nullable|string|max:255',
            'cta_button_url' => 'nullable|string',
            'hero_image' => 'nullable|image|max:2048',
            'cta_image' => 'nullable|image|max:2048',

            'counters' => 'nullable|array',
            'counters.*.title' => 'required_with:counters|string',
            'counters.*.number' => 'required_with:counters|integer',

            'cards' => 'nullable|array',
            'cards.*.card_heading' => 'required_with:cards|string',
            'cards.*.card_description' => 'required_with:cards|string',

            'result_cards' => 'nullable|array',
            'result_cards.*.card_heading' => 'required_with:result_cards|string',
            'result_cards.*.card_description' => 'required_with:result_cards|string',
            'result_cards.*.card_image' => 'nullable|image|max:2048',

            'services' => 'nullable|array',
            'services.*.service_heading' => 'nullable|string',
            'services.*.service_url' => 'nullable|string',

            'sort_order' => 'nullable|integer',
        ]);

        if (isset($data['sort_order']) && (int)$data['sort_order'] === 0) {
            $data['sort_order'] = null;
        }

        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $this->uploadImage($request->file('hero_image'));
        }
        if ($request->hasFile('cta_image')) {
            $data['cta_image'] = $this->uploadImage($request->file('cta_image'));
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = $this->uploadImage($request->file('icon'), 'icons');
        }

        $solution = Solution::create($data);

        if (!empty($data['counters'])) {
            foreach ($data['counters'] as $counter) {
                $solution->solutionCounters()->create($counter);
            }
        }

        if (!empty($data['cards'])) {
            foreach ($data['cards'] as $card) {
                $solution->solutionCards()->create($card);
            }
        }

        if (!empty($data['result_cards'])) {
            foreach ($data['result_cards'] as $index => $resultCard) {
                $cardData = [
                    'card_heading' => $resultCard['card_heading'],
                    'card_description' => $resultCard['card_description'],
                ];

                if ($request->hasFile("result_cards.$index.card_image")) {
                    $cardData['card_image'] = $this->uploadImage(
                        $request->file("result_cards.$index.card_image"),
                        'result_cards'
                    );
                }

                $solution->solutionResultCards()->create($cardData);
            }
        }

        // --- Skip empty services ---
        if (!empty($data['services'])) {
            foreach ($data['services'] as $service) {
                if (
                    (empty($service['service_heading']) || trim($service['service_heading']) === '') &&
                    (empty($service['service_url']) || trim($service['service_url']) === '')
                ) {
                    continue;
                }
                $solution->solutionServices()->create($service);
            }
        }

        return redirect()->route('admin.solutions.index')->with('success', 'Solution created!');
    }

    public function edit(Solution $solution)
    {
        $solution->load('solutionCards', 'solutionCounters', 'solutionResultCards', 'solutionServices');
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, Solution $solution)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:solutions,slug,' . $solution->id,
            'description' => 'nullable|string',
            'icon' => 'nullable|file|mimes:svg,png,jpg,jpeg|max:2048',
            'hero_heading' => 'nullable|string',
            'hero_description' => 'nullable|string',
            'subhero_heading' => 'nullable|string',
            'subhero_description' => 'nullable|string',
            'solution_cards_heading' => 'nullable|string',
            'counter_heading' => 'nullable|string',
            'result_cards_heading' => 'nullable|string',
            'cta_title' => 'nullable|string',
            'cta_button_text' => 'nullable|string|max:255',
            'cta_button_url' => 'nullable|string',
            'hero_image' => 'nullable|image|max:2048',
            'cta_image' => 'nullable|image|max:2048',

            'counters' => 'nullable|array',
            'counters.*.title' => 'required_with:counters|string',
            'counters.*.number' => 'required_with:counters|integer',

            'cards' => 'nullable|array',
            'cards.*.card_heading' => 'required_with:cards|string',
            'cards.*.card_description' => 'required_with:cards|string',

            'result_cards' => 'nullable|array',
            'result_cards.*.card_heading' => 'required_with:result_cards|string',
            'result_cards.*.card_description' => 'required_with:result_cards|string',
            'result_cards.*.card_image' => 'nullable|image|max:2048',

            'services' => 'nullable|array',
            'services.*.service_heading' => 'nullable|string',
            'services.*.service_url' => 'nullable|string',

            'sort_order' => 'nullable|integer',
        ]);

        if (isset($data['sort_order']) && (int)$data['sort_order'] === 0) {
            $data['sort_order'] = null;
        }

        if ($request->hasFile('hero_image')) {
            $this->deleteImage($solution->hero_image);
            $data['hero_image'] = $this->uploadImage($request->file('hero_image'));
        }
        if ($request->hasFile('cta_image')) {
            $this->deleteImage($solution->cta_image);
            $data['cta_image'] = $this->uploadImage($request->file('cta_image'));
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = $this->uploadImage($request->file('icon'), 'icons');
        }

        $solution->update($data);

        // Update counters
        $solution->solutionCounters()->delete();
        foreach ($data['counters'] ?? [] as $counter) {
            $solution->solutionCounters()->create($counter);
        }

        // Update cards
        $solution->solutionCards()->delete();
        foreach ($data['cards'] ?? [] as $card) {
            $solution->solutionCards()->create($card);
        }

        // Update result cards: preserve old images if not replaced
        $oldCards = $solution->solutionResultCards;
        $solution->solutionResultCards()->delete();

        foreach ($data['result_cards'] ?? [] as $index => $resultCard) {
            $cardData = [
                'card_heading' => $resultCard['card_heading'],
                'card_description' => $resultCard['card_description'],
            ];
            $oldCard = $oldCards[$index] ?? null;

            if ($request->hasFile("result_cards.$index.card_image")) {
                if ($oldCard && $oldCard->card_image) {
                    $this->deleteImage('frontend/img/solutions/result_cards/' . $oldCard->card_image);
                }
                $cardData['card_image'] = $this->uploadImage(
                    $request->file("result_cards.$index.card_image"),
                    'result_cards'
                );
            } elseif ($oldCard) {
                $cardData['card_image'] = $oldCard->card_image;
            }

            $solution->solutionResultCards()->create($cardData);
        }

        // --- Skip empty services ---
        $solution->solutionServices()->delete();
        foreach ($data['services'] ?? [] as $service) {
            if (
                (empty($service['service_heading']) || trim($service['service_heading']) === '') &&
                (empty($service['service_url']) || trim($service['service_url']) === '')
            ) {
                continue;
            }
            $solution->solutionServices()->create($service);
        }

        return redirect()->route('admin.solutions.index')->with('success', 'Solution updated!');
    }

    public function destroy(Solution $solution)
    {
        $this->deleteImage($solution->hero_image);
        $this->deleteImage($solution->cta_image);

        $solution->solutionResultCards->each(function ($card) {
            $this->deleteImage($card->card_image);
        });

        $solution->solutionCards()->delete();
        $solution->solutionCounters()->delete();
        $solution->solutionResultCards()->delete();
        $solution->solutionServices()->delete();

        $solution->delete();

        return redirect()->route('admin.solutions.index')->with('success', 'Solution deleted!');
    }
}
