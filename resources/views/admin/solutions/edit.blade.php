@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-4">Edit Solution</h2>
    @include('admin.solutions.form', ['solution' => $solution])
@endsection
