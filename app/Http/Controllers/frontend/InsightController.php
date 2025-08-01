<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Topic;
use App\Models\Industry;
use App\Models\HeroSection; // example model for hero/banner sections
use App\Models\SolIndIn;   // example CTA model

class InsightController extends Controller
{
    public function index(Request $request)
    {
        // Start query with eager loading topics and industries
        $query = Blog::query()->with(['topics', 'industries']);

        // Filter by Topic
        if ($request->filled('topic')) {
            $query->whereHas('topics', function ($q) use ($request) {
                $q->where('name', $request->topic);
            });
        }

        // Filter by Industry
        if ($request->filled('industry')) {
            $query->whereHas('industries', function ($q) use ($request) {
                $q->where('title', $request->industry);
            });
        }

        // Optional: Search by title/body
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($sub) use ($q) {
                $sub->where('title', 'LIKE', "%$q%")
                    ->orWhere('body', 'LIKE', "%$q%");
            });
        }

        // Get paginated blogs
        $blogs = $query->orderBy('created_at', 'desc')->paginate(9);

        // For rendering filter options in your view
        $topics = Topic::all();
        $industries = Industry::all();

        // Fetch HeroSection records for 'insight' page (adjust page_name accordingly)
        $heroSections = HeroSection::where('page_name', 'insight')->get();

        // Fetch CTA or related SolIndIn content for 'insight' page
        $solIndIns = SolIndIn::where('page_name', 'insights')->get();
        // print_r($solIndIns);
        // Pass all to the view
        return view('frontend.pages.insight', compact(
            'blogs',
            'topics',
            'industries',
            'heroSections',
            'solIndIns'
        ));
    }

    public function show($slug)
    {
        $blog = Blog::with(['topics', 'industries'])->where('slug', $slug)->firstOrFail();

        // Fetch HeroSection records for 'insight' page as well for single page
        $heroSections = HeroSection::where('page_name', 'insight')->get();

        // Fetch CTA or related SolIndIn content for 'insight' page
        $solIndIns = SolIndIn::where('page_name', 'insight')->get();


        return view('frontend.pages.singleBlog', compact(
            'blog',
            'heroSections',
            'solIndIns'
        ));
    }
}
