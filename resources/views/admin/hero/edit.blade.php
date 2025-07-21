@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Hero Section</h2>
    <form action="{{ route('admin.hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="fw-bold">Page Name *</label>
            <input type="text" name="page_name" class="form-control" required value="{{ old('page_name', $hero->page_name) }}">
        </div>

        <div class="mb-3">
            <label class="fw-bold">Banner Image</label><br>
            @if($hero->banner_image)
                <img src="{{ asset('frontend/img/hero/' . $hero->banner_image) }}" alt="Banner Image" width="80" class="mb-2"><br>
            @endif
            <input type="file" name="banner_image" class="form-control">
            <small class="text-muted">Leave blank to keep old image.</small>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Icon Image</label><br>
            @if($hero->icon)
                <img src="{{ asset('frontend/img/hero/' . $hero->icon) }}" alt="Icon Image" width="40" class="mb-2"><br>
            @endif
            <input type="file" name="icon" class="form-control">
            <small class="text-muted">Leave blank to keep old icon.</small>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Icon Text</label>
            <input type="text" name="icon_text" class="form-control" value="{{ old('icon_text', $hero->icon_text) }}">
        </div>

        <div class="mb-3">
            <label class="fw-bold">Banner Content</label>
            <textarea name="banner_content" class="form-control rich-editor" rows="4">{!! old('banner_content', $hero->banner_content) !!}</textarea>
        </div>

        <div class="mb-3">
            <label class="fw-bold">Button Text</label>
            <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $hero->button_text) }}">
        </div>

        <div class="mb-3">
            <label class="fw-bold">Button URL</label>
            <input type="text" name="button_url" class="form-control" value="{{ old('button_url', $hero->button_url) }}">
        </div>
        
        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.hero.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
        $('.rich-editor').summernote({
            height: 120
        });
    });
</script>
@endsection
