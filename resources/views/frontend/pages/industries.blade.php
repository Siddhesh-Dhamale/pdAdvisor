<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industries Page</title>
    {{ view('frontend.layouts.css') }}
    <link rel="stylesheet" href="frontend/css/industries.css">
    <link rel="stylesheet" href="frontend/css/home.css">
</head>

<?php $page_name = 'industries'; ?>

<body>
    <div class="main">
        {{ view('frontend.layouts.header') }}

        <div class="page-wrapper">

            <!-- HERO SECTION -->
            <section class="hero scroll-snap-section">
                <div class="hero-container position-relative">
                    @php
                    // There is only one record for page_name = Industries in your collection
                    $hero = $heroSections->first();
                    @endphp

                    <img
                        src="{{ $hero && $hero->banner_image ? asset('frontend/img/hero/' . $hero->banner_image) : asset('frontend/img/industries/industries-banner.png') }}"
                        alt="{{ $hero->page_name ?? 'Industries Hero Image' }}"
                        class="hero-image w-100">

                    <div class="hero-content">
                        <h1 class="fw-bold">
                            @if(!empty($hero->banner_content))
                            {{-- Render with preserved line breaks and an underline for the first line if needed --}}

                            <h1>{!! html_entity_decode($hero->banner_content) !!}</h1>

                            @else
                            <span class="brdr-bottom">Helping Industry</span>
                            <br>
                            Leaders Lead the Future
                            @endif
                        </h1>
                        <a
                            href="{{ $hero->button_url ?? '/contact' }}"
                            class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">
                            {{ $hero->button_text ?? 'Contact' }}
                        </a>
                    </div>
                </div>
            </section>



            <!-- HEADING SECTION -->
            <section class="scroll-snap-section introduction-section py-5">
                <div class="container ">
                    @if($solIndIns->count())
                    @foreach($solIndIns as $sectionData)

                    <div class="row">
                        <div class="col-md-2">
                            <p class="text-uppercase medium text-muted mb-2">
                                {{ $sectionData->section_title ?? '' }}
                            </p>
                        </div>
                        <div class="col-md-5">
                            @php
                            // Split the heading into words
                            $words = isset($sectionData->heading) ? explode(' ', $sectionData->heading) : [];

                            // Get first 2 words for underline span
                            $firstTwoWords = implode(' ', array_slice($words, 0, 2));

                            // Get next 2 words (words 3 and 4)
                            $nextTwoWords = implode(' ', array_slice($words, 2, 2));
                            @endphp

                            <h2 class="display-5 fw-bold">
                                <span class="brdr-bottom">
                                    {{ $firstTwoWords }}
                                </span> <br>
                                @if($nextTwoWords)
                                {{ ' ' . $nextTwoWords }}
                                @endif
                            </h2>

                        </div>
                        <div class="col-md-5">
                            <p class="text-muted">
                                {{ $sectionData->description ?? '' }}
                            </p>
                        </div>
                    </div>

                    @endforeach
                    @else
                    <p>No industry content available at the moment.</p>
                    @endif

                </div>

                <section class="container ServiceScrollButton position-absolute d-flex justify-content-end pb-2 ">
                    <div class="rotating-scroll magnetic-wrapper">
                        <a href="" class="go-down-btn magnetic-btn" title="Scroll down">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 100 100">
                                <polygon fill="#878787" points="55.334,46 49.333,58 43.333,46" />
                                <path id="textPath" fill="none"
                                    d="M89.322,50.197c0,22.09-17.91,40-40,40c-22.089,0-40-17.91-40-40 c0-22.089,17.911-40,40-40C71.412,10.197,89.322,28.108,89.322,50.197z" />
                                <text class="scrollText" font-size="8" letter-spacing="2" fill="#000" textLength="350">
                                    <textPath href="#textPath" startOffset="-1%">
                                        &nbsp; • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN •
                                    </textPath>
                                </text>
                            </svg>
                        </a>
                    </div>
                </section>
            </section>

            <!-- EXPERTISE SECTION -->
            <section class="scroll-snap-section our-expertise py-5 ">
                <div class="container">
                    <h2 class="text-center ">
                        <span class="brdr-bottom">Our Expertise</span>
                    </h2>
                    <div class="row g-5 m-0 ">
                        @forelse($industries as $i => $industry)
                        <div class="col-6 col-md-4 col-lg-3 ">
                            @if($industry->hero_heading)
                            <!-- Card with link if hero_heading is not null -->
                            <a href="{{ route('industries.show', $industry->slug) }}"
                                class="text-decoration-none text-dark">
                                @else
                                <!-- Non-clickable card if hero_heading is null -->
                                <div class="text-dark">
                                    @endif
                                    <img src="{{ asset('frontend/img/industries/' . ($i + 1) . '.png') }}"
                                        alt="{{ $industry->title }}" class="mb-3" />
                                    <h6 class="fw-bold text-danger">{{ $industry->title }}</h6>
                                    <p class="small">
                                        {{ $industry->short_description ?? 'Explore opportunities and solutions.' }}
                                    </p>
                                    @if($industry->hero_heading)
                            </a> <!-- Close the anchor tag if hero_heading is not null -->
                            @else
                        </div> <!-- Close the div if no link -->
                        @endif
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <em>No industries found.</em>
                    </div>
                    @endforelse
                </div>
            </section>



            <!-- CTA SECTION (unchanged) -->
            <!-- CTA SECTION -->
            <section
                class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5 mb-0">

                <div class="circle2">
                    <div class="circle">
                        <div class="logo"><a href="/contact"><i class="fa-solid fa-plus text-dark"></i></a></div>
                        <div class="text">
                            <p class="">
                                Turning Businesses . Into Winners . </p>
                        </div>
                    </div>
                </div>
                @foreach($solIndIns as $cta)
                @php $backgroundImageUrl = asset('frontend/img/SolIndIns/' . $cta->cta_img)
                @endphp

                <section class="cta-banner" style="background-image: url('{{ $backgroundImageUrl }}');">
                    <div class="cta-content bg-danger bg-opacity-60 text-white rounded-4 px-4 px-md-5 pt-5 pb-5">
                        <div class="container">
                            <div class="row align-items-center text-center text-md-start">
                                <!-- Left Section: CTA Headings and Industry Dropdown -->
                                <div class="col-md-5 mb-4 mb-md-0">
                                    <h5 class="fw-semibold mb-3">{{ $cta->cta_heading_1 ?? 'Want to talk with our experts ?' }}</h5>
                                    <select class="form-select" aria-label="Select an Industry">
                                        <option selected disabled>Select an Industry</option>
                                        @foreach($industries as $industry)
                                        <option value="{{ $industry->slug }}">
                                            {{ $industry->title ?? $industry->name ?? $industry->slug }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Divider -->
                                <div class="col-md-2 d-none d-md-flex justify-content-center">
                                    <div class="vr bg-white" style="width:2px; height:100%; opacity:0.5;"></div>
                                </div>

                                <!-- Right Section: CTA text and button -->
                                <div class="col-md-5 text-center text-md-start">
                                    <h5 class="fw-semibold mb-3">{{ $cta->cta_heading_2 ?? 'We tailor solutions for every challenge.' }}</h5>
                                    <a href="{{ url($cta->cta_btn_link ?? '/contact') }}" class="btn btn-light rounded-pill px-4 fw-semibold">
                                        {{ $cta->cta_btn_text ?? 'Let’s talk →' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endforeach

            </section>



        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{ view('frontend.layouts.footer') }}
</body>

</html>