@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-pencil-square me-2"></i>Edit Value Point
                    </h5>
                </div>
                <div class="card-body">

                    @if(session('success'))
                    <div class="alert alert-success mb-3">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('admin.about.update', ['section' => 'valuepoints', 'id' => $item->id]) }}" method="POST" novalidate>
                        @csrf
                        @method('PUT')

                        <!-- <div class="mb-3">
                            <label for="values_section_id" class="form-label">Values Section ID <span class="text-danger">*</span></label>
                            <input type="number" id="values_section_id" name="values_section_id"
                                class="form-control @error('values_section_id') is-invalid @enderror"
                                value="{{ old('values_section_id', $item->values_section_id) }}" required>
                            @error('values_section_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> -->

                        <div class="mb-3">
                            <label for="point_heading" class="form-label">Point Heading <span class="text-danger">*</span></label>
                            <input type="text" id="point_heading" name="point_heading"
                                class="form-control @error('point_heading') is-invalid @enderror"
                                value="{{ old('point_heading', $item->point_heading) }}" required>
                            @error('point_heading')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="point_description" class="form-label">Point Description <span class="text-danger">*</span></label>
                            <textarea id="point_description" name="point_description"
                                class="form-control @error('point_description') is-invalid @enderror"
                                rows="4" required>{{ old('point_description', $item->point_description) }}</textarea>
                            @error('point_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="number" id="position" name="position"
                                class="form-control @error('position') is-invalid @enderror"
                                value="{{ old('position', $item->position) }}">
                            @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Position controls the order of this value point (optional).</small>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('admin.about.valuepoints.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back to Points Management
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