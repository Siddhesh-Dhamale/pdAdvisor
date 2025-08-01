<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function index()
    {
        // Fetch hero section(s) for the "contact" page
        $heroSections = HeroSection::where('page_name', 'contact')->get();

        // Fetch ContactUs data (assuming only one record, use first())
        $contactUs = ContactUs::first();
        // print_r($contactUs);

        // Pass to the view
        return view('frontend.pages.contact', compact('heroSections', 'contactUs'));
    }
}
