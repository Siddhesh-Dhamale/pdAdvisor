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

class AboutController extends Controller
{
    public function index()
    {
        // Retrieve all data from each model
        $approches = Approach::all();
        $csrs = CSR::all();
        $experiences = Experience::all();
        $subheros = Subhero::all();
        $valuePoints = ValuePoints::all();
        $values = Values::all();

        // Pass data to the view
        return view('frontend.pages.about', compact(
            'approches',
            'csrs',
            'experiences',
            'subheros',
            'valuePoints',
            'values'
        ));
    }
}
