@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Industries</h2>
        <a href="{{ route('admin.industries.create') }}" class="btn btn-primary">+ Add Industry</a>
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
                @forelse($industries as $industry)
                    <tr>
                        <td>{{ $industry->title }}</td>
                        <td>{{ $industry->slug }}</td>
                        <td>{{ $industry->industry_cards_count }}</td>
                        <td>{{ $industry->industry_counters_count }}</td>
                        <td>{{ $industry->industry_result_cards_count }}</td>
                        <td>
                            <a href="{{ route('admin.industries.edit', $industry) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.industries.destroy', $industry) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this industry?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No industries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection