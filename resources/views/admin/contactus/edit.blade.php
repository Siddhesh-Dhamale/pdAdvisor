@extends('admin.layouts.app')

@section('content')
<div class="container py-4">
    <h1>Edit Contact Us Info</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.contact-us.update', $contactData->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="page_title" class="form-label">Page Title *</label>
            <input type="text" class="form-control" name="page_title" id="page_title" value="{{ old('page_title', $contactData->page_title) }}" required>
        </div>

        <div class="mb-3">
            <label for="heading" class="form-label">Heading *</label>
            <input type="text" class="form-control" name="heading" id="heading" value="{{ old('heading', $contactData->heading) }}" required>
        </div>

        <div class="mb-3">
            <label for="email_1" class="form-label">Email 1 *</label>
            <input type="email" class="form-control" name="email_1" id="email_1" value="{{ old('email_1', $contactData->email_1) }}" required>
        </div>

        <div class="mb-3">
            <label for="email_2" class="form-label">Email 2 (optional)</label>
            <input type="email" class="form-control" name="email_2" id="email_2" value="{{ old('email_2', $contactData->email_2) }}">
        </div>

        <div class="mb-3">
            <label for="phone_number_1" class="form-label">Phone Number 1 *</label>
            <input type="text" class="form-control" name="phone_number_1" id="phone_number_1" value="{{ old('phone_number_1', $contactData->phone_number_1) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone_number_2" class="form-label">Phone Number 2 (optional)</label>
            <input type="text" class="form-control" name="phone_number_2" id="phone_number_2" value="{{ old('phone_number_2', $contactData->phone_number_2) }}">
        </div>

        <div class="mb-3">
            <label for="whatsapp_number" class="form-label">WhatsApp Number (optional)</label>
            <input type="text" class="form-control" name="whatsapp_number" id="whatsapp_number" value="{{ old('whatsapp_number', $contactData->whatsapp_number) }}">
        </div>

        <div class="mb-3">
            <label for="map_url" class="form-label">Map URL (optional)</label>
            <textarea class="form-control" name="map_url" id="map_url" rows="3">{{ old('map_url', $contactData->map_url) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="form_heading" class="form-label">Form Heading *</label>
            <input type="text" class="form-control" name="form_heading" id="form_heading" value="{{ old('form_heading', $contactData->form_heading) }}" required>
        </div>

        <div class="mb-3">
            <label for="facebook_link" class="form-label">Facebook Link (optional)</label>
            <input type="text" class="form-control" name="facebook_link" id="facebook_link" value="{{ old('facebook_link', $contactData->facebook_link) }}">
        </div>

        <div class="mb-3">
            <label for="insta_link" class="form-label">Instagram Link (optional)</label>
            <input type="text" class="form-control" name="insta_link" id="insta_link" value="{{ old('insta_link', $contactData->insta_link) }}">
        </div>

        <div class="mb-3">
            <label for="twitter_link" class="form-label">Twitter Link (optional)</label>
            <input type="text" class="form-control" name="twitter_link" id="twitter_link" value="{{ old('twitter_link', $contactData->twitter_link) }}">
        </div>

        <div class="mb-3">
            <label for="linkedin_link" class="form-label">LinkedIn Link (optional)</label>
            <input type="text" class="form-control" name="linkedin_link" id="linkedin_link" value="{{ old('linkedin_link', $contactData->linkedin_link) }}">
        </div>

        <div class="mb-3">
            <label for="youtube_link" class="form-label">YouTube Link (optional)</label>
            <input type="text" class="form-control" name="youtube_link" id="youtube_link" value="{{ old('youtube_link', $contactData->youtube_link) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Contact Info</button>
        <a href="{{ route('admin.contact-us.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
