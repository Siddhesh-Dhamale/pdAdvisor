@extends('admin.layouts.app')

@section('content')
<h1>Edit Blog Section</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.home.blogSection.update') }}">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label>Heading</label>
      <input type="text" name="heading" class="form-control" value="{{ old('heading', $blogSection->heading ?? '') }}">
    </div>

    <div class="form-group">
      <label>Subheading</label>
      <input type="text" name="subheading" class="form-control" value="{{ old('subheading', $blogSection->subheading ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
