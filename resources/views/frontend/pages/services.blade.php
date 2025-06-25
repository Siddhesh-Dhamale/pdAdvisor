<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capabilities & Services</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/services.css">

</head>

<body>
    <div class="main">
        {{view('frontend.layouts.header')}}
        <div class="page-wrapper">
            <section class="hero">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <img class="w-100" src="frontend/img/services/services_hero.png" alt="">
                            <div class="HeroContent text-start lh-1">
                                <h2 class=" underlinedHeading"><span class="brdr-bottom-hero">Helping Industry</span></h2>
                                <h1 class="m-0 p-0">Leaders Lead the Future</h1>
                                <a class="btn btn-danger rounded-lg px-4 my-5" href="/contact">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="position-relative">
                <div class="container py-5">
                    <div class=" row justify-content-evenly text-start pt-2">
                        <div class="col-12 col-md-3 p-4"><small>Our Approach</small></div>
                        <div class="col-12 col-md-4">
                            <h1 class="fw-bold"><span class="brdr-bottom">Future-Ready</span><br> Strategic Solutions <br> That Drive Results
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="QASubcaption">At PD Advisors & Strategists, our consulting services are designed to help ambitious organizations overcome their toughest challenges and seize their greatest opportunities. Our capabilities span across strategic, operational, technological, and people-centric transformations. We bring deep industry knowledge and a collaborative approach to every engagement.</p>
                        </div>
                    </div>
                </div>
                <section class="container ServiceScrollButton position-absolute d-flex justify-content-end pb-2">
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

            </section>


            <section class="container">
                <h1 class="fw-bold text-center py-5"> <span class="brdr-bottom">How Can We Help You</span></h1>
                <div class="row servicesCont ">
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 14.png" alt="">
                        <h5 class="fw-bold text-danger">Customer <br> Experience</h5>
                        <p class="small fw-bold">We help companies design and deliver differentiated customer experiences that drive loyalty, advocacy, and long-term growth.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 15.png" alt="">
                        <h5 class="fw-bold text-danger">Mergers & <br> Acquisitions (M&A)</h5>
                        <p class="small fw-bold">Our M&A experts support clients across the deal lifecycle, from strategy and due diligence to integration and value creation.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 16.png" alt="">
                        <h5 class="fw-bold text-danger">Private <br> Equity</h5>
                        <p class="small fw-bold">We advise private equity firms across the investment cycle—from due diligence and portfolio optimization to exit strategy.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 17.png" alt="">
                        <h5 class="fw-bold text-danger">AI, Insights, and <br> Solutions</h5>
                        <p class="small fw-bold">Leveraging AI, advanced analytics, and proprietary tools, we deliver actionable insights that guide smarter decisions and faster outcomes.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 18.png" alt="">
                        <h5 class="fw-bold text-danger">Sustainability</h5>
                        <p class="small fw-bold">We empower organizations to integrate sustainability into their core strategy, creating value for the business, society, and the planet.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 19.png" alt="">
                        <h5 class="fw-bold text-danger">Operations</h5>
                        <p class="small fw-bold">We optimize supply chains, streamline processes, and increase operational resilience to improve performance and reduce cost.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 20.png" alt="">
                        <h5 class="fw-bold text-danger">Sales & <br> Marketing</h5>
                        <p class="small fw-bold">We help clients drive revenue growth by transforming go-to-market strategies, sales force effectiveness, pricing, and digital marketing.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 21.png" alt="">
                        <h5 class="fw-bold text-danger">Technology</h5>
                        <p class="small fw-bold">Our technology consultants help clients modernize legacy systems, adopt emerging technologies, and build digital capabilities that fuel innovation.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 22.png" alt="">
                        <h5 class="fw-bold text-danger">Innovation</h5>
                        <p class="small fw-bold">From idea to impact, we guide industries through the innovation lifecycle, helping them launch new products, services, and business models.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 23.png" alt="">
                        <h5 class="fw-bold text-danger">People & <br> Organization</h5>
                        <p class="small fw-bold">We enable organizations to unleash the full potential of their people through organizational design, leadership development, and change management.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 24.png" alt="">
                        <h5 class="fw-bold text-danger">Strategy</h5>
                        <p class="small fw-bold">We work with leaders to define bold strategies that accelerate growth, improve competitive positioning, and unlock new value.</p>
                    </div>
                    <div class="col-6 col-md-3 p-4">
                        <img class="py-2 " src="frontend/img/services/Services-icons/Rect 25.png" alt="">
                        <h5 class="fw-bold text-danger">Transformation</h5>
                        <p class="small fw-bold">We drive enterprise-wide transformations that align vision, strategy, people, and technology to enable lasting impact.</p>
                    </div>

                </div>
            </section>

            <section class="circleContainer position-relative d-flex justify-content-center bg-white pt-5">

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
                        <h2 class="fw-bold">Explore <span class="brdr-bottom"> how PD Advisors & Strategists </span> can <br>help you transform your challenges into <br> sustainable success.</h2>
                        <a class="btn btn-danger rounded-lg px-4" href="#">Know More</a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}

</body>

</html>