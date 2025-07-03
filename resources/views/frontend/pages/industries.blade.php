<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industries Page</title>
    {{ view('frontend.layouts.css') }}
    <link rel="stylesheet" href="frontend/css/industries.css">
    <link rel="stylesheet" href="frontend/css/home.css">
</head>

<?php $page_name = 'industries'; ?>

<body>
    <div class="main">
        {{ view('frontend.layouts.header') }}

        <div class="page-wrapper">

            <!-- HERO SECTION -->
            <section class="hero scroll-snap-section">
                <div class="hero-container">
                    <img src="frontend/img/industries/industries-banner.png" alt="Hero Image" class="hero-image">
                    <div class="hero-content">
                        <h1 class="fw-bold">
                            <span class="brdr-bottom">Helping Industry</span><br>Leader Lead the Future
                        </h1>
                        <a href="/contact" class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">Contact</a>
                    </div>
                </div>
            </section>

            <!-- HEADING SECTION -->
            <section class="scroll-snap-section introduction-section py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <p class="text-uppercase medium text-muted mb-2">Introduction</p>
                        </div>
                        <div class="col-md-5">
                            <h2 class="display-5 fw-bold">
                                <span class="brdr-bottom">Bridging Possibility</span><br>with Performance
                            </h2>
                        </div>
                        <div class="col-md-5">
                            <p class="text-muted">
                                At PD Advisors & Strategists, we work with leaders across sectors to navigate disruption, unlock growth, and build lasting impact. From legacy businesses to startups, we bring deep industry expertise and strategic clarity.
                            </p>
                        </div>
                    </div>
                </div>
                <section class="container ServiceScrollButton position-absolute d-flex justify-content-end pb-2">
                    <div class="rotating-scroll magnetic-wrapper">
                        <a href="" class="go-down-btn magnetic-btn" title="Scroll down">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 100 100">
                                <polygon fill="#878787" points="55.334,46 49.333,58 43.333,46" />
                                <path id="textPath" fill="none" d="M89.322,50.197c0,22.09-17.91,40-40,40c-22.089,0-40-17.91-40-40 c0-22.089,17.911-40,40-40C71.412,10.197,89.322,28.108,89.322,50.197z" />
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

            <!-- EXPERTISE SECTION -->
            <section class="scroll-snap-section our-expertise py-5">
                <div class="container">
                    <h2 class="mb-5 text-center">
                        <span class="brdr-bottom">Our Expertise</span>
                    </h2>
                    <div class="row g-5">
                        @foreach([
                            'Strategic Expertise by Sector',
                            'Aviation',
                            'Energy & Natural Resources',
                            'Healthcare & Life Sciences',
                            'Aerospace & Defence',
                            'Construction & Infrastructure',
                            'Financial Services',
                            'Machinery & Equipment',
                            'Automotive & Mobility',
                            'Consumer Products',
                            'Forest Products, Paper & Packaging',
                            'Media & Entertainment',
                            'Metals',
                            'Private Equity',
                            'Real Estate',
                            'Retail',
                            'Social Impact',
                            'Technology',
                            'Telecommunications',
                            'Transportation',
                            'Travel & Leisure'
                        ] as $i => $title)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                @if(isset($industries[$title]))
                                    <a href="{{ route('industries.show', $industries[$title]) }}" class="text-decoration-none text-dark">
                                @endif

                                <img src="frontend/img/industries/{{ $i + 1 }}.png" alt="{{ $title }}" class="mb-3" />
                                <h6 class="fw-bold text-danger">{{ $title }}</h6>
                                <p class="small">
                                    @switch($title)
                                        @case('Strategic Expertise by Sector') See how we unlock value across industries. @break
                                        @case('Aviation') Navigate shifting consumer expectations and global operations with agility and insight. @break
                                        @case('Energy & Natural Resources') Transition to sustainable and profitable models while meeting global demand. @break
                                        @case('Healthcare & Life Sciences') Accelerate breakthroughs and improve lives across: @break
                                        @case('Aerospace & Defence') Strategic innovation and operational excellence for national security and commercial growth. @break
                                        @case('Construction & Infrastructure') Build resilience and efficiency across projects that shape the world. @break
                                        @case('Financial Services') Reimagine financial experiences, compliance, and growth across sectors: @break
                                        @case('Machinery & Equipment') Transform operations and embrace digital to compete globally. @break
                                        @case('Automotive & Mobility') Enhance connectivity, safety, and sustainability in transportation. @break
                                        @case('Consumer Products') Adapt to shifting demands and digital-first consumer behaviors. @break
                                        @case('Forest Products, Paper & Packaging') Optimize operations and create sustainable packaging solutions. @break
                                        @case('Media & Entertainment') Innovate content delivery and monetization strategies across platforms. @break
                                        @case('Metals') Deliver sustainable growth in a volatile, global market. @break
                                        @case('Private Equity') Create value across the investment lifecycle with strategic insight. @break
                                        @case('Real Estate') Rethink assets and operations in a hybrid, digitized world. @break
                                        @case('Retail') Redefine customer journeys with agility and innovation. @break
                                        @case('Social Impact') Advance equity, inclusion, and mission-driven innovation. @break
                                        @case('Technology') Lead the digital age with bold innovation across. @break
                                        @case('Telecommunications') Enable next-gen connectivity through infrastructure and service evolution. @break
                                        @case('Transportation') Shape the future of movement with sustainable and efficient solutions. @break
                                        @case('Travel & Leisure') Reimagine experiences that delight travellers and scale sustainably. @break
                                        @default Explore opportunities and solutions.
                                    @endswitch
                                </p>

                                @if(isset($industries[$title]))
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- CTA SECTION (unchanged) -->
           <!-- CTA SECTION -->
            <section
                class="scroll-snap-section circleContainer position-relative d-flex justify-content-center bg-white pt-5 mb-0">

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
                                            <option value="strategic-expertise">Strategic Expertise by Sector</option>
                                            <option value="aviation">Aviation</option>
                                            <option value="energy-natural-resources">Energy & Natural Resources</option>
                                            <option value="healthcare-life-sciences">Healthcare & Life Sciences</option>
                                            <option value="aerospace-defence">Aerospace & Defence</option>
                                            <option value="construction-infrastructure">Construction & Infrastructure
                                            </option>
                                            <option value="financial-services">Financial Services</option>
                                            <option value="machinery-equipment">Machinery & Equipment</option>
                                            <option value="automotive-mobility">Automotive & Mobility</option>
                                            <option value="consumer-products">Consumer Products</option>
                                            <option value="forest-products-packaging">Forest Products, Paper & Packaging
                                            </option>
                                            <option value="media-entertainment">Media & Entertainment</option>
                                            <option value="metals">Metals</option>
                                            <option value="private-equity">Private Equity</option>
                                            <option value="real-estate">Real Estate</option>
                                            <option value="retail">Retail</option>
                                            <option value="social-impact">Social Impact</option>
                                            <option value="technology">Technology</option>
                                            <option value="telecommunications">Telecommunications</option>
                                            <option value="transportation">Transportation</option>
                                            <option value="travel-leisure">Travel & Leisure</option>
                                        </select>

                                    </div>

                                    <!-- Divider -->
                                    <div class="col-md-2 d-none d-md-flex justify-content-center">
                                        <div class="vr bg-white" style="width:2px; height:100%; opacity:0.5;"></div>
                                    </div>

                                    <!-- Right Section -->
                                    <div class="col-md-5 text-center text-md-start">
                                        <h5 class="fw-semibold mb-3">We tailor solutions for every challenge.</h5>
                                        <a href="/contact" class="btn btn-light rounded-pill px-4 fw-semibold">
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

    {{ view('frontend.layouts.scripts') }}
    {{ view('frontend.layouts.footer') }}
</body>
</html>
