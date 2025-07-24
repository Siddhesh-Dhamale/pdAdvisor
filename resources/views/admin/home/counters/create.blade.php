@extends('admin.layouts.app')

@section('content')
<h1>Add New Counter</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
          @endforeach
      </ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.home.counters.store') }}">
    @csrf

    <div class="mb-3">
        <label for="heading" class="form-label">Heading</label>
        <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading') }}" placeholder="Optional heading">
    </div>

    <div class="mb-3">
        <label for="count" class="form-label">Count <span class="text-danger">*</span></label>
        <input type="number" name="count" id="count" class="form-control" value="{{ old('count') }}" required min="0">
    </div>

    <div class="mb-3">
        <label for="count_title" class="form-label">Count Title</label>
        <input type="text" name="count_title" id="count_title" class="form-control" value="{{ old('count_title') }}" placeholder="Optional count title">
    </div>

    <div class="mb-3">
        <label for="symbol" class="form-label">Symbol</label>
        <input type="text" name="symbol" id="symbol" class="form-control" value="{{ old('symbol') }}" placeholder="Optional symbol like +, %, etc.">
    </div>

    <button type="submit" class="btn btn-success">Create Counter</button>
    <a href="{{ route('admin.home.counters.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
