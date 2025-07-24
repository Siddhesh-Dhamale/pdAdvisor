@extends('admin.layouts.app')

@section('content')
<h1>Add New Solution Content</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.sol_ind_ins.store', 'solutions') }}" enctype="multipart/form-data">
  @csrf

  {{-- form fields same as before --}}
  <!-- Section Title -->
  <div class="mb-3">
    <label>Section Title (optional)</label>
    <input type="text" name="section_title" class="form-control" value="{{ old('section_title') }}">
  </div>

  <!-- Heading -->
  <div class="mb-3">
    <label>Heading *</label>
    <input type="text" name="heading" class="form-control" value="{{ old('heading') }}" required>
  </div>

  <!-- Description -->
  <div class="mb-3">
    <label>Description *</label>
    <textarea name="description" rows="5" class="form-control" required>{{ old('description') }}</textarea>
  </div>

  <!-- CTA Image -->
  <div class="mb-3">
    <label>CTA Image</label>
    <input type="file" name="cta_img" class="form-control" accept="image/*">
  </div>

  <!-- CTA Heading 1 -->
  <div class="mb-3">
    <label>CTA Heading 1</label>
    <input type="text" name="cta_heading_1" class="form-control" value="{{ old('cta_heading_1') }}">
  </div>

  <!-- CTA Heading 2 -->
  <div class="mb-3">
    <label>CTA Heading 2</label>
    <input type="text" name="cta_heading_2" class="form-control" value="{{ old('cta_heading_2') }}">
  </div>

  <!-- CTA Button Text -->
  <div class="mb-3">
    <label>CTA Button Text</label>
    <input type="text" name="cta_btn_text" class="form-control" value="{{ old('cta_btn_text') }}">
  </div>

  <!-- CTA Button Link -->
  <div class="mb-3">
    <label>CTA Button Link</label>
    <input type="text" name="cta_btn_link" class="form-control" value="{{ old('cta_btn_link') }}">
  </div>

  <button class="btn btn-success" type="submit">Create</button>
  <a href="{{ route('admin.sol_ind_ins.solutions') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
