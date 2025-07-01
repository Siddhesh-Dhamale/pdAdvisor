@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Solutions</h2>
    <a href="{{ route('admin.solutions.create') }}" class="btn btn-primary">+ Add Solution</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Cards</th>
                <th>Counters</th>
                <th>Results</th>
                <th style="width: 160px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($solutions as $solution)
            <tr>
                <td>{{ $solution->title }}</td>
                <td>{{ $solution->slug }}</td>
                <td>{{ $solution->solution_cards_count }}</td>
                <td>{{ $solution->solution_counters_count }}</td>
                <td>{{ $solution->solution_result_cards_count }}</td>
                <td>
                    <a href="{{ route('admin.solutions.edit', $solution) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.solutions.destroy', $solution) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this solution?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No solutions found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
