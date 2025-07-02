<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industry;

class AgribusinessController extends Controller
{

    public function index($slug)
    {
        // Replace 'agribusiness' with the slug you want to fetch dynamically
        $industry = Industry::where('slug', $slug)
            ->with(['industryCards', 'industryCounters', 'industryResultCards'])
            ->firstOrFail();

        return view('frontend.pages.agribusiness', compact('industry'));
    }

}