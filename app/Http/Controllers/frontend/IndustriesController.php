<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index()
    {
        $industries = Industry::whereNull('parent_id') 
            ->orderByRaw('sort_order IS NULL, sort_order ASC')
            ->get();

        return view('frontend.pages.industries', compact('industries'));
    }


    public function show($slug)
    {
        $industry = \App\Models\Industry::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.industry', compact('industry'));
    }
}
