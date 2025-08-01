<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Page</title>

    {{-- Assuming your CSS files include Bootstrap and any custom styles; keep as is --}}
    {{ view('frontend.layouts.css') }}
    <link rel="stylesheet" href="{{ asset('frontend/css/contact.css') }}">
</head>

<body>
    <div class="main">

        {{ view('frontend.layouts.header') }}

        <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">

        <div class="page-wrapper">
            <!-- HERO SECTION -->
            @php
            // Get the first hero record from the collection
            $hero = $heroSections->first();

            // Prepare banner image URL with fallback
            $bannerImage = $hero && $hero->banner_image
            ? asset('frontend/img/hero/' . $hero->banner_image)
            : asset('frontend/img/contact/contact-banner.png'); // your fallback image

            // Prepare button text and url with fallback
            $buttonText = $hero->button_text ?? 'Contact';
            $buttonUrl = $hero->button_url ?? '/contact';

            // Banner content, possibly multiline stored as text with line breaks
            $bannerContent = $hero->banner_content ?? 'Big visions start with a simple conversation.';
            @endphp

            <section class="hero">
                <div class="hero-container">
                    <img src="{{ $bannerImage }}" alt="Contact Hero Banner" class="hero-image">

                    <div class="hero-content">
                        {{--
                Use {!! !!} combined with nl2br and html_entity_decode to:
                - Decode HTML entities if any
                - Preserve new lines as <br> tags for multiline banner content
            --}}
                        <h1 class="fw-bold">
                            {!! nl2br(html_entity_decode(e($bannerContent))) !!}
                        </h1>

                        <a href="{{ url($buttonUrl) }}" class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">
                            {{ $buttonText }}
                        </a>
                    </div>
                </div>
            </section>


            <!-- CONTACT INTRO SECTION -->
            <section class="py-5 w-75 mx-auto scroll-snap-section fullHeadingWidth">
                <div class="container">
                    <p class="text-uppercase text-muted small mb-2 section-subtitle">Contact Us</p>
                    <h1 class="highlight-title mx-auto fw-bold position-relative">
                        <span class="brdr-bottom">
                            Connect with us to discover how our experts can
                        </span><br>
                        help you achieve your goals
                    </h1>
                </div>
            </section>

            <!-- MAP + CONTACT DETAILS -->
            <section class="contact-map-section py-5 scroll-snap-section">
                <iframe
                    src="{{ $contactUs->map_url ?? 'https://www.google.com/maps/embed?...default-map-url...' }}"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class="contact-box">
                    <h4>Get In Touch</h4>
                    <p><strong>Email:</strong> {{ $contactUs->email_1 ?? 'info@pdadvisorsandstrategists.com' }}</p>
                    @if(!empty($contactUs->email_2))
                    <p><strong>Alternate Email:</strong> {{ $contactUs->email_2 }}</p>
                    @endif

                    <p><strong>Address:</strong> 202 Leo Building 24th Road, near Starbucks Bandra (W),<br> Mumbai-400052 Maharashtra</p>

                    <p><strong>Contact:</strong> {{ $contactUs->phone_number_1 ?? '+91 9820202059' }}</p>
                    @if(!empty($contactUs->phone_number_2))
                    <p><strong>Alternate Contact:</strong> {{ $contactUs->phone_number_2 }}</p>
                    @endif
                    @if(!empty($contactUs->whatsapp_number))
                    <p><strong>WhatsApp:</strong> {{ $contactUs->whatsapp_number }}</p>
                    @endif
                </div>
            </section>

            <!-- CONTACT FORM -->
            <section class="contact-form-section scroll-snap-section">
                <div class="container">
                    <div class="row justify-content-evenly align-items-center">
                        <!-- Left Text Column -->
                        <div class="col-md-2 contact-left">
                            @php
                            $formHeading = $contactUs->form_heading ?? 'Let’s contact for better result';
                            @endphp
                            <h2>{!! nl2br(html_entity_decode(e($formHeading))) !!}</h2>

                            <div class="divider-line"></div>
                            <div class="company-logo">Company Logo</div>
                        </div>

                        <!-- Right Form Column -->
                        <div class="col-md-7">
                            <form method="POST" action="">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required />
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2 mb-md-0">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" required />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="company" class="form-control" placeholder="Company" />
                                </div>
                                <div class="mb-3">
                                    <input type="url" name="website" class="form-control" placeholder="Website" />
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                </div>
                                <div class="submitBtnMobile">
                                    <button type="submit" class="submit-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{ view('frontend.layouts.footer') }}

</body>

</html>