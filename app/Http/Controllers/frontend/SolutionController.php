<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solution; // Assuming you have a Solution model

class SolutionController extends Controller
{
    public function index()
    {
        // $solutions = Solution::all(); // fetch all solutions from DB
        // return view('frontend.pages.solutions.index', compact('solutions'));
    }

    public function show($slug)
    {
        $solution = Solution::where('slug', $slug)
            ->with(['solutionCards', 'solutionCounters', 'solutionResultCards', 'services'])
            ->firstOrFail();
        // dd($solution->services);

        return view('frontend.pages.solutions', compact('solution'));
    }
}
