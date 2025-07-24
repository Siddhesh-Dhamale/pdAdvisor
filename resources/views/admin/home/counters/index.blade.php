@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Counters</h1>
    <a href="{{ route('admin.home.counters.create') }}" class="btn btn-primary">Add New Counter</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($counters->isEmpty())
    <p>No counters found.</p>
@else
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Heading</th>
            <th>Count</th>
            <th>Count Title</th>
            <th>Symbol</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($counters as $counter)
        <tr>
            <td>{{ $counter->heading }}</td>
            <td>{{ $counter->count }}</td>
            <td>{{ $counter->count_title }}</td>
            <td>{{ $counter->symbol }}</td>
            <td>
                <a href="{{ route('admin.home.counters.edit', $counter->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('admin.home.counters.destroy', $counter->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure to delete this counter?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
