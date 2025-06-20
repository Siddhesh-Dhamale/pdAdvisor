<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/about.css">


</head>

<body>
    <div class="main">
        {{view('frontend.layouts.header')}}

        <div class="page-wrapper">

            <section class="hero">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <img class="w-100" src="frontend/img/about/abtHero.png" alt="">
                            <div class="HeroContent text-start lh-1">
                                <h1 class=" underlinedHeading fw-bold"><span class="brdr-bottom-hero">Empowering Ambitious</span></h1>
                                <h1 class="m-0 p-0"> Leaders to Shape the <br> Future</h1>
                                <a class="btn btn-danger rounded-lg px-4 my-4" href="#">Contact</a>
                            </div>
                        </div>
                        <!-- <div class="swiper-slide position-relative">
                            <img class="w-100" src="frontend/img/about/abtHero.png" alt="">
                            <div class="HeroContent text-start lh-1">
                                <h1 class=" underlinedHeading fw-bold"><span class="brdr-bottom-hero">Empowering Ambitious</span></h1>
                                <h1 class="m-0 p-0"> Leaders to Shape the Future</h1>
                                <a class="btn btn-danger rounded-lg px-4 my-4" href="#">Contact</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>

            <section class="py-5">
                <div class="row justify-content-evenly position-relative">
                    <div class="col-12 col-md-6 text-start">
                        <h1 class="fw-bold"><span class="brdr-bottom">Navigating Complexity,</span> <br> Seizing transformative <br> opportunities.</h1>
                        <p class="py-3 QASubcaption">At PD Advisors & Strategists we commit is to deliver tailored strategies that drive sustainable growth and lasting impact.</p>
                    </div>
                    <div class="col-12 col-md-3 ">
                        <img class="w-100" src="frontend/img/about/Group 72.png" alt="err">
                    </div>

                    <section class="container Abtscrolldwn position-absolute d-flex justify-content-end pb-2">
                        <div class="rotating-scroll magnetic-wrapper ">
                            <a href="" class="go-down-btn magnetic-btn" title="Scroll down">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
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
                </div>
            </section>

            <section>
                <div class="container py-5">
                    <div class=" row justify-content-evenly text-start pt-2">
                        <div class="col-12 col-md-2"><small>Our Approach</small></div>
                        <div class="col-12 col-md-4">
                            <h1><span class="brdr-bottom">A Trusted Partner</span> <br> In Strategic <br>Transformation</h1>
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="QASubcaption">PD Advisors & Strategists is a premier consultancy dedicated to guiding organizations through pivotal transformations. Our multidisciplinary team combines deep industry knowledge with innovative thinking to address our clients' most pressing needs.</p>
                        </div>
                    </div>
                </div>

            </section>


            <section class="pt-5">
                <div class="row">
                    <div class="col-12 col-md-6 p-0">
                        <img class="w-100 h-100 object-fit-cover" src="frontend/img/about/ABT.png" alt="">
                    </div>
                    <div class="col-12 col-md-6 bg-dark p-5">
                        <h2 class="text-white w-75">Collaborative, Insight-Driven, and Results Oriented</h2>
                        <br>
                        <div class="row">
                            <div class="col-6 col-md-5 m-2 text-white">
                                <img class="checkMarkImg" src="frontend/img/about/checkMark.png" alt="">
                                <!-- <i class="fa-solid fa-check fw-bold fs-3 py-2"></i> -->
                                <p>Integrity : </p>
                                <p>Upholding the highest ethical standards in all our engagements.</p>
                            </div>
                            <br>
                            <div class="col-6 col-md-5 m-2 text-white">
                                <img class="checkMarkImg" src="frontend/img/about/checkMark.png" alt="">
                                <!-- <i class="fa-solid fa-check fw-bold fs-3 py-2"></i> -->
                                <p>Integrity : </p>
                                <p>Upholding the highest ethical standards in all our engagements.</p>
                            </div>
                            <div class="col-6 col-md-5 m-2 text-white">
                                <img class="checkMarkImg" src="frontend/img/about/checkMark.png" alt="">
                                <!-- <i class="fa-solid fa-check fw-bold fs-3 py-2"></i> -->
                                <p>Integrity : </p>
                                <p>Upholding the highest ethical standards in all our engagements.</p>
                            </div>
                            <div class="col-6 col-md-5 m-2 text-white">
                                <img class="checkMarkImg" src="frontend/img/about/checkMark.png" alt="">
                                <!-- <i class="fa-solid fa-check fw-bold fs-3 py-2"></i> -->
                                <p>Integrity : </p>
                                <p>Upholding the highest ethical standards in all our engagements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-5 my-5 container">
                <div class="row justify-content-evenly align-items-end">
                    <div class="col-12 col-md-4 circleContainer h-100 position-relative p-0">
                        <div class="AboutCircularCounter position-relative ">
                            <span class="position-relative thirty">30</span>
                        </div>

                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row justify-content-evenly">
                            <div class="col-6">
                                <h1 class="fw-bold"><span class="brdr-bottom">Serving Clients</span> <br> Across Diverse <br> Market</h1>
                                <p class="QASubcaption">We believe in working side by side with our clients, fostering partnerships built on trust and mutual respect.</p>
                            </div>
                            <div class="col-6">

                                <p class="QASubcaption">Our approach integrates data-driven insights with practical solutions. ensuring that strategies are not only visionary but also executable.</p>
                                <img class="smallAbtimg" src="frontend/img/about/ABT.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <h1 class="text-center fw-bold py-4"><span class="brdr-bottom">Driving Positive Change</span> <br> Beyond Business</h1>
                <div class="d-flex justify-content-center">
                    <p class="QASubcaption w-75">We are dedicated to making a difference not only in the business world but also in the communities we serve. Our initiatives focus on sustainability, education, and social equity, reflecting our belief in responsible and inclusive growth.</p>
                </div>
            </section>

        </div>
    </div>


    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}
</body>

</html>