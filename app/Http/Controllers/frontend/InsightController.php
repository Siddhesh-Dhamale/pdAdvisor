<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Solution;
use App\Models\Industry;
use App\Models\HeroSection;
use App\Models\SolIndIn;

class InsightController extends Controller
{
    public function index(Request $request)
    {
        // Start blog query with eager loading
        $query = Blog::with(['solutions', 'industries']);

        // Filter by Solution
        if ($request->filled('solution')) {
            $query->whereHas('solutions', function ($q) use ($request) {
                $q->where('title', $request->solution);  // adjust column name as per DB
            });
        }

        // Filter by Industry
        if ($request->filled('industry')) {
            $query->whereHas('industries', function ($q) use ($request) {
                $q->where('title', $request->industry);
            });
        }

        // Search in title/body
        if ($request->filled('q')) {
            $search = $request->q;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('body', 'like', "%{$search}%");
            });
        }

        // Get paginated blogs
        $blogs = $query->orderBy('created_at', 'desc')->paginate(9);

        // Filter lists and hero/CTA content
        $solutions     = Solution::all();
        $industries    = Industry::all();
        $heroSections  = HeroSection::where('page_name', 'insights')->get();
        $solIndIns     = SolIndIn::where('page_name', 'insights')->get();

        return view('frontend.pages.insight', compact(
            'blogs',
            'solutions',
            'industries',
            'heroSections',
            'solIndIns'
        ));
    }

    public function show($slug)
    {
        $blog = Blog::with(['solutions', 'industries'])
            ->where('slug', $slug)
            ->firstOrFail();

        $heroSections = HeroSection::where('page_name', 'insights')->get();
        $solIndIns    = SolIndIn::where('page_name', 'insights')->get();

        return view('frontend.pages.singleBlog', compact(
            'blog',
            'heroSections',
            'solIndIns'
        ));
    }
}
