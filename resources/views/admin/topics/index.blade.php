@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Topics</h2>
    <a href="{{ route('admin.topics.create') }}" class="btn btn-primary">+ Add Topic</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th style="width:150px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($topics as $topic)
        <tr>
            <td>{{ $topic->name }}</td>
            <td>
                <a href="{{ route('admin.topics.edit', $topic) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.topics.destroy', $topic) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this topic?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="2" class="text-center">No topics found.</td></tr>
        @endforelse
    </tbody>
</table>

{{ $topics->links() }}
@endsection
