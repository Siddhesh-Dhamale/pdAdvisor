<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Industry;
use App\Models\HeroSection;
use App\Models\SolIndIn;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index()
    {
        $industries = Industry::whereNull('parent_id')
            ->orderByRaw('sort_order IS NULL, sort_order ASC')
            ->get();

        // Fetch hero section records for "industries" page
        $heroSections = HeroSection::where('page_name', 'industries')->get();

        // Fetch SolIndIn content for "industries" page
        $solIndIns = SolIndIn::where('page_name', 'industries')->get();
        // print_r($solIndIns);

        return view('frontend.pages.industries', compact(
            'industries',
            'heroSections',
            'solIndIns'
        ));
    }

    public function show($slug)
    {
        $industry = Industry::where('slug', $slug)->firstOrFail();

        // Fetch hero section records for "industries" page
        $heroSections = HeroSection::where('page_name', 'industries')->get();

        // Fetch SolIndIn content for "industries" page
        $solIndIns = SolIndIn::where('page_name', 'industries')->get();
        $blogs = Blog::get();

        return view('frontend.pages.industry', compact(
            'industry',
            'heroSections',
            'solIndIns',
            'blogs',
        ));
    }
}
