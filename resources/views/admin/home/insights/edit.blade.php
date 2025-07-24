@extends('admin.layouts.app')

@section('content')
<h1>Edit Insights Section</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.home.insights.update') }}">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label>Insight Heading</label>
      <input type="text" name="insight_heading" class="form-control" value="{{ old('insight_heading', $insights->insight_heading ?? '') }}">
    </div>

    <div class="form-group">
      <label>Subheading</label>
      <input type="text" name="subheading" class="form-control" value="{{ old('subheading', $insights->subheading ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
