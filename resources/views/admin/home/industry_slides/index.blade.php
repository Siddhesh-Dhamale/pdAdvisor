@extends('admin.layouts.app')

@section('content')
<h1>Industry Slides</h1>
<a href="{{ route('admin.home.industrySlides.create') }}" class="btn btn-primary mb-3">Add New Slide</a>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Heading</th>
            <th>Subheading</th>
            <th>Question</th>
            <th>Services</th>
            <th>Image</th> <!-- New column -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($slides as $slide)
        <tr>
            <td>{{ $slide->heading }}</td>
            <td>{{ $slide->subheading }}</td>
            <td>{{ $slide->question }}</td>
            <td>
                @if($slide->services)
                    @php
                        $services = explode(',', $slide->services);
                    @endphp
                    <ul class="mb-0 ps-3">
                        @foreach($services as $service)
                        <li>{{ trim($service) }}</li>
                        @endforeach
                    </ul>
                @else
                    -
                @endif
            </td>
            <td>
                @if($slide->img)
                    <img src="{{ asset('frontend/img/home/' . $slide->img) }}" alt="Slide Image" style="max-width: 100px; max-height: 80px; object-fit: contain;">
                @else
                    No Image
                @endif
            </td>
            <td>
                <a href="{{ route('admin.home.industrySlides.edit', $slide->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('admin.home.industrySlides.destroy', $slide->id) }}" method="POST" style="display:inline-block;"
                    onsubmit="return confirm('Delete this slide?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
