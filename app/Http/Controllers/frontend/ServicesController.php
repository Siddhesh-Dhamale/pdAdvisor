<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solution;       // if services relate to solutions
use App\Models\HeroSection;    // assumed model for hero/banner content
use App\Models\SolIndIn;       // or other models for dynamic content

class ServicesController extends Controller
{
    public function index()
    {
        // Fetch services info — using Solution model as you had it,
        // You may rename model and table if "Service" is a different entity.
        $solutions = Solution::select('title', 'slug', 'description', 'icon')
            ->orderByRaw('sort_order IS NULL, sort_order ASC')
            ->get();

        // Fetch HeroSection content specific to 'services' page
        $heroSections = HeroSection::where('page_name', 'solutions')->get();

        // Fetch other dynamic page sections as needed (for example)
        $solIndIns = SolIndIn::where('page_name', 'solutions')->get();
        // print_r($solIndIns);         

        // Pass all data to the view dynamically
        return view('frontend.pages.services', compact('solutions', 'heroSections', 'solIndIns'));
    }
}
