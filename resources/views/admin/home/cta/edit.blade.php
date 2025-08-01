@extends('admin.layouts.app')

@section('content')
<h1>Edit CTA Section</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.home.cta.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label>Heading</label>
      <input type="text" name="heading" class="form-control" value="{{ old('heading', $cta->heading ?? '') }}">
    </div>

    <div class="form-group">
      <label>Button Text</label>
      <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $cta->button_text ?? '') }}">
    </div>

    <div class="form-group">
      <label>Button Link</label>
      <input type="text" name="button_link" class="form-control" value="{{ old('button_link', $cta->button_link ?? '') }}">
    </div>

    <div class="form-group">
      <label>Image</label>
      <input type="file" name="img" class="form-control">
      @if(!empty($cta->img))
        <img src="{{ asset('frontend/img/home/' . $cta->img) }}" alt="CTA Image" width="150" class="mt-2">
      @endif
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
