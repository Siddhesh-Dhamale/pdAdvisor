<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\HeroSection;
use App\Models\Home\IndustrySlide;
use App\Models\Home\Counter;
use App\Models\Home\BlogSection;
use App\Models\Home\Cta;
use App\Models\Home\Insight;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all hero sections with "Home page"
        $heroSlides = HeroSection::where('page_name', 'Home page')->get();

        $industrySlides = IndustrySlide::all();
        $counters = Counter::all();
        $blogSection = BlogSection::first();
        $cta = Cta::first();
        $insights = Insight::first();
        $blogs = Blog::all();
        // print_r($insights);
        // echo "blogs";
        // print_r($insights);
        // exit;

        // Prepare heroIcons from the same heroSlides data by plucking the icon and icon_text
        $heroIcons = $heroSlides->map(function ($slide, $index) {
            return [
                'image_path' => 'frontend/img/hero/' . ltrim($slide->icon, '/'), // Icon file relative to public folder
                'text' => $slide->icon_text ?? '',
                'slide_index' => $index,
            ];
        });

        return view('frontend.pages.home', compact(
            'heroSlides',
            'industrySlides',
            'counters',
            'blogSection',
            'cta',
            'insights',
            'heroIcons',
            'blogs'
        ));
    }
}
