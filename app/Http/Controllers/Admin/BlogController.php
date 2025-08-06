<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Industry;
use App\Models\Solution; // Add this if not already
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();

        if ($request->filled('solution_title')) {
            $query->whereHas('solutions', function ($q) use ($request) {
                $q->where('title', $request->input('solution_title'));
            });
        }
        if ($request->filled('industry_title')) {
            $query->whereHas('industries', function ($q) use ($request) {
                $q->where('title', $request->input('industry_title'));
            });
        }

        $blogs = $query->latest()->paginate(10);
        $solutions = Solution::all();
        $industries = Industry::all();

        return view('admin.blog.index', compact('blogs', 'solutions', 'industries'));
    }

    public function create()
    {
        $solutions = Solution::all();
        $industries = Industry::all();

        return view('admin.blog.create', compact('solutions', 'industries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'body' => 'required|string',
            'image' => 'nullable|image|',
            'solution_titles' => 'array|nullable',
            'solution_titles.*' => 'string|exists:solutions,title',
            'industry_titles' => 'array|nullable',
            'industry_titles.*' => 'string|exists:industries,title',
        ]);

        $blogData = $request->only(['title', 'slug', 'body']);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid('blog_') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/img/blog'), $imageName);
            $blogData['image'] = $imageName;
        }

        $blog = Blog::create($blogData);

        // Attach solutions (by title)
        if ($request->filled('solution_titles')) {
            foreach ($request->input('solution_titles') as $title) {
                DB::table('blog_solutions')->insert([
                    'blog_id' => $blog->id,
                    'solution_title' => $title,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Attach industries (by title)
        if ($request->filled('industry_titles')) {
            foreach ($request->input('industry_titles') as $title) {
                DB::table('blog_industry')->insert([
                    'blog_id' => $blog->id,
                    'industry_title' => $title,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully.');
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $solutions = Solution::all();
        $industries = Industry::all();
        // Get selected solution_titles from the pivot table
        $selectedSolutions = DB::table('blog_solutions')
            ->where('blog_id', $blog->id)
            ->pluck('solution_title')
            ->toArray();
        // Get selected industry_titles from pivot
        $selectedIndustries = DB::table('blog_industry')
            ->where('blog_id', $blog->id)
            ->pluck('industry_title')
            ->toArray();

        return view('admin.blog.edit', compact('blog', 'solutions', 'industries', 'selectedSolutions', 'selectedIndustries'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'body' => 'required|string',
            'image' => 'nullable|image|',
            'solution_titles' => 'array|nullable',
            'solution_titles.*' => 'string|exists:solutions,title',
            'industry_titles' => 'array|nullable',
            'industry_titles.*' => 'string|exists:industries,title',
        ]);

        $blogData = $request->only(['title', 'slug', 'body']);

        if ($request->hasFile('image')) {
            // Remove old image if any
            $oldImagePath = public_path('frontend/img/blog/' . $blog->image);
            if ($blog->image && file_exists($oldImagePath)) {
                @unlink($oldImagePath);
            }
            $image = $request->file('image');
            $imageName = uniqid('blog_') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('frontend/img/blog'), $imageName);
            $blogData['image'] = $imageName;
        }
        $blog->update($blogData);

        // Sync solutions (by title)
        DB::table('blog_solutions')->where('blog_id', $blog->id)->delete();
        if ($request->filled('solution_titles')) {
            foreach ($request->input('solution_titles') as $title) {
                DB::table('blog_solutions')->insert([
                    'blog_id' => $blog->id,
                    'solution_title' => $title,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Sync industries
        DB::table('blog_industry')->where('blog_id', $blog->id)->delete();
        if ($request->filled('industry_titles')) {
            foreach ($request->input('industry_titles') as $title) {
                DB::table('blog_industry')->insert([
                    'blog_id' => $blog->id,
                    'industry_title' => $title,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        DB::table('blog_solutions')->where('blog_id', $blog->id)->delete();
        DB::table('blog_industry')->where('blog_id', $blog->id)->delete();

        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }

    // Summernote inline image uploads for WYSIWYG body 
    public function imageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blog-wysiwyg', 'public');
            return asset('storage/' . $path); // sent as image url to summernote
        }
        return response()->json(['error' => 'No image uploaded.'], 400);
    }
}
