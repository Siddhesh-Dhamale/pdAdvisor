@extends('admin.layouts.app')

@section('content')
<h1>Add New Industry Content</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.sol_ind_ins.store', 'industries') }}" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">
    <label>Section Title (optional)</label>
    <input type="text" name="section_title" class="form-control" value="{{ old('section_title') }}">
  </div>

  <div class="mb-3">
    <label>Heading *</label>
    <input type="text" name="heading" class="form-control" value="{{ old('heading') }}" required>
  </div>

  <div class="mb-3">
    <label>Description *</label>
    <textarea name="description" rows="5" class="form-control" required>{{ old('description') }}</textarea>
  </div>

  <div class="mb-3">
    <label>CTA Image</label>
    <input type="file" name="cta_img" class="form-control" accept="image/*">
  </div>

  <div class="mb-3">
    <label>CTA Heading 1</label>
    <input type="text" name="cta_heading_1" class="form-control" value="{{ old('cta_heading_1') }}">
  </div>

  <div class="mb-3">
    <label>CTA Heading 2</label>
    <input type="text" name="cta_heading_2" class="form-control" value="{{ old('cta_heading_2') }}">
  </div>

  <div class="mb-3">
    <label>CTA Button Text</label>
    <input type="text" name="cta_btn_text" class="form-control" value="{{ old('cta_btn_text') }}">
  </div>

  <div class="mb-3">
    <label>CTA Button Link</label>
    <input type="text" name="cta_btn_link" class="form-control" value="{{ old('cta_btn_link') }}">
  </div>

  <button class="btn btn-success" type="submit">Create</button>
  <a href="{{ route('admin.sol_ind_ins.industries') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
