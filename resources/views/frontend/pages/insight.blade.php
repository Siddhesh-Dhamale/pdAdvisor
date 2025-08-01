<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            padding-bottom: .6rem;
        }

        .filter-title {
            cursor: pointer;
            font-weight: bold;
            font-size: 1.06rem;
            background: #f1f3f9;
            padding: .7rem 1rem .7rem .3rem;
            border-radius: 0.4rem;
            margin-bottom: .2rem;
            user-select: none;
        }

        @media (max-width: 991.98px) {
            .filter-container {
                position: static;
                max-height: none !important;
                margin-bottom: 2rem;
            }
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
            // Grab the first hero record for the insights page if available
            $hero = $heroSections->first();
            @endphp

            <section class="hero">
                <div class="hero-container col-md-8">
                    <img
                        src="{{ $hero && $hero->banner_image 
                ? asset('frontend/img/hero/' . $hero->banner_image) 
                : asset('frontend/img/insight/insights-banner.png') }}"
                        alt="{{ $hero->alt_text ?? 'Hero Image' }}"
                        class="hero-image">

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
                <div class="container heading-section">
                    <h2 class="fw-bold text-center">
                        <span class="brdr-bottom">Stay ahead with our latest thinking.</span>
                    </h2>
                    <p class="mx-auto mt-5 text-center">
                        Explore our latest research, client stories, and expert perspectives to help
                        you stay ahead in an ever-changing world. Our insights reflect the depth of our experience across industries and
                        capabilities, offering practical guidance and innovative thinking.
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
                                    data-topics="{{ $blog->topics->pluck('name')->implode(',') }}"
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
                                            <a href="{{ route('frontend.blog.show', $blog->slug) }}" class="read-more stretched-link">Read more &gt;&gt;&gt;</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="col-12" id="no-blogs-msg" style="display:none;min-height:320px;align-items:center;justify-content:center;">
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
                            <!-- Explore by Topic -->
                            <div class="mb-4">
                                <div class="filter-title d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#topicFilter" aria-expanded="true">
                                    Explore by Topic <span class="arrow">▲</span>
                                </div>
                                <div class="collapse show filter-options ps-3 pt-2" id="topicFilter">
                                    <label><input type="radio" name="topic" value="" checked> All</label>
                                    @foreach($topics as $topic)
                                    <label>
                                        <input type="radio" name="topic" value="{{ $topic->name }}">
                                        {{ $topic->name }}
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
                                    <label><input type="radio" name="industry" value="" checked> All</label>
                                    @foreach($industries as $industry)
                                    <label>
                                        <input type="radio" name="industry" value="{{ $industry->title }}">
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
                                Turning Businesses . Into Winners . </p>
                        </div>
                    </div>
                </div>
                @php
                // Assuming $solIndIns is passed to the view and contains the collection
                $cta = $solIndIns->first();

                // Prepare the background image URL (optional, if you want to use it for background)
                $backgroundImageUrl = $cta && $cta->cta_img
                ? asset('frontend/img/SolIndIns/' . $cta->cta_img)
                : asset('frontend/img/SolIndIns/default-cta.jpg');
                @endphp

                <div class="cta-banner"
                    style="background-image: url('{{ $backgroundImageUrl }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="cta-content row justify-content-center">
                        {{-- Check if CTA data is available --}}
                        @if($cta)
                        {{-- Split the cta_heading_1 into parts to wrap first few words in underline span and rest outside --}}
                        @php
                        // Let's split the phrase for underline similarly as in your example:
                        // Here I assume the phrase "Guiding high-impact organizations to scale" is the part to underline
                        $fullText = $cta->cta_heading_1 ?? '';
                        // The underline phrase (adjust this string if dynamic highlighting needed)
                        $underlinePhrase = 'Guiding high-impact organizations to scale';

                        // Replace underline phrase with span wrapped version, fallback to fullText if phrase not found
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

                        {{-- Render heading with line break after the underline span part --}}

                        <div class="col-12 col-md-7">
                            {{-- Use nl2br to convert newlines to <br> tags --}}
                            <h2 class="">{!! nl2br($finalHeading) !!}</h2>
                        </div>

                        {{-- CTA button with dynamic link and text --}}
                        <div class="col-12">
                            <a class="btn btn-danger rounded-lg px-4 " href="{{ url($cta->cta_btn_link ?? '/contact') }}">
                                {{ $cta->cta_btn_text ?? '1Let’s Make It Happen' }}
                            </a>
                        </div>

                        @else
                        {{-- Fallback static content --}}
                        <h2 class="fw-bold">
                            <span class="brdr-bottom">Guiding high-impact organizations to scale</span><br> with vision and purpose
                        </h2>
                        <a class="btn btn-danger rounded-lg px-4" href="/contact">Let’s Make It Happen</a>
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
                const topic = document.querySelector('input[name="topic"]:checked')?.value || "";
                const industry = document.querySelector('input[name="industry"]:checked')?.value || "";
                let count = 0;
                document.querySelectorAll('.article').forEach(function(card) {
                    const topicList = (card.dataset.topics || "");
                    const industryList = (card.dataset.industries || "");
                    const matchTopic = (!topic || topicList.split(',').map(s => s.trim()).includes(topic));
                    const matchIndustry = (!industry || industryList.split(',').map(s => s.trim()).includes(industry));
                    if (matchTopic && matchIndustry) {
                        card.style.display = '';
                        count++;
                    } else {
                        card.style.display = 'none';
                    }
                });
                const noBlogsDiv = document.getElementById('no-blogs-msg');
                if (noBlogsDiv) {
                    noBlogsDiv.style.display = (count === 0) ? 'block' : 'none';
                }
            }
            document.querySelectorAll('input[name="topic"]').forEach(function(radio) {
                radio.addEventListener('change', filterArticles);
            });
            document.querySelectorAll('input[name="industry"]').forEach(function(radio) {
                radio.addEventListener('change', filterArticles);
            });
            filterArticles(); // Initial call for default filter
        });
    </script>
</body>

</html>