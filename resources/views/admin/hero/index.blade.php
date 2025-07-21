@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Hero Sections</h2>
        <a href="{{ route('admin.hero.create') }}" class="btn btn-primary">+ Add Hero Section</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Page</th>
                <th>Banner Image</th>
                <th>Icon</th>
                <th>Icon Text</th>
                <th>Banner Content</th>
                <th>Button</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sections as $hero)
                <tr>
                    <td>{{ $hero->page_name }}</td>
                    <td>
                        @if($hero->banner_image)
                            <img src="{{ asset('frontend/img/hero/' . $hero->banner_image) }}" alt="" width="80">
                        @endif
                    </td>
                    <td>
                        @if($hero->icon)
                            <img src="{{ asset('frontend/img/hero/' . $hero->icon) }}" alt="" width="40">
                        @endif
                    </td>
                    <td>{{ $hero->icon_text }}</td>
                    <td>{!! \Illuminate\Support\Str::words(strip_tags($hero->banner_content), 10) !!}</td>
                    <td>
                        @if($hero->button_text)
                            <span class="badge bg-secondary">{{ $hero->button_text }}</span> 
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.hero.edit', $hero->id) }}" class="btn btn-sm btn-info mb-1">Edit</a>
                        <form action="{{ route('admin.hero.destroy', $hero->id) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this Hero Section?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">No Hero Sections found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
