@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New Topic</h2>
    <form action="{{ route('admin.topics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-bold">Topic Name *</label>
            <input type="text" name="name" class="form-control" required>
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <button class="btn btn-success">Create Topic</button>
        <a href="{{ route('admin.topics.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
