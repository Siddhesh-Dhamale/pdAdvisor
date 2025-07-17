<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Topic;
use App\Models\Industry;

class InsightController extends Controller
{
    public function index(Request $request)
    {
        // Start query
        $query = Blog::query()->with(['topics', 'industries']);

        // Filter by Topic
        if ($request->filled('topic')) {
            $query->whereHas('topics', function($q) use ($request) {
                $q->where('name', $request->topic);
            });
        }

        // Filter by Industry
        if ($request->filled('industry')) {
            $query->whereHas('industries', function($q) use ($request) {
                $q->where('title', $request->industry);
            });
        }

        // Optional: Search by title/body
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function($sub) use ($q) {
                $sub->where('title', 'LIKE', "%$q%")
                    ->orWhere('body', 'LIKE', "%$q%");
            });
        }

        // Get paginated blogs
        $blogs = $query->orderBy('created_at', 'desc')->paginate(9);

        // For rendering filter options in your view
        $topics = Topic::all();
        $industries = Industry::all();

        // Pass to view (implement Blade as you want)
        return view('frontend.pages.insight', compact('blogs', 'topics', 'industries'));
    }

    public function show($slug)
    {
        $blog = Blog::with(['topics', 'industries'])->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.singleBlog', compact('blog'));
    }
}
