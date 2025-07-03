<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $industry->title ?? 'Industry Page' }}</title>

    {{ view('frontend.layouts.css') }}

    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
</head>

<style>
    header {
        background: #000;
    }

    .arrow-scroll-down {
        bottom: 120px;
    }

    .why-trust-section {
        background-color: #1d1d1d;
        color: #fff;
        height: 450px;
        align-items: center;
    }

    .section-heading {
        font-size: 2rem;
        font-weight: 600;
        line-height: 1.4;
    }

    .section-heading .highlight {
        display: inline-block;
        position: relative;
    }

    .section-heading .highlight::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 5px;
        width: 100%;
        height: 5px;
        background-color: #ff1f1f;
        z-index: -1;
    }

    .check-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        flex-direction: column;
    }

    .check-item p {
        width: 100%;
        max-width: 60%
    }

    .check-icon {
        font-size: 1.5rem;
        color: #fff;
        line-height: 1;
    }

    .agribusiness-solutions {
        background-color: #fff;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 600;
        text-align: center;
    }

    .section-title .highlight::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        height: 5px;
        width: 100%;
        background-color: #d0021b;
        z-index: -1;
    }

    .solution-card {
        border: 1px solid #eee;
        background-color: #fff;
        transition: box-shadow 0.3s;
        position: relative;
        height: 300px;
    }

    .solution-card::before {
        content: '';
        height: 5px;
        width: 100%;
        background-color: #d0021b;
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s;
    }

    .solution-card:hover::before {
        transform: scaleX(1);
    }

    .card-content {
        padding: 20px;
    }

    .card-number {
        font-size: 1rem;
        color: #000;
        display: inline-block;
        margin-bottom: 10px;
    }

    .card-title {
        font-weight: bold;
        color: #d0021b;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 0.9rem;
        color: #888;
        min-height: 90px;
    }

    .read-more {
        color: #000;
        font-weight: 500;
        text-decoration: none;
    }

    .sector-btn {
        padding: 10px 24px;
        border-radius: 20px;
        border: 1px solid #d0021b;
        background-color: transparent;
        color: #d0021b;
        font-weight: 500;
        transition: all 0.3s;
    }

    .sector-btn:hover,
    .sector-btn.active {
        background-color: #d0021b;
        color: #fff;
    }

    .custom-learn-more {
        background-color: #d0021b;
        color: white;
        border-radius: 25px;
        padding: 10px 30px;
        font-size: 1rem;
        font-weight: 500;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .custom-learn-more:hover {
        background-color: #b00118;
        color: white;
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
                                <div class="col-6">
                                    <h1 class="fw-bold"><span class="brdr-bottom">{!! $industry->hero_heading !!}</span>
                                    </h1>
                                    <p class="py-3 QASubcaption">{{ $industry->hero_description }}</p>
                                    <a href="#" class="btn custom-learn-more">Learn More</a>
                                </div>
                                <div class="col-5 d-flex justify-content-center">
                                    @if($industry->hero_image)
                                        <img class="w-75" src="{{ asset('storage/' . $industry->hero_image) }}"
                                            alt="HERO BANNER">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- WHY TRUST SECTION -->
            @php
                $hasHeading = !empty($industry->subhero_heading);
                $hasDescriptions = collect(range(1, 4))->contains(fn($i) => !empty($industry->{'subhero_description' . $i}));
            @endphp

            @if($hasHeading || $hasDescriptions)
                <section class="why-trust-section text-white py-5 scroll-snap-section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h2 class="section-heading"><span
                                        class="brdr-bottom">{!! $industry->subhero_heading !!}</span></h2>
                            </div>
                            <div class="col-md-6">
                                <div class="row g-4">
                                    @foreach (range(1, 4) as $i)
                                        @php $desc = $industry->{'subhero_description' . $i}; @endphp
                                        @if(!empty($desc))
                                            <div class="col-sm-6">
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
            @endif

            <!-- SOLUTIONS CARDS -->
            <section class="agribusiness-solutions py-5 scroll-snap-section">
                <div class="container">
                    <h2 class="section-title text-center mb-5">
                        <span class="brdr-bottom">{{ $industry->solution_cards_heading }}</span>
                    </h2>
                    <div class="row g-4">
                        @foreach($industry->industryCards as $index => $card)
                            <div class="col-md-3">
                                @php
                                    $matchedChild = $industry->children->firstWhere('title', $card->card_heading);
                                @endphp

                                @if($matchedChild)
                                    <a href="{{ route('industries.show', $matchedChild->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="solution-card">
                                            <div class="card-content">
                                                <span class="card-number">{{ sprintf('%02d', $index + 1) }}</span>
                                                <h5 class="card-title">{{ $card->card_heading }}</h5>
                                                <p class="card-text">{{ $card->card_description }}</p>
                                                <span class="read-more">Read More</span>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <div class="solution-card">
                                        <div class="card-content">
                                            <span class="card-number">{{ sprintf('%02d', $index + 1) }}</span>
                                            <h5 class="card-title">{{ $card->card_heading }}</h5>
                                            <p class="card-text">{{ $card->card_description }}</p>
                                            <span class="read-more">Read More</span>
                                        </div>
                                    </div>
                                @endif
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

                <section class="insights-section py-5">
                    <div class="container">
                        <h2 class="section-title mb-5 text-align-center">
                            <span class="brdr-bottom">{{ $industry->result_cards_heading }}</span>
                        </h2>
                        <div class="row g-5">
                            @foreach($cardsToShow as $resultCard)
                                <div class="col-md-4">
                                    <div class="insight-card text-left">
                                        @if($resultCard->card_image)
                                            <img src="{{ asset('storage/' . $resultCard->card_image) }}" class="img-fluid mb-3"
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
                </section>
            @endif


            <!-- CTA -->
            @if($industry->cta_title)
                <section
                    class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5 pb-0 mb-0">
                    <div class="circle2">
                        <div class="circle">
                            <div class="logo"><i class="fa-solid fa-plus text-dark"></i></div>
                            <div class="text">
                                <p>Turning Businesses . Into Winners .</p>
                            </div>
                        </div>
                    </div>
                    <div class="cta-banner">
                        <div class="cta-content">
                            <h2 class="fw-bold pb-5"><span class="brdr-bottom">{{ $industry->cta_title }}</span></h2>
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