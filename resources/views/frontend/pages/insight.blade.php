<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights Page</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/insights.css">
    <link rel="stylesheet" href="frontend/css/home.css">
</head>
<?php
$page_name = 'insights';
?>

<body>
    <div class="main">
        {{view('frontend.layouts.header')}}

        <div class="page-wrapper">
            <!-- HERO SECTION -->
            <section class="hero">
                <div class="hero-container col-md-8">
                    <img src="frontend/img/insight/insights-banner.png" alt="Hero Image" class="hero-image">
                    <div class="hero-content">
                        <h1 class="fw-bold"> <span class="brdr-bottom">Helping Industry </span></h1>
                        <h1>Leaders Lead the Future</h1>
                        <a href="/contact"
                            class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">Contact</a>
                    </div>
                </div>
            </section>

            <!-- HEADING SECTION -->
            <section class="py-5 mx-auto mb-3 scroll-snap-section">
                <div class="rotating-scroll magnetic-wrapper float-end p-3">
                    <a href="" class="go-down-btn magnetic-btn" title="Scroll down"
                        style="transform: translate(-10.92px, 1.5px) scale(1.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="120"
                            height="120" viewBox="0 0 100 100" aria-hidden="true">

                            <!-- Arrow Polygon -->
                            <polygon fill="#878787" points="55.334,46 49.333,58 43.333,46"></polygon>

                            <!-- Circular Path for Text -->
                            <path id="textPath" fill="none" d="M89.322,50.197c0,22.09-17.91,40-40,40c-22.089,0-40-17.91-40-40 
                                c0-22.089,17.911-40,40-40C71.412,10.197,89.322,28.108,89.322,50.197z"></path>

                            <!-- Rotating Text Around Path -->
                            <text class="scrollText" font-size="8" letter-spacing="2" fill="#000" textLength="350">
                                <textPath href="#textPath" startOffset="-1%">
                                    &nbsp; • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN • SCROLL DOWN •
                                </textPath>
                            </text>

                        </svg>
                    </a>
                </div>
                <div class="container heading-section">
                    <!-- <p class="text-uppercase text-muted small mb-2 section-subtitle">Contact Us</p> -->
                    <h2 class="fw-bold text-center">
                        <span class="brdr-bottom">Stay ahead with our latest thinking.</span>
                    </h1>
                    <p class="mx-auto mt-5 text-center">Explore our latest research, client stories, and expert perspectives to help
                        you stay ahead in an
                        ever-changing world. Our insights reflect the depth of our experience across industries and
                        capabilities, offering practical guidance and innovative thinking.</p>
                </div>

            </section>


            <!-- FILTERING SECTION -->
            <section class="scroll-snap-section">
                <div class="container py-5">
                    <div class="row">
                        <!-- Left: Articles -->
                        <div class="col-md-8">
                            <div class="row g-4" id="article-container">
                                <!-- Example Article -->
                                <div class="col-md-6 article" data-topic="Strategy">
                                    <div class="card article-card">
                                        <img src="frontend/img/insight/service-card-1.png"
                                            class="card-img-top article-img" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Energy Executive Agenda 2025: New Challenges, New
                                                Innovations</h6>
                                            <p class="card-text">Our latest survey finds executives facing rising costs,
                                                surging demand, and a long to-do list.</p>
                                            <span class="read-more">Read more >>></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 article" data-topic="AI & Data">
                                    <div class="card article-card">
                                        <img src="frontend/img/insight/service-card-2.png"
                                            class="card-img-top article-img" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">AI and Sustainability: The Power of Integration</h6>
                                            <p class="card-text">Three practices to help companies deploy a more
                                                carbon-conscious, tech-focused approach.</p>
                                            <span class="read-more">Read more >>></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 article" data-topic="AI & Data">
                                    <div class="card article-card">
                                        <img src="frontend/img/insight/service-card-2.png"
                                            class="card-img-top article-img" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">AI and Sustainability: The Power of Integration</h6>
                                            <p class="card-text">Three practices to help companies deploy a more
                                                carbon-conscious, tech-focused approach.</p>
                                            <span class="read-more">Read more >>></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 article" data-topic="AI & Data">
                                    <div class="card article-card">
                                        <img src="frontend/img/insight/service-card-2.png"
                                            class="card-img-top article-img" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">AI and Sustainability: The Power of Integration</h6>
                                            <p class="card-text">Three practices to help companies deploy a more
                                                carbon-conscious, tech-focused approach.</p>
                                            <span class="read-more">Read more >>></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add more articles as needed -->
                            </div>
                        </div>

                        <!-- Right: Filters -->
                        <div class="col-md-4 filter-container">
                            <!-- Explore by Topic -->
                            <div class="mb-4">
                                <div class="filter-title d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#topicFilter" aria-expanded="true">
                                    Explore by Topic <span class="arrow">▲</span>
                                </div>
                                <div class="collapse show filter-options ps-3 pt-2" id="topicFilter">
                                    <label><input type="radio" name="topic" value="" checked> All</label>
                                    <label><input type="radio" name="topic" value="Strategy"> Strategy</label>
                                    <label><input type="radio" name="topic" value="Technology"> Technology</label>
                                    <label><input type="radio" name="topic" value="AI & Data"> AI & Data</label>
                                    <label><input type="radio" name="topic" value="Sustainability">
                                        Sustainability</label>
                                    <label><input type="radio" name="topic" value="Customer Experience"> Customer
                                        Experience</label>
                                    <label><input type="radio" name="topic" value="Operations"> Operations</label>
                                    <label><input type="radio" name="topic" value="M&A"> M&A</label>
                                    <label><input type="radio" name="topic" value="Innovation"> Innovation</label>
                                    <label><input type="radio" name="topic" value="People & Organization"> People &
                                        Organization</label>
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
                                    <label><input type="radio" name="industry" value="Energy"> Energy</label>
                                    <label><input type="radio" name="industry" value="Healthcare"> Healthcare</label>
                                    <label><input type="radio" name="industry" value="Retail"> Retail</label>
                                    <label><input type="radio" name="industry" value="Finance"> Finance</label>
                                    <label><input type="radio" name="industry" value="Education"> Education</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA SECTION -->
            <section class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5 mb-0">

                <div class="circle2">
                    <div class="circle">
                        <div class="logo"><i class="fa-solid fa-plus text-dark"></i></div>
                        <div class="text">
                            <p class=""><span style="transform: rotate(0deg)">
                                </span><span style="transform: rotate(10.3deg)"> </span><span
                                    style="transform: rotate(20.6deg)"> </span><span
                                    style="transform: rotate(30.900000000000002deg)"> </span><span
                                    style="transform: rotate(41.2deg)"> </span><span style="transform: rotate(51.5deg)">
                                </span><span style="transform: rotate(61.800000000000004deg)"> </span><span
                                    style="transform: rotate(72.10000000000001deg)"> </span><span
                                    style="transform: rotate(82.4deg)"> </span><span style="transform: rotate(92.7deg)">
                                </span><span style="transform: rotate(103deg)"> </span><span
                                    style="transform: rotate(113.30000000000001deg)"> </span><span
                                    style="transform: rotate(123.60000000000001deg)"> </span><span
                                    style="transform: rotate(133.9deg)"> </span><span
                                    style="transform: rotate(144.20000000000002deg)"> </span><span
                                    style="transform: rotate(154.5deg)"> </span><span
                                    style="transform: rotate(164.8deg)"> </span><span
                                    style="transform: rotate(175.10000000000002deg)"> </span><span
                                    style="transform: rotate(185.4deg)"> </span><span
                                    style="transform: rotate(195.70000000000002deg)"> </span><span
                                    style="transform: rotate(206deg)"> </span><span style="transform: rotate(216.3deg)">
                                </span><span style="transform: rotate(226.60000000000002deg)"> </span><span
                                    style="transform: rotate(236.9deg)"> </span><span
                                    style="transform: rotate(247.20000000000002deg)"> </span><span
                                    style="transform: rotate(257.5deg)"> </span><span
                                    style="transform: rotate(267.8deg)"> </span><span
                                    style="transform: rotate(278.1deg)"> </span><span
                                    style="transform: rotate(288.40000000000003deg)"> </span><span
                                    style="transform: rotate(298.70000000000005deg)"> </span><span
                                    style="transform: rotate(309deg)"> </span><span style="transform: rotate(319.3deg)">
                                </span><span style="transform: rotate(329.6deg)"> </span><span
                                    style="transform: rotate(339.90000000000003deg)">T</span><span
                                    style="transform: rotate(350.20000000000005deg)">u</span><span
                                    style="transform: rotate(360.5deg)">r</span><span
                                    style="transform: rotate(370.8deg)">n</span><span
                                    style="transform: rotate(381.1deg)">i</span><span
                                    style="transform: rotate(391.40000000000003deg)">n</span><span
                                    style="transform: rotate(401.70000000000005deg)">g</span><span
                                    style="transform: rotate(412deg)"> </span><span
                                    style="transform: rotate(422.3deg)">B</span><span
                                    style="transform: rotate(432.6deg)">u</span><span
                                    style="transform: rotate(442.90000000000003deg)">s</span><span
                                    style="transform: rotate(453.20000000000005deg)">i</span><span
                                    style="transform: rotate(463.50000000000006deg)">n</span><span
                                    style="transform: rotate(473.8deg)">e</span><span
                                    style="transform: rotate(484.1deg)">s</span><span
                                    style="transform: rotate(494.40000000000003deg)">s</span><span
                                    style="transform: rotate(504.70000000000005deg)">e</span><span
                                    style="transform: rotate(515deg)">s</span><span
                                    style="transform: rotate(525.3000000000001deg)"> </span><span
                                    style="transform: rotate(535.6deg)">.</span><span
                                    style="transform: rotate(545.9000000000001deg)"> </span><span
                                    style="transform: rotate(556.2deg)">I</span><span
                                    style="transform: rotate(566.5deg)">n</span><span
                                    style="transform: rotate(576.8000000000001deg)">t</span><span
                                    style="transform: rotate(587.1deg)">o</span><span
                                    style="transform: rotate(597.4000000000001deg)"> </span><span
                                    style="transform: rotate(607.7deg)">W</span><span
                                    style="transform: rotate(618deg)">i</span><span
                                    style="transform: rotate(628.3000000000001deg)">n</span><span
                                    style="transform: rotate(638.6deg)">n</span><span
                                    style="transform: rotate(648.9000000000001deg)">e</span><span
                                    style="transform: rotate(659.2deg)">r</span><span
                                    style="transform: rotate(669.5deg)">s</span><span
                                    style="transform: rotate(679.8000000000001deg)"> </span><span
                                    style="transform: rotate(690.1deg)">.</span><span
                                    style="transform: rotate(700.4000000000001deg)"> </span></p>
                        </div>
                    </div>
                </div>
                <div class="cta-banner">
                    <div class="cta-content">
                        <h2 class="fw-bold"><span class="brdr-bottom">Guiding high-impact organizations to
                                scale</span><br> with vision and purpose</h2>
                        <a class="btn btn-danger rounded-lg px-4" href="/contact">Let’s Make It Happen</a>
                    </div>
                </div>
            </section>

        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}

</body>

</html>