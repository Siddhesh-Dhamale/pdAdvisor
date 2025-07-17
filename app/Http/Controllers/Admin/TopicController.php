<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::latest()->paginate(20);
        return view('admin.topics.index', compact('topics'));
    }

    public function create()
    {
        return view('admin.topics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:topics,name|max:255',
        ]);
        Topic::create(['name' => $request->name]);
        return redirect()->route('admin.topics.index')->with('success', 'Topic created!');
    }

    public function edit(Topic $topic)
    {
        return view('admin.topics.edit', compact('topic'));
    }

    public function update(Request $request, Topic $topic)
    {
        $request->validate([
            'name' => 'required|string|unique:topics,name,' . $topic->id . '|max:255',
        ]);
        $topic->update(['name' => $request->name]);
        return redirect()->route('admin.topics.index')->with('success', 'Topic updated!');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('admin.topics.index')->with('success', 'Topic deleted!');
    }
}
