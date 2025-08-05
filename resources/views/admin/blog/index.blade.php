@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Blogs</h2>
    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">+ Add Blog</a>
</div>
@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

<form method="get" class="row mb-4 gx-2">
    <div class="col-md-auto">
        <select name="solution_title" class="form-select form-select-sm">
            <option value="">Filter by Solution</option>
            @foreach($solutions as $solution)
                <option value="{{ $solution->title }}" {{ request('solution_title') == $solution->title ? 'selected' : '' }}>
                    {{ $solution->title }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-auto">
        <select name="industry_title" class="form-select form-select-sm">
            <option value="">Filter by Industry</option>
            @foreach($industries as $industry)
                <option value="{{ $industry->title }}" {{ request('industry_title') == $industry->title ? 'selected' : '' }}>
                    {{ $industry->title }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-auto">
        <button type="submit" class="btn btn-outline-primary btn-sm">Filter</button>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary btn-sm">Reset</a>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Solutions</th>
                <th>Industries</th>
                <th>Created</th>
                <th style="width:180px;">Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($blogs as $blog)
            <tr>
                <td>
                    @if($blog->image)
                        <img src="{{ asset('frontend/img/blog/' . $blog->image) }}" style="height:40px;width:auto;">
                    @else
                        <span class="text-muted">No image</span>
                    @endif
                </td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->slug }}</td>
                <td>
                    @php
                        $solutionsForBlog = DB::table('blog_solutions')->where('blog_id', $blog->id)->pluck('solution_title');
                    @endphp
                    @foreach($solutionsForBlog as $solutionTitle)
                        <span class="badge bg-info text-dark">{{ $solutionTitle }}</span>
                    @endforeach
                </td>
                <td>
                    @foreach($blog->industries as $industry)
                        <span class="badge bg-secondary">{{ $industry->title }}</span>
                    @endforeach
                </td>
                <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('admin.blog.edit', $blog) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('admin.blog.show', $blog) }}" class="btn btn-sm btn-info">Show</a>
                    <form action="{{ route('admin.blog.destroy', $blog) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this blog?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7" class="text-center">No blogs found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@if($blogs->hasPages())
    <div>{{ $blogs->links() }}</div>
@endif
@endsection
