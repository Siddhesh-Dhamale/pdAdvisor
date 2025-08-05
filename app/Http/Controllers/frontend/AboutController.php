<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import all models from the 'about' folder
use App\Models\about\Approach;
use App\Models\about\CSR;
use App\Models\about\Experience;
use App\Models\about\Subhero;
use App\Models\about\ValuePoints;
use App\Models\about\Values;
use App\Models\HeroSection;

class AboutController extends Controller
{
    public function index()
    {
        // Retrieve all data from each model
        $heroes = HeroSection::where('page_name', 'About Us')->get();
        $approches = Approach::all();
        $csrs = CSR::all();
        $experiences = Experience::all();
        $subheros = Subhero::all();
        $valuePoints = ValuePoints::all();
        $values = Values::all();
// dd($hero);

        // Pass data to the view
        return view('frontend.pages.about', compact(
            'heroes',
            'approches',
            'csrs',
            'experiences',
            'subheros',
            'valuePoints',
            'values'
        ));
    }
}
