@extends('admin.layouts.app')

@section('content')
<h1>Edit Industry Slide</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error) 
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.home.industrySlides.update', $industrySlide->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label>Heading</label>
    <input type="text" name="heading" class="form-control" value="{{ old('heading', $industrySlide->heading) }}">
  </div>

  <div class="mb-3">
    <label>Subheading</label>
    <input type="text" name="subheading" class="form-control" value="{{ old('subheading', $industrySlide->subheading) }}">
  </div>

  <div class="mb-3">
    <label>Question</label>
    <input type="text" name="question" class="form-control" value="{{ old('question', $industrySlide->question) }}">
  </div>

  <div class="mb-3">
    <label>Services</label>

    <div id="services-wrapper">
      @php
      $servicesArray = !empty(old('services')) 
          ? explode(',', old('services')) 
          : ($industrySlide->services ? explode(',', $industrySlide->services) : ['']);
      @endphp
      
      @foreach ($servicesArray as $service)
      <div class="service-item mb-2 d-flex">
        <input type="text" name="services[]" class="form-control me-2" value="{{ trim($service) }}" placeholder="Enter a service">
        <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
      </div>
      @endforeach
    </div>

    <button type="button" id="add-service-btn" class="btn btn-info btn-sm mt-1">Add Service</button>
  </div>

  <div class="mb-3">
    <label>Image</label>
    <input type="file" name="img" class="form-control" accept="image/*">
    @if($industrySlide->img)
      <div class="mt-2">
        <img src="{{ asset('frontend/img/home/' . $industrySlide->img) }}" alt="Slide Image" style="max-width: 200px;">
      </div>
    @endif
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  <a href="{{ route('admin.home.industrySlides.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const servicesWrapper = document.getElementById('services-wrapper');
        const addBtn = document.getElementById('add-service-btn');

        addBtn.addEventListener('click', function () {
            const div = document.createElement('div');
            div.classList.add('service-item', 'mb-2', 'd-flex');
            div.innerHTML = `
                <input type="text" name="services[]" class="form-control me-2" placeholder="Enter a service" />
                <button type="button" class="btn btn-danger btn-sm remove-service">Remove</button>
            `;
            servicesWrapper.appendChild(div);
        });

        servicesWrapper.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-service')) {
                e.target.closest('.service-item').remove();
            }
        });
    });
</script>
@endpush
