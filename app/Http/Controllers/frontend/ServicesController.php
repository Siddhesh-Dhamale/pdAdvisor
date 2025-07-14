<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $solutions = Solution::select('title', 'slug', 'description', 'icon')
            ->orderByRaw('sort_order IS NULL, sort_order ASC')
            ->get();
        return view('frontend.pages.services', compact('solutions'));
        // return view('frontend.pages.services');
    }
}
