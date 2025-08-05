@extends('admin.layouts.app')

@section('content')
<div class="mb-4 d-flex justify-content-between align-items-center">
    <h2>{{ $blog->title }}</h2>
    <div>
        <a href="{{ route('admin.blog.edit', $blog) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
<p><strong>Slug:</strong> {{ $blog->slug }}</p>
<p>
    <strong>Solutions:</strong>
    @php
        $solutions = DB::table('blog_solutions')
            ->where('blog_id', $blog->id)
            ->pluck('solution_title');
    @endphp
    @forelse($solutions as $solutionTitle)
        <span class="badge bg-info text-dark">{{ $solutionTitle }}</span>
    @empty
        <span class="text-muted">No solutions</span>
    @endforelse
</p>
<p>
    <strong>Industries:</strong>
    @forelse($blog->industries as $industry)
        <span class="badge bg-secondary">{{ $industry->title }}</span>
    @empty
        <span class="text-muted">No industries</span>
    @endforelse
</p>
<div class="mt-4">
    <strong>Body:</strong>
    <div class="border p-3 mt-2" style="background:#f7f7f7">
        {!! $blog->body !!}
    </div>
</div>
@endsection
