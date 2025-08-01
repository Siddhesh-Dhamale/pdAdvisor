<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/home.css">

</head>

<body>
    <div class="main">
        {{view('frontend.layouts.header')}}

        <div class="page-wrapper">
            <section class="hero position-relative">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        @forelse($heroSlides as $slide)
                        <div class="swiper-slide position-relative">
                            <img
                                class="w-100"
                                src="{{ asset($slide->banner_image ? 'frontend/img/hero/' . $slide->banner_image : 'frontend/img/home/default-banner.png') }}"
                                alt="{{ $slide->page_name ?? 'Hero Slide Image' }}">
                            <div class="mobileOverlay"></div>
                            <div class="HeroContent text-start text-white lh-1">

                                <!-- <h1 class="m-0 p-0 text-white">{{ $slide->heading ?? '' }}</h1> -->

                                {{-- Render banner_content as HTML --}}

                                {!! $slide->banner_content !!}


                                <a class="btn btn-danger rounded-lg px-4 heroReadMore" href="{{ $slide->button_url ?? '#' }}">
                                    {{ $slide->button_text ?? 'Read More' }}
                                </a>
                            </div>
                        </div>
                        @empty
                        {{-- Fallback slide if no heroSlides present --}}
                        <div class="swiper-slide position-relative">
                            <img
                                class="w-100"
                                src="{{ asset('frontend/img/home/default-banner.png') }}"
                                alt="Default Hero Slide Image">
                            <div class="mobileOverlay"></div>
                            <div class="HeroContent text-start lh-1">
                                <p class="m-0 p-0 fs-4 pb-0 underlinedHeading">
                                    <span class="brdr-bottom-hero">Default Subheading</span>
                                </p>
                                <h1 class="m-0 p-0">Default Heading</h1>
                                <a class="btn btn-danger rounded-lg px-4 heroReadMore" href="#">
                                    Read More
                                </a>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

                <!-- ICON NAVIGATION -->
                <div class="container text-center icons-section mt-4">
                    <div class="row justify-content-center">
                        <style>
                            .colored-icon {
                                filter: brightness(0) invert(1);
                                /* default: white */
                                transition: filter 0.3s ease;
                                cursor: pointer;
                                width: 100px;
                            }

                            .icon-trigger.active .colored-icon {
                                filter: brightness(0) saturate(100%) invert(23%) sepia(98%) saturate(2066%) hue-rotate(339deg) brightness(95%) contrast(101%) !important;
                            }
                        </style>
                        @forelse($heroIcons as $icon)
                        <div class="col-3 icon-trigger" data-slide="{{ $icon['slide_index'] }}">
                            <img
                                src="{{ asset($icon['image_path']) }}"
                                alt="{{ $icon['text'] ?? 'Hero Icon' }}"
                                class="img-fluid mx-auto d-block colored-icon" />
                            <p>{{ $icon['text'] ?? 'Icon' }}</p>
                        </div>
                        @empty
                        <p>No hero icons available.</p>
                        @endforelse
                    </div>
                </div>
            </section>





            <section class="container py-5 scroll-snap-section position-relative">
                <section class="position-absolute homeScrollDownMobile end-0">
                    <div class="rotating-scroll magnetic-wrapper p-3">
                        <a href="" class="go-down-btn magnetic-btn" title="Scroll down">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="120" height="120" viewBox="0 0 100 100" aria-hidden="true">

                                <!-- Arrow Polygon -->
                                <polygon fill="#878787" points="55.334,46 49.333,58 43.333,46" />

                                <!-- Circular Path for Text -->
                                <path id="textPath" fill="none" d="M89.322,50.197c0,22.09-17.91,40-40,40c-22.089,0-40-17.91-40-40 
                                c0-22.089,17.911-40,40-40C71.412,10.197,89.322,28.108,89.322,50.197z" />

                                <!-- Rotating Text Around Path -->
                                <text class="scrollText" font-size="8" letter-spacing="2" fill="#000" textLength="350">
                                    <textPath href="#textPath" startOffset="-1%">
                                        &nbsp; • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN •
                                    </textPath>
                                </text>

                            </svg>
                        </a>
                    </div>
                </section>
                <div class="swiper industrySwiper">
                    <div class="swiper-wrapper">
                        @foreach($industrySlides as $slide)
                        <div class="swiper-slide w-100">
                            <div class="row align-items-center justify-content-evenly">
                                <div class="col-md-6 col-12">
                                    <h1 class="fw-bold">
                                        <span class="brdr-bottom">{{ $slide->heading }}</span>
                                    </h1>
                                    <p class="py-3 QASubcaption">{{ $slide->subheading }}</p>
                                    <div class="question">
                                        <p>{{ $slide->question }}</p>

                                        <div class="d-flex flex-wrap gap-2">
                                            @php
                                            // Split comma-separated services, trim spaces, remove empty entries
                                            $services = collect(explode(',', $slide->services))
                                            ->map(fn($s) => trim($s))
                                            ->filter()
                                            ->all();
                                            @endphp

                                            @foreach($services as $service)
                                            <button class="btn rounded-pill text-danger border-secondary px-4 QAbutton">
                                                {{ $service }}
                                            </button>
                                            @endforeach
                                        </div>

                                        <div class="button-effect pt-5">
                                            <a class="effect effect-3" href="/industries" title="View all...">View all...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-12 d-flex justify-content-center">
                                    <img
                                        class="w-75 expertiesImg"
                                        src="{{ asset('frontend/img/home/' . $slide->img) }}"
                                        alt="{{ Str::limit($slide->heading, 30) }}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </section>



            <!-- <section class="infiniteScroller pt-5">
                <div class="marquee-row pb-5">
                    <div class="marquee-block marquee1">
                        <ul class="marquee-item-list">
                            <li>Business Transformation</li>
                            <li>Innovation Strategy & Delivery</li>
                            <li>Business Resilience</li>
                            <li>Financial & Business Modelling</li>
                            <li>Financial Management</li>
                        </ul>
                    </div>
                </div>
            </section> -->

            <section class="py-5 scroll-snap-section HomeCounter" id="stats-section">

                <div class="row justify-content-center">
                    <!-- <div class="col-12 col-md-6"> -->

                    @if($counters->isNotEmpty() && $counters[0]->heading)
                    <h1 class="fw-bold col-12 col-md-6 text-center mx-auto brdr-bottom">
                        {!! nl2br(e($counters[0]->heading)) !!}
                    </h1>
                    @else
                    <h1 class="fw-bold">
                        Tailored business solutions that adapt to<br>
                        <span class="brdr-bottom"> your unique systems and goals.</span>
                    </h1>
                    @endif

                </div>

                <div class="stats d-flex justify-content-center gap-5 flex-wrap">
                    @foreach($counters as $counter)
                    <div class="text-center">
                        <div class="stat-item" data-target="{{ $counter->count }}">
                            0{{ $counter->symbol ?: '+' }}
                        </div>
                        <div class="stat-label fw-semibold" style="text-transform: capitalize;">
                            {{ $counter->count_title }}
                        </div>
                    </div>
                    @endforeach
                </div>

            </section>



            <section class="businessSection container pt-2 pb-5 scroll-snap-section">
                <div class="row justify-content-between align-items-start pt-5">

                    <!-- Left Sidebar Content -->
                    <div class="col-md-5 col-12 text-center text-md-start">
                        <h1 class="fw-bold">
                            @if(isset($insight))
                            <span class="brdr-bottom">{{ $insight->insight_heading }}</span> <br>
                            {!! nl2br(e($insight->subheading)) !!}
                            @else
                            <span class="brdr-bottom">Breakthrough</span> <br>Results. <br>Bold Moves.
                            @endif
                        </h1>
                        <p class="QASubcaption">
                            See how we’ve helped forward-thinking organizations unlock growth, adapt to disruption, and create lasting value.
                        </p>

                        <div class="button-effect pt-5">
                            <a class="effect effect-3" href="#" title="Read all...">Read all...</a>
                        </div>
                    </div>

                    <!-- Right Content: List of Blog Insights -->
                    <div class="col-md-6 col-12 BusinessScrollContainer">
                        @forelse($blogs as $blog)
                        <a href="{{ url('blog/' . $blog->slug) }}" class="text-decoration-none text-dark mb-4 d-block">
                            <div class="row pb-4">
                                <div class="col-md-5 col-12">
                                    <div class="d-flex align-items-center gap-4">
                                        <div>
                                            <img src="{{ asset('frontend/img/blog/' . $blog->image) }}"
                                                alt="{{ $blog->title }}"
                                                style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="name">
                                            <p class="fw-bold m-0">{{ $blog->title }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-12">
                                    <div>
                                        <span class="small badge rounded-pill text-bg-secondary px-3 py-2">Solutions by Us</span>
                                        <span class="small px-3">{{ $blog->created_at->format('F d, Y') }}</span>
                                    </div>
                                    <p class="fw-medium pt-3 companyTitle">{{ Str::limit(strip_tags($blog->body), 80) }}</p>
                                    <p class="QASubcaption small">{{ Str::limit(strip_tags($blog->body), 120) }}</p>
                                </div>
                            </div>
                        </a>
                        @empty
                        <p>No insights available at the moment.</p>
                        @endforelse
                    </div>

                </div>
            </section>

            <section
                class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5">

                <div class="circle2">
                    <div class="circle">
                        <div class="logo"><a href="/contact"><i class="fa-solid fa-plus text-dark"></i></a></div>
                        <div class="text">
                            <p class="">
                                Turning Businesses . Into Winners . </p>
                        </div>
                    </div>
                </div>
                @php
                // Assuming $cta is passed to the view and contains the Cta model instance
                // Prepare the background image URL
                $backgroundImageUrl = $cta && $cta->img
                ? asset('frontend/img/hero/' . $cta->img)
                : asset('frontend/img/hero/default-cta.jpg');
                @endphp

                <div class="cta-banner" style="background-attachment: url('{{ $backgroundImageUrl }}'); background-size: cover; background-position: center;">
                    <div class="cta-content text-center py-5">
                        @php
                        $words = explode(' ', $cta->heading ?? '');
                        $firstSix = implode(' ', array_slice($words, 0, 6));
                        $rest = implode(' ', array_slice($words, 6));
                        @endphp

                        <h2 class="fw-bold text-center mx-auto col-12 col-md-9">
                            {{-- Display the first six words with a bottom border --}}
                            <span class="brdr-bottom d-inline-block">{{ $firstSix }}</span>
                            {{ $rest }}
                        </h2>
                        <a class="btn btn-danger rounded-lg px-4" href="{{ url($cta->button_link ?? '#') }}">
                            {{ $cta->button_text ?? 'Click Here' }}
                        </a>
                    </div>
                </div>

            </section>


            <section class="scroll-snap-section container py-5">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h1 class="fw-bold"> <span class="brdr-bottom">Our Latest</span> <br>Insights</h1>
                        <p class="text-muted mt-3 QASubcaption">Expert perspectives, sharp analysis, and strategic
                            foresight for those shaping the future</p>
                        <a href="/insights" class="btn btn-danger mt-3 px-4">Read More</a>
                    </div>

                    <!-- Right Content: Swiper Carousel -->
                    <div class="col-lg-8">
                        <div class="swiper insightsSwiper">
                            <div class="swiper-wrapper">
                                <!-- Card 1 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight1.png" class="card-img-to" alt="Insight 1">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Driving Growth Through Intelligent Automation
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight2.png" class="card-img-to" alt="Insight 2">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Building the Digital Backbone: What Every Leader
                                                Must Know</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 1 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight1.png" class="card-img-to" alt="Insight 1">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Driving Growth Through Intelligent Automation
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="frontend/img/home/insight2.png" class="card-img-to" alt="Insight 2">
                                        <div class="card-body">
                                            <small class="text-muted">Category Name | Date</small>
                                            <h5 class="card-title mt-2">Building the Digital Backbone: What Every Leader
                                                Must Know</h5>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add more slides as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- dynamic blog -->
            <!-- <section class="scroll-snap-section container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h1 class="fw-bold">
                            <span class="brdr-bottom">{{ $insight->insight_heading ?? 'Our Latest' }}</span> <br>Insights
                        </h1>
                        <p class="text-muted mt-3 QASubcaption">
                            {{ $insight->subheading ?? 'Expert perspectives, sharp analysis, and strategic foresight for those shaping the future' }}
                        </p>
                        <a href="/insights" class="btn btn-danger mt-3 px-4">Read More</a>
                    </div>

                    <div class="col-lg-8">
                        <div class="swiper insightsSwiper">
                            <div class="swiper-wrapper">
                                @forelse($blogs as $blog)
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <img src="{{ asset('frontend/img/blog/' . $blog->image) }}"
                                            class="card-img-top"
                                            alt="{{ $blog->title }}">
                                        <div class="card-body">
                                            <small class="text-muted">
                                                {{-- Replace with category if available --}}
                                                Category Name | {{ $blog->created_at->format('M d, Y') }}
                                            </small>
                                            <h5 class="card-title mt-2">{{ $blog->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="swiper-slide">
                                    <p>No insights available at the moment.</p>
                                </div>
                                @endforelse
                            </div>

                            {{-- Optional swiper controls --}}
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section> -->


            <!-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->



        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}

</body>

</html>