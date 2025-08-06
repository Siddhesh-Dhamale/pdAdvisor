<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Insights Page</title>
    {{ view('frontend.layouts.css') }}
    <link rel="stylesheet" href="{{ asset('frontend/css/insights.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <style>
        .filter-container {
            max-height: 420px;
            overflow-y: auto;
            position: -webkit-sticky;
            position: sticky;
            top: 105px;
        }

        .filter-options {
            max-height: 210px;
            overflow-y: auto;
            margin-bottom: 1rem;
            border-radius: 0.4rem;
            background: #f8f9fa;
            padding-bottom: 0.6rem;
        }

        .filter-title {
            cursor: pointer;
            font-weight: bold;
            font-size: 1.06rem;
            background: #f1f3f9;
            padding: 0.7rem 1rem 0.7rem 0.3rem;
            border-radius: 0.4rem;
            margin-bottom: 0.2rem;
            user-select: none;
        }

        @media (max-width: 991.98px) {
            .filter-container {
                position: static;
                max-height: none !important;
                margin-bottom: 2rem;
            }
        }

        /* Optional: style for no blogs message to align content */
        #no-blogs-msg {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 320px;
        }
    </style>
</head>
<?php $page_name = 'insights'; ?>

<body>
    <div class="main">
        {{ view('frontend.layouts.header') }}
        <div class="page-wrapper">

            <!-- HERO SECTION -->
            @php
            $hero = $heroSections->first();
            @endphp

            <section class="hero">
                <div class="hero-container col-md-8">
                    <img src="{{ $hero && $hero->banner_image 
                        ? asset('frontend/img/hero/' . $hero->banner_image) 
                        : asset('frontend/img/insight/insights-banner.png') }}"
                        alt="{{ $hero->alt_text ?? 'Hero Image' }}"
                        class="hero-image" />

                    <div class="hero-content">
                        @if(!empty($hero->heading_1) || !empty($hero->heading_2))
                        <h1 class="fw-bold InsightsBorder">
                            <span class="brdr-bottom">{!! $hero->heading_1 ?? 'Helping Industry' !!}</span>
                        </h1>
                        <h1>{!! $hero->heading_2 ?? 'Leaders Lead the Future' !!}</h1>
                        @else
                        {{-- Fallback static content if no data available --}}
                        <h1 class="fw-bold InsightsBorder">
                            <span class="brdr-bottom">Helping Industry</span>
                        </h1>
                        <h1>Leaders Lead the Future</h1>
                        @endif

                        <a href="{{ $hero->button_url ?? '/contact' }}" class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">
                            {{ $hero->button_text ?? 'Contact' }}
                        </a>
                    </div>
                </div>
            </section>

            <!-- HEADING SECTION -->
            <section class="py-5 mx-auto mb-3 scroll-snap-section">
                <div class="rotating-scroll magnetic-wrapper position-absolute end-0">
                    <!-- your SVG scroll button ... -->
                </div>
                @php $solIndIn = $solIndIns->first(); @endphp

                <div class="container heading-section">
                    <h2 class="fw-bold text-center">
                        <span class="brdr-bottom">
                            {{ $solIndIn->heading ?? '111Stay ahead with our latest thinking.' }}
                        </span>
                    </h2>
                    <p class="mx-auto mt-5 text-center">
                        {{ $solIndIn->description ?? 'Explore our latest research, client stories, and expert perspectives to help you stay ahead in an ever-changing world. Our insights reflect the depth of our experience across industries and capabilities, offering practical guidance and innovative thinking.' }}
                    </p>
                </div>


            </section>

            <!-- FILTERING + BLOGS SECTION -->
            <section class="scroll-snap-section">
                <div class="container py-5">
                    <div class="row">
                        <!-- BLOG ARTICLES -->
                        <div class="col-md-8">
                            <div class="row g-4 justify-content-between" id="article-container">
                                @foreach($blogs as $blog)
                                <div class="col-md-6 article"
                                    data-solutions="{{ $blog->solutions->pluck('title')->implode(',') }}"
                                    data-industries="{{ $blog->industries->pluck('title')->implode(',') }}">
                                    <div class="card article-card h-100">
                                        @if($blog->image)
                                        <img src="{{ asset('frontend/img/blog/' . $blog->image) }}"
                                            class="card-img-top article-img"
                                            alt="{{ $blog->title }}">
                                        @endif
                                        <div class="card-body d-flex flex-column">
                                            <h6 class="card-title fw-bold">{{ $blog->title }}</h6>
                                            <p class="card-text flex-grow-1">{!! \Illuminate\Support\Str::words(strip_tags($blog->body), 24) !!}</p>
                                            <a href="{{ route('insights.show', $blog->slug) }}" class="read-more stretched-link">Read more &gt;&gt;&gt;</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="col-12" id="no-blogs-msg" style="display:none;">
                                    <div class="text-center w-100">
                                        <img src="{{ asset('frontend/img/no-content.png') }}" alt="" style="width:150px;opacity:0.45">
                                        <div class="mt-2 h4 text-muted">
                                            No blogs available
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FILTERS SIDEBAR -->
                        <div class="col-md-4 filter-container">
                            <!-- Explore by Solution -->
                            <div class="mb-4">
                                <div class="filter-title d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#solutionFilter" aria-expanded="true">
                                    Explore by Solution <span class="arrow">▲</span>
                                </div>
                                <div class="collapse show filter-options ps-3 pt-2" id="solutionFilter">
                                    {{-- Optional "All" checkbox. You might want to handle it separately in JS if needed --}}
                                    <label><input type="checkbox" name="solution[]" value="" checked disabled> All</label>
                                    @foreach($solutions as $solution)
                                    <label>
                                        <input type="checkbox" name="solution[]" value="{{ $solution->title }}">
                                        {{ $solution->title }}
                                    </label>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Explore by Industry -->
                            <div class="mb-4">
                                <div class="filter-title d-flex justify-content-between align-items-center collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#industryFilter" aria-expanded="false">
                                    Explore by Industry <span class="arrow">▼</span>
                                </div>
                                <div class="collapse filter-options ps-3 pt-2" id="industryFilter">
                                    <label><input type="checkbox" name="industry[]" value="" checked disabled> All</label>
                                    @foreach($industries as $industry)
                                    <label>
                                        <input type="checkbox" name="industry[]" value="{{ $industry->title }}">
                                        {{ $industry->title }}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA SECTION ... (unchanged) -->
            <section class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5 mb-0">
                <div class="circle2">
                    <div class="circle">
                        <div class="logo"><a href="/contact"><i class="fa-solid fa-plus text-dark"></i></a></div>
                        <div class="text">
                            <p class="">
                                Turning Businesses . Into Winners .
                            </p>
                        </div>
                    </div>
                </div>
                @php
                $cta = $solIndIns->first();
                $backgroundImageUrl = $cta && $cta->cta_img
                ? asset('frontend/img/SolIndIns/' . $cta->cta_img)
                : asset('frontend/img/home/CTA.webp');
                @endphp

                <div class="cta-banner"
                    style="background-image: url('{{ $backgroundImageUrl }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="cta-content row justify-content-center">
                        @if($cta)
                        @php
                        $fullText = $cta->cta_heading_1 ?? '';
                        $underlinePhrase = 'Guiding high-impact organizations to scale';

                        if (str_contains($fullText, $underlinePhrase)) {
                        $finalHeading = str_replace(
                        $underlinePhrase,
                        "<span class='brdr-bottom'>{$underlinePhrase}</span>",
                        e($fullText)
                        );
                        } else {
                        $finalHeading = e($fullText);
                        }
                        @endphp

                        <div class="col-12 col-md-7">
                            <h2 class="">{!! nl2br($finalHeading) !!}</h2>
                        </div>

                        <div class="col-12 ">
                            <a class="btn btn-danger rounded-lg px-4" href="{{ url($cta->cta_btn_link ?? '/contact') }}">
                                {{ $cta->cta_btn_text ?? 'Lets Make It Happen' }}
                            </a>
                        </div>
                        @else
                        <h2 class="fw-bold">
                            <span class="brdr-bottom">Guiding high-impact organizations to scale</span><br> with vision and purpose
                        </h2>
                        <a class="btn btn-danger rounded-lg px-4" href="/contact">Let's Make It Happen</a>
                        @endif
                    </div>
                </div>
            </section>

        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{ view('frontend.layouts.footer') }}

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            function filterArticles() {
                const selectedSolutions = Array.from(document.querySelectorAll('input[name="solution[]"]:checked'))
                    .map(el => el.value)
                    .filter(v => v !== "");

                const selectedIndustries = Array.from(document.querySelectorAll('input[name="industry[]"]:checked'))
                    .map(el => el.value)
                    .filter(v => v !== "");

                let count = 0;
                document.querySelectorAll('.article').forEach(card => {
                    const solutionList = card.dataset.solutions ? card.dataset.solutions.split(',').map(s => s.trim()) : [];
                    const industryList = card.dataset.industries ? card.dataset.industries.split(',').map(s => s.trim()) : [];

                    const matchSolution = selectedSolutions.length === 0 || selectedSolutions.some(sol => solutionList.includes(sol));
                    const matchIndustry = selectedIndustries.length === 0 || selectedIndustries.some(ind => industryList.includes(ind));

                    if (matchSolution && matchIndustry) {
                        card.style.display = '';
                        count++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                const noBlogsDiv = document.getElementById('no-blogs-msg');
                if (noBlogsDiv) {
                    noBlogsDiv.style.display = count === 0 ? 'flex' : 'none';
                }
            }

            document.querySelectorAll('input[name="solution[]"]').forEach(el => {
                el.addEventListener('change', filterArticles);
            });
            document.querySelectorAll('input[name="industry[]"]').forEach(el => {
                el.addEventListener('change', filterArticles);
            });

            filterArticles(); // Initial filter on page load

        });
    </script>
</body>

</html>