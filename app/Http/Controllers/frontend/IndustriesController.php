<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index()
    {
        $industries = \App\Models\Industry::pluck('slug', 'title')->toArray();
        return view('frontend.pages.industries', compact('industries'));
    }
    public function show($slug)
    {
        $industry = \App\Models\Industry::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.industry', compact('industry'));
    }


}
