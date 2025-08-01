<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the Contact Us entries.
     */
    public function index()
    {
        $contactData = ContactUs::first();
        return view('admin.contactus.index', compact('contactData'));
    }


    /**
     * Show the form for creating a new Contact Us entry.
     */
    public function create()
    {
        return view('admin.contactus.create');
    }

    /**
     * Store a newly created Contact Us entry in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'page_title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'email_1' => 'required|email|max:255',
            'email_2' => 'nullable|email|max:255',
            'phone_number_1' => 'required|string|max:20',
            'phone_number_2' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'map_url' => 'nullable|string',
            'form_heading' => 'required|string|max:255',
            'facebook_link' => 'nullable|string|max:255',
            'insta_link' => 'nullable|string|max:255',
            'twitter_link' => 'nullable|string|max:255',
            'linkedin_link' => 'nullable|string|max:255',
            'youtube_link' => 'nullable|string|max:255',
        ]);

        ContactUs::create($validated);

        return redirect()->route('admin.contact-us.index')->with('success', 'Contact Us data created successfully.');
    }

    /**
     * Show the form for editing the specified Contact Us entry.
     */
    public function edit($id)
    {
        $contactData = ContactUs::findOrFail($id);
        return view('admin.contactus.edit', compact('contactData'));
    }

    /**
     * Update the specified Contact Us entry in storage.
     */
    public function update(Request $request, $id)
    {
        $contactData = ContactUs::findOrFail($id);

        $validated = $request->validate([
            'page_title' => 'required|string|max:255',
            'heading' => 'required|string|max:255',
            'email_1' => 'required|email|max:255',
            'email_2' => 'nullable|email|max:255',
            'phone_number_1' => 'required|string|max:20',
            'phone_number_2' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'map_url' => 'nullable|string',
            'form_heading' => 'required|string|max:255',
            'facebook_link' => 'nullable|string|max:255',
            'insta_link' => 'nullable|string|max:255',
            'twitter_link' => 'nullable|string|max:255',
            'linkedin_link' => 'nullable|string|max:255',
            'youtube_link' => 'nullable|string|max:255',
        ]);

        $contactData->update($validated);

        return redirect()->route('admin.contact-us.index')->with('success', 'Contact Us data updated successfully.');
    }

    /**
     * Remove the specified Contact Us entry from storage.
     */
    public function destroy($id)
    {
        $contactData = ContactUs::findOrFail($id);
        $contactData->delete();

        return redirect()->route('admin.contact-us.index')->with('success', 'Contact Us data deleted successfully.');
    }
}
