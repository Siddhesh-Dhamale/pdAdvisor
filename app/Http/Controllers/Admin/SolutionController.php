<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Models\SolutionCard;
use App\Models\SolutionCounter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::withCount([
            'solutionCards',
            'solutionCounters',
            'solutionResultCards'
        ])->get();

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
            'hero_heading' => 'nullable|string',
            'hero_description' => 'nullable|string',
            'subhero_heading' => 'nullable|string',
            'subhero_description' => 'nullable|string',
            'solution_cards_heading' => 'nullable|string',
            'counter_heading' => 'nullable|string',
            'result_cards_heading' => 'nullable|string',
            'cta_title' => 'nullable|string',

            'hero_image' => 'nullable|image|max:2048',
            'cta_image' => 'nullable|image|max:2048',

            'counters' => 'nullable|array',
            'counters.*.title' => 'required_with:counters|string',
            'counters.*.number' => 'required_with:counters|integer',

            'cards' => 'nullable|array',
            'cards.*.card_heading' => 'required_with:cards|string',
            'cards.*.card_description' => 'required_with:cards|string',
        ]);

        // Handle image uploads
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('solutions', 'public');
        }
        if ($request->hasFile('cta_image')) {
            $data['cta_image'] = $request->file('cta_image')->store('solutions', 'public');
        }

        $solution = Solution::create($data);

        // Save counters
        if (!empty($data['counters'])) {
            foreach ($data['counters'] as $counter) {
                $solution->solutionCounters()->create($counter);
            }
        }

        // Save solution cards
        if (!empty($data['cards'])) {
            foreach ($data['cards'] as $card) {
                $solution->solutionCards()->create($card);
            }
        }

        return redirect()->route('admin.solutions.index')->with('success', 'Solution created!');
    }

    public function edit(Solution $solution)
    {
        $solution->load('solutionCards', 'solutionCounters', 'solutionResultCards');
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, Solution $solution)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:solutions,slug,' . $solution->id,
            'hero_heading' => 'nullable|string',
            'hero_description' => 'nullable|string',
            'subhero_heading' => 'nullable|string',
            'subhero_description' => 'nullable|string',
            'solution_cards_heading' => 'nullable|string',
            'counter_heading' => 'nullable|string',
            'result_cards_heading' => 'nullable|string',
            'cta_title' => 'nullable|string',

            'hero_image' => 'nullable|image|max:2048',
            'cta_image' => 'nullable|image|max:2048',

            'counters' => 'nullable|array',
            'counters.*.title' => 'required_with:counters|string',
            'counters.*.number' => 'required_with:counters|integer',

            'cards' => 'nullable|array',
            'cards.*.card_heading' => 'required_with:cards|string',
            'cards.*.card_description' => 'required_with:cards|string',
        ]);

        // Handle image uploads & delete old images
        if ($request->hasFile('hero_image')) {
            if ($solution->hero_image) {
                Storage::disk('public')->delete($solution->hero_image);
            }
            $data['hero_image'] = $request->file('hero_image')->store('solutions', 'public');
        }
        if ($request->hasFile('cta_image')) {
            if ($solution->cta_image) {
                Storage::disk('public')->delete($solution->cta_image);
            }
            $data['cta_image'] = $request->file('cta_image')->store('solutions', 'public');
        }

        $solution->update($data);

        // Sync counters: delete old & create new
        $solution->solutionCounters()->delete();
        if (!empty($data['counters'])) {
            foreach ($data['counters'] as $counter) {
                $solution->solutionCounters()->create($counter);
            }
        }

        // Sync solution cards: delete old & create new
        $solution->solutionCards()->delete();
        if (!empty($data['cards'])) {
            foreach ($data['cards'] as $card) {
                $solution->solutionCards()->create($card);
            }
        }

        return redirect()->route('admin.solutions.index')->with('success', 'Solution updated!');
    }

    public function destroy(Solution $solution)
    {
        // Delete images
        if ($solution->hero_image) {
            Storage::disk('public')->delete($solution->hero_image);
        }
        if ($solution->cta_image) {
            Storage::disk('public')->delete($solution->cta_image);
        }
        // Delete related cards and counters
        $solution->solutionCards()->delete();
        $solution->solutionCounters()->delete();
        $solution->solutionResultCards()->delete();

        $solution->delete();

        return redirect()->route('admin.solutions.index')->with('success', 'Solution deleted!');
    }
}
