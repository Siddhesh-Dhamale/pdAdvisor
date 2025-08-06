<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Industry;

class AgribusinessController extends Controller
{

    public function index($slug)
    {
        // Replace 'agribusiness' with the slug you want to fetch dynamically
        $blogs = Blog::get();
        // dd($blogs);

        $industry = Industry::where('slug', $slug)

            ->with(['industryCards', 'industryCounters', 'industryResultCards'])
            ->firstOrFail();

        return view('frontend.pages.industry', compact('industry', 'blogs'));
    }
}
