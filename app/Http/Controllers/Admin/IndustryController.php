<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industry;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::withCount(['industryCards', 'industryCounters', 'industryResultCards'])->get();
        return view('admin.industries.index', compact('industries'));
    }

    public function create()
    {
        $allIndustries = Industry::all(); // Load all industries for related categories dropdown
        return view('admin.industries.create', compact('allIndustries'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:industries',
            'parent_id' => 'nullable|exists:industries,id',
            'hero_heading' => 'nullable',
            'hero_description' => 'nullable',
            'hero_image' => 'nullable|image',
            'subhero_heading' => 'nullable',
            'subhero_description1' => 'nullable',
            'subhero_description2' => 'nullable',
            'subhero_description3' => 'nullable',
            'subhero_description4' => 'nullable',
            'solution_cards_heading' => 'nullable',
            'counter_heading' => 'nullable',
            'result_cards_heading' => 'nullable',
            'cta_title' => 'nullable',
            'cta_image' => 'nullable|image',
        ]);

        // Save hero and CTA images if uploaded
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('industries', 'public');
        }
        if ($request->hasFile('cta_image')) {
            $data['cta_image'] = $request->file('cta_image')->store('industries', 'public');
        }

        // Create industry
        $industry = Industry::create($data);

        // Save related categories
        if ($request->has('related_industries')) {
            $industry->related()->sync($request->related_industries);
        }

        // Save Solution Cards
        if ($request->has('cards')) {
            foreach ($request->cards as $cardData) {
                $industry->industryCards()->create($cardData);
            }
        }

        // Save Counters
        if ($request->has('counters')) {
            foreach ($request->counters as $counterData) {
                $industry->industryCounters()->create($counterData);
            }
        }

        // Save Result Cards with image upload
        $resultCardFiles = $request->file('result_cards');
        if ($request->has('result_cards')) {
            foreach ($request->result_cards as $i => $resultCardData) {
                if (isset($resultCardFiles[$i]['card_image']) && $resultCardFiles[$i]['card_image']->isValid()) {
                    $resultCardData['card_image'] = $resultCardFiles[$i]['card_image']->store('industries/result_cards', 'public');
                }
                $industry->industryResultCards()->create($resultCardData);
            }
        }

        return redirect()->route('admin.industries.index')->with('success', 'Industry created.');
    }

    public function edit($id)
    {
        $industry = Industry::with(['industryCards', 'industryCounters', 'industryResultCards', 'related'])->findOrFail($id);
        $allIndustries = Industry::where('id', '!=', $id)->get(); // Exclude self from selection
        return view('admin.industries.edit', compact('industry', 'allIndustries'));
    }

    public function update(Request $request, $id)
    {
        $industry = Industry::findOrFail($id);

        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:industries,slug,' . $id,
            'parent_id' => 'nullable|exists:industries,id',
            'hero_heading' => 'nullable',
            'hero_description' => 'nullable',
            'hero_image' => 'nullable|image',
            'subhero_heading' => 'nullable',
            'subhero_description1' => 'nullable',
            'subhero_description2' => 'nullable',
            'subhero_description3' => 'nullable',
            'subhero_description4' => 'nullable',
            'solution_cards_heading' => 'nullable',
            'counter_heading' => 'nullable',
            'result_cards_heading' => 'nullable',
            'cta_title' => 'nullable',
            'cta_image' => 'nullable|image',
        ]);

        // Save hero and CTA images if uploaded
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('industries', 'public');
        }
        if ($request->hasFile('cta_image')) {
            $data['cta_image'] = $request->file('cta_image')->store('industries', 'public');
        }

        // Update industry
        $industry->update($data);

        // Update related categories
        if ($request->has('related_industries')) {
            $industry->related()->sync($request->related_industries);
        } else {
            $industry->related()->detach();
        }

        // Clear existing related records to avoid duplicates
        $industry->industryCards()->delete();
        $industry->industryCounters()->delete();
        $industry->industryResultCards()->delete();

        // Re-save Solution Cards
        if ($request->has('cards')) {
            foreach ($request->cards as $cardData) {
                $industry->industryCards()->create($cardData);
            }
        }

        // Re-save Counters
        if ($request->has('counters')) {
            foreach ($request->counters as $counterData) {
                $industry->industryCounters()->create($counterData);
            }
        }

        // Re-save Result Cards with image upload
        $resultCardFiles = $request->file('result_cards');
        if ($request->has('result_cards')) {
            foreach ($request->result_cards as $i => $resultCardData) {
                if (isset($resultCardFiles[$i]['card_image']) && $resultCardFiles[$i]['card_image']->isValid()) {
                    $resultCardData['card_image'] = $resultCardFiles[$i]['card_image']->store('industries/result_cards', 'public');
                }
                $industry->industryResultCards()->create($resultCardData);
            }
        }

        return redirect()->route('admin.industries.index')->with('success', 'Industry updated.');
    }

    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        $industry->delete();
        return back()->with('success', 'Industry deleted.');
    }
}
