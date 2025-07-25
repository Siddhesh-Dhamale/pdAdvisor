@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-pencil-square me-2"></i>
                        Edit Values Section
                    </h5>
                </div>
                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success mb-3">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.about.update', ['section' => 'values', 'id' => $item->id]) }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading <span class="text-danger">*</span></label>
                            <input type="text" id="heading" name="heading"
                                class="form-control @error('heading') is-invalid @enderror"
                                value="{{ old('heading', $item->heading) }}" required>
                            @error('heading')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            @if($item->image_url)
                            <div class="mb-2">
                                <img src="{{ asset('frontend/img/about/' . $item->image_url) }}" alt="Current Image" class="img-thumbnail" style="max-width: 180px;">
                            </div>
                            @else
                            <p class="text-muted small">No image uploaded.</p>
                            @endif
                            <input type="file" id="image" name="image"
                                class="form-control @error('image') is-invalid @enderror"
                                accept="image/*">
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Upload a new image to replace the current one (optional).</small>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back to About Management
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i> Update
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection