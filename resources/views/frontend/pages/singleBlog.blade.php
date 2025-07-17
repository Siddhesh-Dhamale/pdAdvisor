<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }} | Insights</title>
    {{ view('frontend.layouts.css') }}
    <link rel="stylesheet" href="{{ asset('frontend/css/insights.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
</head>

<?php $page_name = 'insights'; ?>

<body>
    <div class="main">
        {{ view('frontend.layouts.header') }}

        <div class="page-wrapper">
            <!-- HERO SECTION -->
            <section class="hero">
                <div class="hero-container col-md-8">
                    <img src="{{ asset('frontend/img/insight/insights-banner.png') }}" alt="Hero Image" class="hero-image">
                    <div class="hero-content">
                        <h1 class="fw-bold InsightsBorder"> <span class="brdr-bottom">Helping Industry </span></h1>
                        <h1>Leaders Lead the Future</h1>
                        <a href="/contact"
                            class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">Contact</a>
                    </div>
                </div>
            </section>

            <!-- BLOG DETAIL SECTION -->
            <section class="py-5 mx-auto" style="max-width: 800px;">
                <div class="container">
                    <a href="{{ route('insights') }}" class="btn btn-light mb-3">&larr; Back to Insights</a>
                    @if($blog->image)
                    <img src="{{ asset('frontend/img/blog/' . $blog->image) }}" class="mb-4 w-100 rounded" alt="{{ $blog->title }}" style="max-height:320px;object-fit:cover;">
                    @endif

                    <h2 class="fw-bold mb-0">{{ $blog->title }}</h2>
                    <div class="text-muted mb-3">
                        {{ $blog->created_at->format('M d, Y') }}
                        @foreach($blog->topics as $topic)
                        <span class="badge bg-primary ms-2">{{ $topic->name }}</span>
                        @endforeach
                        @foreach($blog->industries as $industry)
                        <span class="badge bg-secondary ms-1">{{ $industry->title }}</span>
                        @endforeach
                    </div>
                    <div class="blog-content mb-5">
                        {!! $blog->body !!}
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{ view('frontend.layouts.footer') }}

</body>

</html>