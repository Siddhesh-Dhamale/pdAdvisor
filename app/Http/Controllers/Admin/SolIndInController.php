<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SolIndIn;

class SolIndInController extends Controller
{
    protected $imgPath = 'frontend/img/SolIndIns';

    protected function rules()
    {
        return [
            'section_title' => 'nullable|string|max:255',
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'cta_img' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp,gif|max:2048',
            'cta_heading_1' => 'nullable|string|max:255',
            'cta_heading_2' => 'nullable|string|max:255',
            'cta_btn_text' => 'nullable|string|max:255',
            'cta_btn_link' => 'nullable|string|max:255',
        ];
    }

    public function solutions()
    {
        $list = SolIndIn::where('page_name', 'solutions')->get();
        return view('admin.sol_ind_ins.solutions.index', ['items' => $list, 'section' => 'solutions']);
    }

    public function industries()
    {
        $list = SolIndIn::where('page_name', 'industries')->get();
        return view('admin.sol_ind_ins.industries.index', ['items' => $list, 'section' => 'industries']);
    }

    public function insights()
    {
        $list = SolIndIn::where('page_name', 'insights')->get();
        return view('admin.sol_ind_ins.insights.index', ['items' => $list, 'section' => 'insights']);
    }

    public function create($section)
    {
        return view('admin.sol_ind_ins.' . $section . '.create', ['section' => $section]);
    }

    public function store(Request $request, $section)
    {
        $validated = $request->validate($this->rules());
        $validated['page_name'] = $section;

        $dst = public_path($this->imgPath);

        if ($request->hasFile('cta_img')) {
            $file = $request->file('cta_img');
            if (!file_exists($dst)) {
                mkdir($dst, 0755, true);
            }
            $cleanName = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $file->getClientOriginalName());
            $filename = $section . '_cta_' . time() . '_' . $cleanName;
            $file->move($dst, $filename);
            $validated['cta_img'] = $filename;
        }

        SolIndIn::create($validated);

        return redirect()->route('admin.sol_ind_ins.' . $section)
            ->with('success', ucfirst($section) . ' Other Content added.');
    }

    public function edit($id)
    {
        $item = SolIndIn::findOrFail($id);
        return view('admin.sol_ind_ins.' . $item->page_name . '.edit', ['item' => $item, 'section' => $item->page_name]);
    }

    public function update(Request $request, $id)
    {
        $item = SolIndIn::findOrFail($id);

        $validated = $request->validate($this->rules());

        $validated['page_name'] = $item->page_name;
        $dst = public_path($this->imgPath);

        if ($request->hasFile('cta_img')) {
            $file = $request->file('cta_img');
            if (!file_exists($dst)) {
                mkdir($dst, 0755, true);
            }
            $cleanName = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $file->getClientOriginalName());
            $filename = $item->page_name . '_cta_' . time() . '_' . $cleanName;

            if ($item->cta_img && file_exists($dst . '/' . $item->cta_img)) {
                unlink($dst . '/' . $item->cta_img);
            }

            $file->move($dst, $filename);
            $validated['cta_img'] = $filename;
        }

        $item->update($validated);

        return redirect()->route('admin.sol_ind_ins.' . $item->page_name)
            ->with('success', ucfirst($item->page_name) . ' Other Content updated.');
    }

    public function destroy($id)
    {
        $item = SolIndIn::findOrFail($id);
        $dst = public_path($this->imgPath);

        if ($item->cta_img && file_exists($dst . '/' . $item->cta_img)) {
            unlink($dst . '/' . $item->cta_img);
        }

        $sec = $item->page_name;
        $item->delete();

        return redirect()->route('admin.sol_ind_ins.' . $sec)
            ->with('success', ucfirst($sec) . ' Other Content deleted.');
    }
}
