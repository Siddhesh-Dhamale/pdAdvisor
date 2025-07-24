@extends('admin.layouts.app')

@section('content')
<h1>Edit Solution Content</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.sol_ind_ins.update', $item->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  {{-- Same fields as create filled with $item data --}}

  <div class="mb-3">
    <label>Section Title (optional)</label>
    <input type="text" name="section_title" class="form-control" value="{{ old('section_title', $item->section_title) }}">
  </div>

  <div class="mb-3">
    <label>Heading *</label>
    <input type="text" name="heading" class="form-control" value="{{ old('heading', $item->heading) }}" required>
  </div>

  <div class="mb-3">
    <label>Description *</label>
    <textarea name="description" rows="5" class="form-control" required>{{ old('description', $item->description) }}</textarea>
  </div>

  <div class="mb-3">
    <label>CTA Image</label>
    <input type="file" name="cta_img" class="form-control" accept="image/*">
    @if($item->cta_img)
      <div class="mt-2">
        <img src="{{ asset('frontend/img/home/' . $item->cta_img) }}" style="max-width: 200px; max-height: 120px; object-fit: contain;" alt="CTA Image">
      </div>
    @endif
  </div>

  <div class="mb-3">
    <label>CTA Heading 1</label>
    <input type="text" name="cta_heading_1" class="form-control" value="{{ old('cta_heading_1', $item->cta_heading_1) }}">
  </div>

  <div class="mb-3">
    <label>CTA Heading 2</label>
    <input type="text" name="cta_heading_2" class="form-control" value="{{ old('cta_heading_2', $item->cta_heading_2) }}">
  </div>

  <div class="mb-3">
    <label>CTA Button Text</label>
    <input type="text" name="cta_btn_text" class="form-control" value="{{ old('cta_btn_text', $item->cta_btn_text) }}">
  </div>

  <div class="mb-3">
    <label>CTA Button Link</label>
    <input type="text" name="cta_btn_link" class="form-control" value="{{ old('cta_btn_link', $item->cta_btn_link) }}">
  </div>

  <button class="btn btn-primary" type="submit">Update</button>
  <a href="{{ route('admin.sol_ind_ins.solutions') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
