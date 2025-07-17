@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Topic</h2>
    <form action="{{ route('admin.topics.update', $topic) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label fw-bold">Topic Name *</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $topic->name) }}">
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <button class="btn btn-success">Update Topic</button>
        <a href="{{ route('admin.topics.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
