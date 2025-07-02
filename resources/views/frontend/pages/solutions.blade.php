<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF‑8">
    <meta name="viewport" content="width=device‑width, initial‑scale=1.0">
    <title>{{ $solution->title }}</title>

    {{-- Global CSS --}}
    @include('frontend.layouts.css')
    {{-- Specific CSS --}}
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/services.css') }}" rel="stylesheet">
</head>
<style>
    .service-card {
        border: 1px solid #eee;
        padding: 20px;
        transition: all 0.3s ease-in-out;
        height: 100%;
        min-height: 380px;
    }

    .service-card:hover {
        border-top: 5px solid red;
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
</style>
@php
function wrapFirstThreeWords($text) {
$words = explode(' ', $text);
if(count($words) <= 3) {
    return '<span class="brdr-bottom">' . e($text) . '</span>' ;
    }
    $firstThree=implode(' ', array_slice($words, 0, 3));
    $rest = implode(' ', array_slice($words, 3));
    return ' <span class="brdr-bottom">' . e($firstThree) . '</span> ' . e($rest);
    }
    @endphp


    <body>
        @include('frontend.layouts.header')
        <div class="main">

            {{-- Hero Section --}}
            <section class="pb-5 solutionsHero">
                <div class="row justify-content-evenly position-relative">
                    <div class="col-12 col-md-5 text-start">
                        <h1 class="fw-bold">{!! wrapFirstThreeWords($solution->hero_heading) !!}</h1>
                        <p class="QASubcaption">{{ $solution->hero_description }}</p>
                        <a href="/contact" class=" position-relative btn btn-danger rounded px-5 my-5" style="z-index: 99;">Contact Us</a>
                    </div>
                    <div class="col-md-4">
                        @if($solution->hero_image)
                        <img src="{{ asset('frontend/img/solutions/' . $solution->hero_image) }}" class="w-100" alt="{{ $solution->title }}">
                        @endif
                        <!-- <img class="w-100" src="{{ asset('frontend/img/about/Group 72.png') }}" alt="Group Image"> -->

                    </div>
                    {{-- Scroll Down --}}
                    <section class="container position-absolute d-flex justify-content-end pb-2 bottom-0">
                        <div class="rotating-scroll magnetic-wrapper">
                            <a href="#" class="go-down-btn magnetic-btn" title="Scroll down">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 100 100" aria-hidden="true">
                                    <polygon fill="#878787" points="55.334,46 49.333,58 43.333,46" />
                                    <path id="textPath" fill="none" d="M89.322,50.197c0,22.09-17.91,40-40,40c-22.089,0-40-17.91-40-40 
                                    c0-22.089,17.911-40,40-40C71.412,10.197,89.322,28.108,89.322,50.197z" />
                                    <text class="scrollText" font-size="8" letter-spacing="2" fill="#000" textLength="350">
                                        <textPath href="#textPath" startOffset="-1%">
                                            &nbsp; • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN •
                                        </textPath>
                                    </text>
                                </svg>
                            </a>
                        </div>
                    </section>
                </div>
            </section>


            {{-- Subhero --}}
            <section class="scroll-snap-sectio">
                <div class="container py-5">
                    <div class="row justify-content-evenly position-relative">
                        <div class="col-12 col-md-5 text-start">
                            <h1 class="fw-bold">{!! wrapFirstThreeWords($solution->subhero_heading) !!}</h1>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="QASubcaption">{{ $solution->subhero_description }}</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Solution Cards --}}
            <section class="py-5 container scroll-snap-section">
                <h1 class="text-center fw-bold pb-5">{!! wrapFirstThreeWords($solution->solution_cards_heading) !!}</h1>
                <div class="row justify-content-center g-4">
                    @foreach($solution->solutionCards as $card)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
                        <div class="service-card d-flex gap-2 flex-column justify-content-between">
                            <div>
                                <div class="card-number pt-3 QASubcaption">{{ $loop->iteration }}</div>
                                <div class="service-title text-danger fw-bold pt-3">{{ $card->card_heading }}</div>
                                <div class="service-desc pt-3 QASubcaption">{{ $card->card_description }}</div>
                            </div>
                            <div class="read-more mt-3 fw-semibold">Read More</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            {{-- Counters --}}
            <section class="py-5 container scroll-snap-section" id="stats-section">
                <div class="text-center">
                    <h1 class="fw-bold pt-3">{!! wrapFirstThreeWords($solution->counter_heading) !!}</h1>
                    <div class="row justify-content-evenly align-items-center pt-4">
                        @foreach($solution->solutionCounters as $counter)
                        <div class="col-12 col-md-3 text-center">
                            <div class="stat-item" data-target="{{ $counter->number }}">0+</div>
                            <div class="stat-label fw-semibold">{{ $counter->title }}</div>
                        </div>
                        @endforeach
                    </div>
            </section>

            {{-- Result Cards --}}
            <section class="py-5 container scroll-snap-section">
                <h1 class="fw-bold text-center pb-5">{!! wrapFirstThreeWords($solution->result_cards_heading) !!}</h1>
                <div class="row">
                    @foreach($solution->solutionResultCards as $result)
                    <div class="col-4">

                        @if($result->card_image)
                        <img src="{{ asset('frontend/img/solutions/result_cards/'.$result->card_image) }}" class="w-100" alt="{{ $result->card_heading }}">

                        @endif
                        <!-- <img class="w-100" src="{{ asset('frontend\img\services\Placement area.png') }}" alt="err"> -->
                        <h4 class="pt-4 text-danger fw-semibold">{{ $result->card_heading }}</h4>
                        <p class="QASubcaption">{{ $result->card_description }}</p>
                        <a href="#" class="fw-bold text-dark">Read More →</a>
                    </div>
                    @endforeach
                </div>
            </section>
            <section class="py-5 container scroll-snap-section">
                <h1 class="fw-bold text-center pb-5"><span class="brdr-bottom">Our Services</span></h1>
                <div class="d-flex flex-wrap gap-3 px-5 justify-content-center">
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Retail</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Private Equity</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Technology</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Oil & Gas</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Healthcare & Life Sciences</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Oil & Gas</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Healthcare & Life Sciences</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Chemicals</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Consumer Products</h6>
                    </button>
                    <button class="py-3 px-5 servicesBtn rounded-4 text-center">
                        <h6 class="fw-bold  m-0">Mining</h6>
                    </button>
                </div>

            </section>


            {{-- CTA Banner --}}
            <section class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5">
                <div class="circle2">
                    <div class="circle">
                        <div class="logo"><i class="fa-solid fa-plus text-dark"></i></div>
                        <div class="text">
                            <p class="">
                                Turning Businesses . Into Winners . </p>
                        </div>
                    </div>
                </div>


                <div class="cta-banner">
                    <div class="cta-content">
                        <h2 class="fw-bold"><span class="brdr-bottom">{{ $solution->cta_title }}</span></h2>
                        <!-- @if($solution->cta_image)
                        <img src="{{ asset('frontend/img/solutions/'.$solution->cta_image) }}" class="img-fluid mb-3">
                        @endif -->
                        @if($solution->cta_button_text)
                         <a href="/contact" class="btn btn-danger rounded px-4 my-4">{{ $solution->cta_button_text }}</a>
                        @endif
                        <!-- <a href="/contact" class="btn btn-danger rounded px-4">Let’s Make It Happen</a> -->
                    </div>
                </div>
            </section>

            @include('frontend.layouts.scripts')
            @include('frontend.layouts.footer')

        </div>
    </body>

</html>