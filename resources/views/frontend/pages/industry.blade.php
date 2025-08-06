<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $industry->title ?? 'Industry Page' }}</title>

    {{ view('frontend.layouts.css') }}

    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/industries.css') }}">

</head>
<style>
    .service-card {
        border: 1px solid #eee;
        padding: 20px;
        transition: all 0.3s ease-in-out;
        height: 100%;
        min-height: 300px;
        cursor: pointer;
    }

    .service-card:hover {
        border-top: 5px solid red !important;
    }

    .modal-content .service-card {
        border-top: 5px solid red !important;
    }


    .read-more {
        margin-top: auto;
        font-weight: 500;
        color: #333;
    }

    .servicesBtn {
        background-color: transparent !important;
        border: 1.5px solid #959595 !important;
        color: #c8102e;
        cursor: pointer;
        transition: all 0.3s ease;
        /* smooth transition */
    }

    .servicesBtn:hover {
        background-color: #c8102e !important;
        border-color: #c8102e !important;
        /* keep border, just change color */
        color: white !important;
    }

    .solutionsHero {
        padding-top: 115px;
    }

    header {
        color: rgb(0, 0, 0) !important;
        background-color: white !important;
        transition: background-color 0.3s !important;
    }

    header .nav-link,
    header .companyLogo {
        color: rgb(119, 119, 119) !important;
    }

    .truncate-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* Show only 3 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>


<body>
    <div class="main">
        {{ view('frontend.layouts.header') }}

        <div class="page-wrapper">

            <!-- HERO SECTION -->
            <section class="hero-section-main container py-5 scroll-snap-section">
                <section class="container position-absolute arrow-scroll-down">
                    <div class="rotating-scroll magnetic-wrapper float-end p-3">
                        <a href="" class="go-down-btn magnetic-btn" title="Scroll down">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 100 100">
                                <polygon fill="#878787" points="55.334,46 49.333,58 43.333,46" />
                                <path id="textPath" fill="none"
                                    d="M89.322,50.197c0,22.09-17.91,40-40,40c-22.089,0-40-17.91-40-40c0-22.089,17.911-40,40-40C71.412,10.197,89.322,28.108,89.322,50.197z" />
                                <text class="scrollText" font-size="8" letter-spacing="2" fill="#000" textLength="350">
                                    <textPath href="#textPath" startOffset="-1%">&nbsp; • SCROLL DOWN • SCROLL DOWN •
                                        SCROLL DOWN • SCROLL DOWN •</textPath>
                                </text>
                            </svg>
                        </a>
                    </div>
                </section>

                <div class="swiper industrySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row align-items-center mt-5 justify-content-evenly" style="min-height: 500px;">
                                <div class="col-md-6 col-12">
                                    <h1 class="fw-bold borderBottomZero"><span class="brdr-bottom ">{!! $industry->hero_heading !!}</span>
                                    </h1>
                                    <p class="py-3 QASubcaption">{{ $industry->hero_description }}</p>
                                    <a href="#" class="btn custom-learn-more">Learn More</a>
                                </div>
                                <div class="col-md-5 col-12 d-flex justify-content-center">
                                    @if($industry->hero_image)
                                    <img class="w-75" src="{{ asset('frontend/img/' . $industry->hero_image) }}"
                                        alt="HERO BANNER">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY TRUST SECTION -->
            <!-- @php
            $hasHeading = !empty($industry->subhero_heading);
            $hasDescriptions = collect(range(1, 4))->contains(fn($i) => !empty($industry->{'subhero_description' . $i}));
            @endphp

            @if($hasHeading || $hasDescriptions)
            <section class="why-trust-section text-white py-5 scroll-snap-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-12">
                            <h2 class="section-heading"><span
                                    class="brdr-bottom">{!! $industry->subhero_heading !!}</span></h2>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="row g-4">
                                @foreach (range(1, 4) as $i)
                                @php $desc = $industry->{'subhero_description' . $i}; @endphp
                                @if(!empty($desc))
                                <div class="col-sm-6 col-6">
                                    <div class="check-item">
                                        <div class="check-icon">✓</div>
                                        <p><strong>{{ $desc }}</strong></p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif -->

            <!-- SOLUTIONS CARDS -->
            <section class="agribusiness-solutions py-5 scroll-snap-section">
                <div class="container">
                    <h2 class="section-title text-center mb-5">
                        <span class="brdr-bottom">{{ $industry->solution_cards_heading }}</span>
                    </h2>
                    <div class="row g-4">
                        @foreach($industry->industryCards as $index => $card)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                            <div class="service-card d-flex gap-2 flex-column justify-content-between" data-bs-toggle="modal" data-bs-target="#readMoreModal{{ $index + 1 }}">
                                <div class="card-content">
                                    <span class="card-number">{{ sprintf('%02d', $index + 1) }}</span>
                                    <h5 class="service-title text-danger fw-bold pt-3">{{ $card->card_heading }}</h5>
                                    <p class="service-desc pt-3 QASubcaption truncate-text" id="desc-{{ $index }}">{{ $card->card_description }}</p>
                                    <button class="btn btn-link p-0 read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal{{ $index + 1 }}">
                                        Read More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="readMoreModal{{ $index + 1 }}" tabindex="-1" aria-labelledby="readMoreModalLabel{{ $index + 1 }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered ">
                                <div class="modal-content p-0 border-0">
                                    <div class="service-card d-flex flex-column gap-2 justify-content-between border-0">
                                        <div>
                                            <div class="card-number pt-3 QASubcaption">{{ $index + 1 }}</div>
                                            <div class="service-title text-danger fw-bold pt-3">{{ $card->card_heading }}</div>
                                            <div class="service-desc pt-3 QASubcaption">
                                                {{ $card->card_description }}
                                            </div>
                                        </div>
                                        <div class="text-end mt-3">
                                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>




            <!-- COUNTERS -->
            <section class="py-5 scroll-snap-section" id="stats-section">
                <div class="text-center">
                    <h2 class="fw-bold"><span class="brdr-bottom">{!! $industry->counter_heading !!}</span></h2>
                </div>
                <div class="stats">
                    @foreach($industry->industryCounters as $counter)
                    <div>
                        <div class="stat-item" data-target="{{ $counter->number }}">0+</div>
                        <div class="stat-label fw-semibold">{{ $counter->title }}</div>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- RELATED CATEGORIES -->
            @if($industry->related->isNotEmpty())
            <section class="energy-expertise py-5">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="section-title mx-auto">
                            <span class="brdr-bottom">Explore Our {{ $industry->title }} Expertise</span>
                        </h2>
                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('industries.index') }}" class="view-all text-align-end">View all..</a>
                    </div>

                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        @foreach($industry->related as $related)
                        <a href="{{ route('industries.show', $related->slug) }}" class="sector-btn">
                            {{ $related->title }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif


            <!-- RESULT CARDS -->
            @if($industry->industryResultCards->count())
            @php
            $cards = $industry->industryResultCards;
            $cardsToShow = [];

            if ($cards->count() >= 3) {
            $cardsToShow = $cards->take(3);
            } elseif ($cards->count() === 2) {
            $cardsToShow = collect([$cards[0], $cards[1], $cards[0]]);
            } elseif ($cards->count() === 1) {
            $cardsToShow = collect([$cards[0], $cards[0], $cards[0]]);
            }
            @endphp

            <!-- <section class="insights-section py-5">
                <div class="container">
                    <h2 class="section-title mb-5 text-align-center">
                        <span class="brdr-bottom">{{ $industry->result_cards_heading }}</span>
                    </h2>
                    <div class="row g-5">
                        @foreach($cardsToShow as $resultCard)
                        <div class="col-md-4">
                            <div class="insight-card text-left">
                                @if($resultCard->card_image)
                                <img src="{{ asset('frontend/img/' . $resultCard->card_image) }}" class="img-fluid mb-3"
                                    alt="card image">
                                @endif
                                <h5 class="insight-title text-danger">{!! $resultCard->card_heading !!}</h5>
                                <p class="insight-desc text-muted">{{ $resultCard->card_description }}</p>
                                <p class="read-more fw-bold text-black">Read more &gt;&gt;&gt;</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section> -->
            @endif
            @if($blogs->count())
            @php
            $blogsToShow = collect();

            if ($blogs->count() >= 3) {
            $blogsToShow = $blogs->take(3);
            } elseif ($blogs->count() === 2) {
            // Repeat first blog to make 3
            $blogsToShow = collect([$blogs[0], $blogs[1], $blogs[0]]);
            } elseif ($blogs->count() === 1) {
            // Repeat the single blog 3 times
            $blogsToShow = collect([$blogs[0], $blogs[0], $blogs[0]]);
            }
            @endphp

            <section class="blog-section py-5">
                <div class="container">
                    <h2 class="section-title mb-5 text-align-center">
                        <span class="brdr-bottom">Insights That Matter</span> 
                    </h2>
                
                    <div class="row g-5">
                        @foreach($blogsToShow as $blog)
                        <div class="col-md-4">
                            <div class="blog-card text-left">
                                @if($blog->image)
                                <img src="{{ asset('frontend/img/blog/' . $blog->image) }}"
                                    class="img-fluid mb-3"
                                    alt="Blog image for {{ $blog->title }}">
                                @endif
                                <h5 class="blog-title text-danger">{!! $blog->title !!}</h5>
                                <p class="blog-excerpt text-muted">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->body ?? ''), 120) }}
                                </p>
                                <a href="{{ route('insights.show', $blog->slug) }}" class="read-more fw-bold text-black">
                                    Read more &gt;&gt;&gt;
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif



            <!-- CTA -->
            @if($industry->cta_title)
            <section
                class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5 pb-0 mb-0">
                <div class="circle2">
                    <div class="circle">
                        <div class="logo"><a href="/contact"><i class="fa-solid fa-plus text-dark"></i></a></div>
                        <div class="text">
                            <p>Turning Businesses . Into Winners .</p>
                        </div>
                    </div>
                </div>
                <div class="cta-banner">
                    <div class="cta-content">
                        <h2 class="fw-bold pb-5 borderBottomZero"><span class="brdr-bottom">{{ $industry->cta_title }}</span></h2>
                        <a class="btn btn-danger rounded-lg px-4" href="#">Book a Consultation</a>
                    </div>
                </div>
            </section>
            @endif

        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{ view('frontend.layouts.footer') }}
</body>

</html>