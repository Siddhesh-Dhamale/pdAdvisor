@extends('admin.layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-primary">Manage Value Points</h1>
        <a href="{{ route('admin.about.create', ['section' => 'valuepoints']) }}" class="btn btn-success">
            <i class="bi bi-plus-lg me-1"></i> Create New Value Point
        </a>

    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if($valuepoints->isEmpty())
    <div class="alert alert-info">
        No value points found. Click "Create New Value Point" to add some.
    </div>
    @else
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <!-- <th>Values Section ID</th> -->
                            <th>Point Heading</th>
                            <th>Point Description</th>
                            <th>Position</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($valuepoints as $point)
                        <tr>
                            <td>{{ $point->id }}</td>
                            <!-- <td>{{ $point->values_section_id }}</td> -->
                            <td>{{ $point->point_heading }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($point->point_description, 80) }}</td>
                            <td>{{ $point->position ?? '-' }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.about.edit', ['section' => 'valuepoints', 'id' => $point->id]) }}" class="btn btn-sm btn-primary me-1" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('admin.about.destroy', ['section' => 'valuepoints', 'id' => $point->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this value point?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination if your controller paginates -->
    {{-- @if(method_exists($valuepoints, 'links'))
            <div class="mt-3">
                {{ $valuepoints->links() }}
</div>
@endif --}}
@endif

<a href="{{ route('admin.about.index') }}" class="btn btn-link mt-4">
    <i class="bi bi-arrow-left"></i> Back to About Management
</a>
</div>
@endsection