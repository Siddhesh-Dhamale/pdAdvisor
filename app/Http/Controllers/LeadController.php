<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Mail\LeadSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class LeadController extends Controller

{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:50',
            'company' => 'nullable|max:255',
            'website' => 'nullable|url|max:255',
            'message' => 'nullable|string|max:3000',
        ]);

        $lead = Lead::create($validated);

        // Real-time mail send; use your email below
        Mail::to('webdeveloper.crezvatic@gmail.com')->send(new LeadSubmitted($lead));

        return back()->with('success', 'Thank you! Your inquiry has been received.');
    }
}
