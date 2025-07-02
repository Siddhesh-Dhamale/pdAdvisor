@extends('admin.layouts.app')

@section('content')
    <h2 class="mb-4">Edit Industry</h2>
    @include('admin.industries.form', ['industry' => $industry])
@endsection