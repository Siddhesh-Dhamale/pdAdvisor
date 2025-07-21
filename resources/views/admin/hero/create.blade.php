@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add Hero Section</h2>
    <form action="{{ route('admin.hero.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        <div class="mb-3">
            <label class="fw-bold" class="fw-bold">Page Name *</label>
            <input type="text" name="page_name" class="form-control" required value="{{ old('page_name') }}">
        </div>
        <div class="mb-3">
            <label class="fw-bold" class="fw-bold">Banner Image</label>
            <input type="file" name="banner_image" class="form-control">
        </div>
        <div class="mb-3">
            <label class="fw-bold" class="fw-bold">Icon Image</label>
            <input type="file" name="icon" class="form-control">
        </div>
        <div class="mb-3">
            <label class="fw-bold" class="fw-bold">Icon Text</label>
            <input type="text" name="icon_text" class="form-control" value="{{ old('icon_text') }}">
        </div>
        <div class="mb-3">
            <label class="fw-bold" class="fw-bold">Banner Content</label>
            <textarea name="banner_content" class="form-control rich-editor" rows="4">{{ old('banner_content') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="fw-bold" class="fw-bold">Button Text</label>
            <input id="summernote" type="text" name="button_text" class="form-control" value="{{ old('button_text') }}">
        </div>
        <div class="mb-3">
            <label class="fw-bold" class="fw-bold">Button URL</label>
            <input type="text" name="button_url" class="form-control" value="{{ old('button_url') }}">
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('admin.hero.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
        $('.rich-editor').summernote({
            height: 120,
        });
    });
</script>

@endsection