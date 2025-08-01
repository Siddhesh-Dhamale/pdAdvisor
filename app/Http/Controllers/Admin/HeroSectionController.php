<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index()
    {
        $sections = HeroSection::all();
        return view('admin.hero.index', compact('sections'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page_name' => 'required|max:255',
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'icon_text' => 'nullable|string|max:255',
            'banner_content' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
        ]);


        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = 'banner_' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('frontend/img/hero'), $filename);
            $validated['banner_image'] = $filename;
        }

        // Handle icon upload
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = 'icon_' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('frontend/img/hero'), $filename);
            $validated['icon'] = $filename;
        }

        HeroSection::create($validated);

        return redirect()->route('admin.hero.index')
            ->with('success', 'Hero Section created successfully!');
    }

    public function edit(HeroSection $hero)
    {
        return view('admin.hero.edit', ['hero' => $hero]);
    }


    public function update(Request $request, HeroSection $hero)
    {
        $validated = $request->validate([
            'page_name' => 'required|max:255',
            'banner_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,svg',
            'icon' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'icon_text' => 'nullable|string|max:255',
            'banner_content' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
        ]);


        // Update and delete old banner image
        if ($request->hasFile('banner_image')) {
            if ($hero->banner_image) {
                $oldPath = public_path('frontend/img/hero/' . $hero->banner_image);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file = $request->file('banner_image');
            $filename = 'banner_' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('frontend/img/hero'), $filename);
            $validated['banner_image'] = $filename;
        }

        // Update and delete old icon image
        if ($request->hasFile('icon')) {
            if ($hero->icon) {
                $oldPath = public_path('frontend/img/hero/' . $hero->icon);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $file = $request->file('icon');
            $filename = 'icon_' . time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('frontend/img/hero'), $filename);
            $validated['icon'] = $filename;
        }

        $hero->update($validated);

        return redirect()->route('admin.hero.index')
            ->with('success', 'Hero Section updated successfully!');
    }



    public function destroy(HeroSection $hero_section)
    {
        // Delete banner image
        if ($hero_section->banner_image) {
            $imgPath = public_path('frontend/img/hero/' . $hero_section->banner_image);
            if (file_exists($imgPath)) {
                unlink($imgPath);
            }
        }
        // Delete icon
        if ($hero_section->icon) {
            $iconPath = public_path('frontend/img/hero/' . $hero_section->icon);
            if (file_exists($iconPath)) {
                unlink($iconPath);
            }
        }
        $hero_section->delete();

        return redirect()->route('admin.hero.index')
            ->with('success', 'Hero Section deleted successfully!');
    }
}
