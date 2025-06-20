<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industries Page</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/industries.css">
    <link rel="stylesheet" href="frontend/css/home.css">
</head>
<?php
$page_name = 'industries'; 
?>

<body>
    <div class="main">
        {{view('frontend.layouts.header')}}

        <div class="page-wrapper">
            <!-- HERO SECTION -->
            <section class="hero">
                <div class="hero-container">
                    <img src="frontend/img/industries/industries-banner.png" alt="Hero Image" class="hero-image">
                    <div class="hero-content">
                        <h1 class="fw-bold"> <span class="brdr-bottom">Helping Industries</span><br>Leader Lead the
                            Future</h1>
                        <a href="#contact"
                            class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">Contact</a>
                    </div>
                </div>
            </section>



            <!-- HEADING SECTION -->
            <section class="introduction-section py-5">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-2">
                            <p class="text-uppercase medium text-muted mb-2">Introduction</p>
                        </div>
                        <!-- Left Column -->
                        <div class="col-md-5">
                            <h2 class="display-5 fw-bold">
                                <span class="brdr-bottom">Bridging Possibility</span><br>
                                with Performance
                            </h2>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-5">
                            <p class="text-muted">
                                At PD Advisors & Strategists, we work with leaders across sectors to navigate
                                disruption,
                                unlock growth, and build lasting impact. From legacy businesses to startups, we bring
                                deep industry expertise and strategic clarity.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EXPERTISE SECTION -->
            <section class="our-expertise py-5">
                <div class="container">
                    <h2 class="mb-5 text-center">
                        <span class="brdr-bottom">Our Expertise</span>
                    </h2>
                    <div class="row g-5">

                        <!-- Expertise Item -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/1.png" alt="Strategic Expertise" class="mb-3" />
                            <h6 class="fw-bold text-danger">Strategic Expertise by Sector</h6>
                            <p class="small">See how we unlock value across industries.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/2.png" alt="Aviation" class="mb-3" />
                            <h6 class="fw-bold text-danger">Aviation</h6>
                            <p class="small">Navigate shifting consumer expectations and global operations with agility
                                and insight.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/3.png" alt="Energy" class="mb-3" />
                            <h6 class="fw-bold text-danger">Energy & Natural Resources</h6>
                            <p class="small">Transition to sustainable and profitable models while meeting global
                                demand.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/4.png" alt="Healthcare" class="mb-3" />
                            <h6 class="fw-bold text-danger">Healthcare & Life Sciences</h6>
                            <p class="small">Accelerate breakthroughs and improve lives across:</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/5.png" alt="Aerospace" class="mb-3" />
                            <h6 class="fw-bold text-danger">Aerospace & Defence</h6>
                            <p class="small">Strategic innovation and operational excellence for national security and
                                commercial growth.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/6.png" alt="Construction" class="mb-3" />
                            <h6 class="fw-bold text-danger">Construction & Infrastructure</h6>
                            <p class="small">Build resilience and efficiency across projects that shape the world.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/7.png" alt="Finance" class="mb-3" />
                            <h6 class="fw-bold text-danger">Financial Services</h6>
                            <p class="small">Reimagine financial experiences, compliance, and growth across sectors:</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/8.png" alt="Machinery" class="mb-3" />
                            <h6 class="fw-bold text-danger">Machinery & Equipment</h6>
                            <p class="small">Transform operations and embrace digital to compete globally.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/9.png" alt="Automotive" class="mb-3" />
                            <h6 class="fw-bold text-danger">Automotive & Mobility</h6>
                            <p class="small">Enhance connectivity, safety, and sustainability in transportation.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/10.png" alt="Consumer" class="mb-3" />
                            <h6 class="fw-bold text-danger">Consumer Products</h6>
                            <p class="small">Adapt to shifting demands and digital-first consumer behaviors.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/11.png" alt="Forest Products" class="mb-3" />
                            <h6 class="fw-bold text-danger">Forest Products, Paper & Packaging</h6>
                            <p class="small">Optimize operations and create sustainable packaging solutions.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/12.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/13.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/14.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/15.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/16.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/17.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/18.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/19.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/20.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <img src="frontend/img/industries/21.png" alt="Media" class="mb-3" />
                            <h6 class="fw-bold text-danger">Media & Entertainment</h6>
                            <p class="small">Innovate content delivery and monetization strategies across platforms.</p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- CTA SECTION -->
            <section class="circleContainer position-relative d-flex justify-content-center bg-white pt-5 mb-0">

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
                        <div class="container">
                            <div class="bg-danger bg-opacity-60 text-white rounded-4 px-4 px-md-5 py-5">
                                <div class="row align-items-center text-center text-md-start">

                                    <!-- Left Section -->
                                    <div class="col-md-5 mb-4 mb-md-0">
                                        <h5 class="fw-semibold mb-3">Want to talk with our experts?</h5>
                                        <select class="form-select">
                                            <option selected disabled>Select an Industry</option>
                                            <option value="aviation">Aviation</option>
                                            <option value="energy">Energy</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="finance">Finance</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <!-- Divider -->
                                    <div class="col-md-2 d-none d-md-flex justify-content-center">
                                        <div class="vr bg-white" style="width:2px; height:100%; opacity:0.5;"></div>
                                    </div>

                                    <!-- Right Section -->
                                    <div class="col-md-5 text-center text-md-start">
                                        <h5 class="fw-semibold mb-3">We tailor solutions for every challenge.</h5>
                                        <a href="#" class="btn btn-light rounded-pill px-4 fw-semibold">
                                            Let’s talk →
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- rotating circle script  -->
    <script>
        const text = document.querySelector(".text p");
        const str = text.textContent;
        text.innerHTML = str
            .split("")
            .map((char, i) => `<span style="transform: rotate(${i * 10.3}deg)" >${char}</span>`)
            .join("");
    </script>



    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}

</body>

</html>