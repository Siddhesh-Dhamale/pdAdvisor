@extends('admin.layouts.app')

@section('content')
<div class="container py-4">
    <h1>Contact Us CMS</h1>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    @if($contactData)
        <form action="{{ route('admin.contact-us.update', $contactData->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="page_title" class="form-label">Page Title *</label>
                <input type="text" name="page_title" id="page_title" 
                       class="form-control @error('page_title') is-invalid @enderror" 
                       value="{{ old('page_title', $contactData->page_title) }}" required>
                @error('page_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="heading" class="form-label">Heading *</label>
                <input type="text" name="heading" id="heading" 
                       class="form-control @error('heading') is-invalid @enderror" 
                       value="{{ old('heading', $contactData->heading) }}" required>
                @error('heading')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="email_1" class="form-label">Email 1 *</label>
                <input type="email" name="email_1" id="email_1"
                       class="form-control @error('email_1') is-invalid @enderror" 
                       value="{{ old('email_1', $contactData->email_1) }}" required>
                @error('email_1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="email_2" class="form-label">Email 2 (optional)</label>
                <input type="email" name="email_2" id="email_2"
                       class="form-control @error('email_2') is-invalid @enderror" 
                       value="{{ old('email_2', $contactData->email_2) }}">
                @error('email_2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="phone_number_1" class="form-label">Phone Number 1 *</label>
                <input type="text" name="phone_number_1" id="phone_number_1"
                       class="form-control @error('phone_number_1') is-invalid @enderror" 
                       value="{{ old('phone_number_1', $contactData->phone_number_1) }}" required>
                @error('phone_number_1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="phone_number_2" class="form-label">Phone Number 2 (optional)</label>
                <input type="text" name="phone_number_2" id="phone_number_2" 
                       class="form-control @error('phone_number_2') is-invalid @enderror" 
                       value="{{ old('phone_number_2', $contactData->phone_number_2) }}">
                @error('phone_number_2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="whatsapp_number" class="form-label">WhatsApp Number (optional)</label>
                <input type="text" name="whatsapp_number" id="whatsapp_number"
                       class="form-control @error('whatsapp_number') is-invalid @enderror" 
                       value="{{ old('whatsapp_number', $contactData->whatsapp_number) }}">
                @error('whatsapp_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="map_url" class="form-label">Map URL (optional)</label>
                <textarea name="map_url" id="map_url" rows="3"
                          class="form-control @error('map_url') is-invalid @enderror">{{ old('map_url', $contactData->map_url) }}</textarea>
                @error('map_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="form_heading" class="form-label">Form Heading *</label>
                <input type="text" name="form_heading" id="form_heading"
                       class="form-control @error('form_heading') is-invalid @enderror" 
                       value="{{ old('form_heading', $contactData->form_heading) }}" required>
                @error('form_heading')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="facebook_link" class="form-label">Facebook Link (optional)</label>
                <input type="text" name="facebook_link" id="facebook_link"
                       class="form-control @error('facebook_link') is-invalid @enderror" 
                       value="{{ old('facebook_link', $contactData->facebook_link) }}">
                @error('facebook_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="insta_link" class="form-label">Instagram Link (optional)</label>
                <input type="text" name="insta_link" id="insta_link"
                       class="form-control @error('insta_link') is-invalid @enderror" 
                       value="{{ old('insta_link', $contactData->insta_link) }}">
                @error('insta_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="twitter_link" class="form-label">Twitter Link (optional)</label>
                <input type="text" name="twitter_link" id="twitter_link"
                       class="form-control @error('twitter_link') is-invalid @enderror" 
                       value="{{ old('twitter_link', $contactData->twitter_link) }}">
                @error('twitter_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="linkedin_link" class="form-label">LinkedIn Link (optional)</label>
                <input type="text" name="linkedin_link" id="linkedin_link"
                       class="form-control @error('linkedin_link') is-invalid @enderror" 
                       value="{{ old('linkedin_link', $contactData->linkedin_link) }}">
                @error('linkedin_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="youtube_link" class="form-label">YouTube Link (optional)</label>
                <input type="text" name="youtube_link" id="youtube_link"
                       class="form-control @error('youtube_link') is-invalid @enderror" 
                       value="{{ old('youtube_link', $contactData->youtube_link) }}">
                @error('youtube_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Update Contact Info</button>
        </form>
    @else
        <p>No Contact Us data found. Please create one first.</p>
    @endif
</div>
@endsection
