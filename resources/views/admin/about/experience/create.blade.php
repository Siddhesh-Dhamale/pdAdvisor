@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-plus-square me-2"></i>
                        Create New Experience Section
                    </h5>
                </div>
                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success mb-3">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.about.store', ['section' => 'experience']) }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="number" class="form-label">Number <span class="text-danger">*</span></label>
                            <input type="number" id="number" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}" required>
                            @error('number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="heading" class="form-label">Heading <span class="text-danger">*</span></label>
                            <input type="text" id="heading" name="heading" class="form-control @error('heading') is-invalid @enderror" value="{{ old('heading') }}" required>
                            @error('heading')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description_1" class="form-label">Description 1 <span class="text-danger">*</span></label>
                            <textarea id="description_1" name="description_1" class="form-control @error('description_1') is-invalid @enderror" rows="3" required>{{ old('description_1') }}</textarea>
                            @error('description_1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description_2" class="form-label">Description 2 (Optional)</label>
                            <textarea id="description_2" name="description_2" class="form-control @error('description_2') is-invalid @enderror" rows="3">{{ old('description_2') }}</textarea>
                            @error('description_2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" required>
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Upload an image file (required).</small>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back to About Management
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-lg me-1"></i> Create
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection