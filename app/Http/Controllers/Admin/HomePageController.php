<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Home\IndustrySlide;
use App\Models\Home\Counter;
use App\Models\Home\BlogSection;
use App\Models\Home\Cta;
use App\Models\Home\Insight;

class HomePageController extends Controller
{
    // INDUSTRY SLIDES CRUD

    public function industrySlidesIndex()
    {
        $slides = IndustrySlide::all();
        return view('admin.home.industry_slides.index', compact('slides'));
    }

    public function industrySlidesCreate()
    {
        return view('admin.home.industry_slides.create');
    }

    public function industrySlidesStore(Request $request)
    {
        $servicesArray = $request->input('services', []);
        $servicesArray = array_filter(array_map('trim', $servicesArray));
        $servicesString = implode(',', $servicesArray);

        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'question' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $validated['services'] = $servicesString;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = 'industry_slide_' . time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('frontend/img/home');
            $file->move($destinationPath, $filename);
            $validated['img'] = $filename;
        }

        IndustrySlide::create($validated);

        return redirect()->route('admin.home.industrySlides.index')
            ->with('success', 'Industry Slide created successfully.');
    }


    public function industrySlidesEdit(IndustrySlide $industrySlide)
    {
        return view('admin.home.industry_slides.edit', compact('industrySlide'));
    }

    public function industrySlidesUpdate(Request $request, IndustrySlide $industrySlide)
    {
        $servicesArray = $request->input('services', []);
        $servicesArray = array_filter(array_map('trim', $servicesArray));
        $servicesString = implode(',', $servicesArray);

        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'question' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $validated['services'] = $servicesString;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = 'industry_slide_' . time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('frontend/img/home');

            // Delete old image if exists
            if ($industrySlide->img) {
                $oldPath = $destinationPath . '/' . $industrySlide->img;
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file->move($destinationPath, $filename);
            $validated['img'] = $filename;
        }

        $industrySlide->update($validated);

        return redirect()->route('admin.home.industrySlides.index')
            ->with('success', 'Industry Slide updated successfully.');
    }


    public function industrySlidesDestroy(IndustrySlide $industrySlide)
    {
        $industrySlide->delete();

        return redirect()->route('admin.home.industrySlides.index')
            ->with('success', 'Industry Slide deleted successfully.');
    }

    // COUNTERS CRUD

    public function countersIndex()
    {
        $counters = Counter::all();
        return view('admin.home.counters.index', compact('counters'));
    }

    public function countersCreate()
    {
        return view('admin.home.counters.create');
    }

    public function countersStore(Request $request)
    {
        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'count' => 'required|integer|min:0',
            'count_title' => 'nullable|string|max:255',
            'symbol' => 'nullable|string|max:10',
        ]);

        Counter::create($validated);

        return redirect()->route('admin.home.counters.index')
            ->with('success', 'Counter created successfully.');
    }

    public function countersEdit(Counter $counter)
    {
        return view('admin.home.counters.edit', compact('counter'));
    }

    public function countersUpdate(Request $request, Counter $counter)
    {
        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'count' => 'required|integer|min:0',
            'count_title' => 'nullable|string|max:255',
            'symbol' => 'nullable|string|max:10',
        ]);

        $counter->update($validated);

        return redirect()->route('admin.home.counters.index')
            ->with('success', 'Counter updated successfully.');
    }

    public function countersDestroy(Counter $counter)
    {
        $counter->delete();

        return redirect()->route('admin.home.counters.index')
            ->with('success', 'Counter deleted successfully.');
    }

    // BLOG SECTION CRUD (single row)

    public function blogSectionEdit()
    {
        $blogSection = BlogSection::first();
        return view('admin.home.blog_section.edit', compact('blogSection'));
    }

    public function blogSectionUpdate(Request $request)
    {
        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
        ]);

        $blogSection = BlogSection::first();

        if ($blogSection) {
            $blogSection->update($validated);
        } else {
            BlogSection::create($validated);
        }

        return redirect()->route('admin.home.blogSection.edit')
            ->with('success', 'Blog Section updated successfully.');
    }

    // CTA CRUD (single row with image upload)

    public function ctaEdit()
    {
        $cta = Cta::first();
        return view('admin.home.cta.edit', compact('cta'));
    }

    public function ctaUpdate(Request $request)
    {
        $validated = $request->validate([
            'heading' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $cta = Cta::first();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = 'cta_' . time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('frontend/img/home');

            // Delete old image
            if ($cta && $cta->img) {
                $oldPath = $destinationPath . '/' . $cta->img;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $file->move($destinationPath, $filename);
            $validated['img'] = $filename;
        }

        if ($cta) {
            $cta->update($validated);
        } else {
            Cta::create($validated);
        }

        return redirect()->route('admin.home.cta.edit')
            ->with('success', 'CTA updated successfully.');
    }

    // INSIGHTS CRUD (single row)

    public function insightsEdit()
    {
        $insights = Insight::first();
        return view('admin.home.insights.edit', compact('insights'));
    }

    public function insightsUpdate(Request $request)
    {
        $validated = $request->validate([
            'insight_heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string|max:255',
        ]);

        $insights = Insight::first();

        if ($insights) {
            $insights->update($validated);
        } else {
            Insight::create($validated);
        }

        return redirect()->route('admin.home.insights.edit')
            ->with('success', 'Insights updated successfully.');
    }
}
