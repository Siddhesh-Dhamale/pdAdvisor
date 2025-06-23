<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    {{view('frontend.layouts.css')}}
    <link rel="stylesheet" href="frontend/css/contact.css">



</head>
<?php
$page_name = 'contact-us'; 
?>
<body>
    <div class="main">
        {{view('frontend.layouts.header')}}
        <link rel="stylesheet" href="frontend/css/home.css">

        <div class="page-wrapper">
            <section class="hero">
                <div class="hero-container">
                    <img src="frontend/img/contact/contact-banner.png" alt="Hero Image" class="hero-image">
                    <div class="hero-content">
                        <h1 >Big visions start with a<br>simple conversation.</h1>
                        <a href="#contact"
                            class="btn btn-danger rounded-lg px-4 btn-contact align-item-right">Contact</a>
                    </div>
                </div>

            </section>
            <section class="py-5 w-75 mx-auto">
                <div class="container">
                    <p class="text-uppercase text-muted small mb-2 section-subtitle">Contact Us</p>
                    <h1 class="highlight-title mx-auto fw-bold">
                        <span class="brdr-bottom">Connect with us to discover how our experts can</span><br>
                        help you achieve your goals
                    </h1>
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
    <!-- <script>
        const text = document.querySelector(".text p");
        const str = text.textContent;
        text.innerHTML = str
            .split("")
            .map((char, i) => `<span style="transform: rotate(${i * 10.3}deg)" >${char}</span>`)
            .join("");
    </script> -->
    {{ view('frontend.layouts.scripts') }}
    {{view('frontend.layouts.footer')}}

</body>

</html>