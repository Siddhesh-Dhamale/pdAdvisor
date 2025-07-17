@extends('admin.layouts.app')

@section('head')
    <!-- Summernote CSS (Bootstrap 4 style, works fine with Bootstrap 5 too) -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <form class="card p-4 shadow" action="{{ route('admin.blog.update', $blog) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h3 class="fw-bold mb-4">Edit Blog</h3>

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
                @endif

                <div class="mb-3">
                    <label class="form-label fw-bold ">Title *</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $blog->title) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Slug *</label>
                    <input type="text" class="form-control" name="slug" value="{{ old('slug', $blog->slug) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Main Image</label>
                    <input type="file" class="form-control" name="image" accept="image/*">
                    @if($blog->image)
                        <div class="mt-2">
                            <img src="{{ asset('frontend/img/blog/' . $blog->image) }}" style="height:80px; border-radius:6px;">
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Body *</label>
                    <textarea id="summernote" class="form-control" name="body" rows="7" required>{{ old('body', $blog->body) }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold mb-2">Topics</label>
                    <div class="row">
                        @foreach($topics as $topic)
                            <div class="col-md-4 col-sm-6 mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="topic_names[]" value="{{ $topic->name }}"
                                        id="topic_{{ $topic->id }}"
                                        {{ collect(old('topic_names', $selectedTopics))->contains($topic->name) ? 'checked' : '' }}>
                                    <label class="form-check-label fw-bold" for="topic_{{ $topic->id }}">
                                        {{ $topic->name }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold mb-2">Industries</label>
                    <div class="row">
                        @foreach($industries as $industry)
                            <div class="col-md-4 col-sm-6 mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="industry_titles[]" value="{{ $industry->title }}"
                                        id="industry_{{ $industry->id }}"
                                        {{ collect(old('industry_titles', $selectedIndustries))->contains($industry->title) ? 'checked' : '' }}>
                                    <label class="form-check-label fw-bold" for="industry_{{ $industry->id }}">
                                        {{ $industry->title }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary ml-2">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>
    <script>
        $(function(){
            $('#summernote').summernote({
                height: 300
            });
        });
    </script>
@endsection
