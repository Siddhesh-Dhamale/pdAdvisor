@extends('admin.layouts.app')

@section('content')
<h1>Industries Other Content</h1>

<a href="{{ route('admin.sol_ind_ins.create', 'industries') }}" class="btn btn-primary mb-3">Add New Industry Content</a>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($items->isEmpty())
  <p>No records found.</p>
@else
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Section Title</th>
        <th>Heading</th>
        <th>Description</th>
        <th>CTA Image</th>
        <th>CTA Heading 1</th>
        <th>CTA Heading 2</th>
        <th>CTA Button Text</th>
        <th>CTA Button Link</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        <td>{{ $item->section_title ?? '-' }}</td>
        <td>{{ $item->heading }}</td>
        <td>{{ Str::limit($item->description, 50) }}</td>
        <td>
          @if($item->cta_img)
            <img src="{{ asset('frontend/img/SolIndIns/' . $item->cta_img) }}" style="max-width: 100px; object-fit: contain;" alt="CTA Image">
          @else
            -
          @endif
        </td>
        <td>{{ $item->cta_heading_1 ?? '-' }}</td>
        <td>{{ $item->cta_heading_2 ?? '-' }}</td>
        <td>{{ $item->cta_btn_text ?? '-' }}</td>
        <td>{{ $item->cta_btn_link ?? '-' }}</td>
        <td>
          <a href="{{ route('admin.sol_ind_ins.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

          <form action="{{ route('admin.sol_ind_ins.destroy', $item->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete?');">
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
