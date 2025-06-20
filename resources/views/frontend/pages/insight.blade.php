<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights Page</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/insights.css">



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
                <div class="hero-container">
                    <img src="frontend/img/insight/insights-banner.png" alt="Hero Image" class="hero-image">
                    <div class="hero-content">
                        <h1> <span class="highlight-line-1">Big visions start with a</span><br>simple conversation.</h1>
                        <a href="#contact"
                            class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">Contact</a>
                    </div>
                </div>
            </section>

            <!-- HEADING SECTION -->
            <section class="py-5 mx-auto mb-3">
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
                    <h2 class="highlight-title text-center">
                        <span class="highlight-line">Stay ahead with our latest thinking.
                    </h2>
                    <p class="mx-auto mt-5">Explore our latest research, client stories, and expert perspectives to help
                        you stay ahead in an
                        ever-changing world. Our insights reflect the depth of our experience across industries and
                        capabilities, offering practical guidance and innovative thinking.</p>
                </div>

            </section>



            <section>
                <div class="container py-5">
                    <div class="row">
                        <!-- Left: Articles -->
                        <div class="col-md-8">
                            <div class="row g-4" id="article-container">
                                <!-- Example Article -->
                                <div class="col-md-6 article" data-topic="Strategy">
                                    <div class="card article-card">
                                        <img src="https://via.placeholder.com/400x160" class="card-img-top article-img"
                                            alt="...">
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
                                        <img src="https://via.placeholder.com/400x160" class="card-img-top article-img"
                                            alt="...">
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

            <section class="contact-map-section py-5">
                <!-- Google Map Image (replace with iframe if dynamic map needed) -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.1032544438103!2d72.95256187525315!3d19.19069198203768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b905c193fc1d%3A0xe51ccf4213ab2fff!2sCrezvatic%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1750401326727!5m2!1sen!2sin"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <!-- Contact Box -->
                <div class="contact-box">
                    <h4>Get In Touch</h4>
                    <p><strong>Email:</strong> info@pdadvisorsandstrategists.com</p>
                    <p><strong>Address:</strong> 202 Leo Building 24th Road, near Starbucks Bandra (W),<br>Mumbai-400052
                        Maharashtra</p>
                    <p><strong>Contact:</strong> +91 9820202059</p>
                </div>
            </section>

            <section class="contact-form-section">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Left Text Column -->
                        <div class="col-md-5 contact-left">
                            <h2>Let’s<br>contact<br>for<br>better<br>result</h2>
                            <div class="divider-line"></div>
                            <div class="company-logo">Company Logo</div>
                        </div>

                        <!-- Right Form Column -->
                        <div class="col-md-7">
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2 mb-md-0">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Company">
                                </div>
                                <div class="mb-3">
                                    <input type="url" class="form-control" placeholder="Website">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="submit-btn">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>







            <!-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->



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

    <script>
        // FILTERING LOGIC
        function filterArticles() {
            const selectedTopic = document.querySelector('input[name="topic"]:checked')?.value || '';
            const selectedIndustry = document.querySelector('input[name="industry"]:checked')?.value || '';

            document.querySelectorAll('.article').forEach(card => {
                const cardTopic = card.getAttribute('data-topic');
                const cardIndustry = card.getAttribute('data-industry');

                const topicMatch = !selectedTopic || cardTopic === selectedTopic;
                const industryMatch = !selectedIndustry || cardIndustry === selectedIndustry;

                card.style.display = (topicMatch && industryMatch) ? 'block' : 'none';
            });
        }

        // Apply filter on topic change
        document.querySelectorAll('input[name="topic"]').forEach(radio => {
            radio.addEventListener('change', filterArticles);
        });

        // Apply filter on industry change
        document.querySelectorAll('input[name="industry"]').forEach(radio => {
            radio.addEventListener('change', filterArticles);
        });

        // COLLAPSE TOGGLE + ARROW DIRECTION
        document.querySelectorAll('.filter-title').forEach(header => {
            const targetSelector = header.getAttribute('data-bs-target');
            const collapseTarget = document.querySelector(targetSelector);
            const arrow = header.querySelector('.arrow');

            if (collapseTarget) {
                collapseTarget.addEventListener('show.bs.collapse', () => {
                    arrow.textContent = '▲';
                });

                collapseTarget.addEventListener('hide.bs.collapse', () => {
                    arrow.textContent = '▼';
                });
            }
        });
    </script>


    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}

</body>

</html>