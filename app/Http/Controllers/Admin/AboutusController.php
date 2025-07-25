<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

// Import your About models
use App\Models\about\Subhero;
use App\Models\about\Approach;
use App\Models\about\Values;
use App\Models\about\ValuePoints;
use App\Models\about\Experience;
use App\Models\about\Csr;

class AboutusController extends Controller
{
    /**
     * Show a list of all About Us sections data.
     */
    public function index()
    {
        $subhero = Subhero::all();
        $approach = Approach::all();

        // Fetch Values independently (no relation)
        $values = Values::all();

        // Fetch ValuePoints independently
        $valuepoints = ValuePoints::orderBy('position')->get();

        $experience = Experience::all();
        $csr = Csr::all();

        return view('admin.about.index', compact('subhero', 'approach', 'values', 'valuepoints', 'experience', 'csr'));
    }

    /**
     * Show form to create a new record for the section.
     */
    public function create($section)
    {
        $model = $this->getModelInstance($section);

        if (!$model) {
            abort(404, "Section [$section] not found.");
        }

        return view("admin.about.{$section}.create");
    }

    /**
     * Store new record for the section.
     */
    public function store(Request $request, $section)
    {
        $model = $this->getModelInstance($section);

        if (!$model) {
            abort(404, "Section [$section] not found.");
        }

        $data = $request->except('image', '_token');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($section) . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/img/about'), $imageName);
            $data['image_url'] = $imageName;
        }

        $model::create($data);

        if (strtolower($section) === 'valuepoints') {
            return redirect()->route('admin.about.valuepoints.index')->with('success', ucfirst($section) . ' created successfully.');
        }

        return redirect()->route('admin.about.index')->with('success', ucfirst($section) . ' created successfully.');
    }


    /**
     * Show form to edit a specific section record.
     */
    public function edit($section, $id)
    {
        $model = $this->getModelInstance($section);

        if (!$model) {
            abort(404, "Section [$section] not found.");
        }

        $item = $model::findOrFail($id);

        return view("admin.about.{$section}.edit", compact('item'));
    }

    /**
     * Update section record.
     */
    public function update(Request $request, $section, $id)
    {
        $model = $this->getModelInstance($section);

        if (!$model) {
            abort(404, "Section [$section] not found.");
        }

        $item = $model::findOrFail($id);

        $data = $request->except('image', '_token', '_method');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($section) . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/img/about'), $imageName);
            $data['image_url'] = $imageName;
        }

        $item->update($data);

        if (strtolower($section) === 'valuepoints') {
            return redirect()->route('admin.about.valuepoints.index')->with('success', ucfirst($section) . ' updated successfully.');
        }

        return redirect()->route('admin.about.index')->with('success', ucfirst($section) . ' created successfully.');
    }

    /**
     * Delete a record for a section.
     */
    public function destroy($section, $id)
    {
        $model = $this->getModelInstance($section);

        if (!$model) {
            abort(404, "Section [$section] not found.");
        }

        $item = $model::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', ucfirst($section) . ' deleted successfully.');
    }

    /**
     * Additional dedicated method for managing Value Points index page.
     */
    public function valuePointsIndex()
    {
        $valuepoints = ValuePoints::orderBy('position')->get();

        return view('admin.about.valuepoints.index', compact('valuepoints'));
    }

    /**
     * Helper method to resolve model class by section string.
     */
    protected function getModelInstance(string $section)
    {
        $section = strtolower(trim($section));
        Log::debug("getModelInstance called with section: {$section}");

        switch ($section) {
            case 'subhero':
            case 'subherosection':
                Log::debug("Matched section: subhero");
                return Subhero::class;

            case 'approach':
            case 'approachsection':
                Log::debug("Matched section: approach");
                return Approach::class;

            case 'values':
            case 'valuessection':
                Log::debug("Matched section: values");
                return Values::class;

            case 'valuepoints':
            case 'valuepoint':
                Log::debug("Matched section: valuepoints");
                return ValuePoints::class;

            case 'experience':
            case 'experiencesection':
                Log::debug("Matched section: experience");
                return Experience::class;

            case 'csr':
            case 'csrsection':
                Log::debug("Matched section: csr");
                return Csr::class;

            default:
                Log::warning("No model matched for section: {$section}");
                return null;
        }
    }
}
