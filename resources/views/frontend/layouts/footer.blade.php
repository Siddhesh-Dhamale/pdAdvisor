<style>
    ul li,
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .bg-darkgray {
        background-color: #3B3B3B;
    }

    .bg-lightgray {
        background-color: #878787;
    }

    .rounded-Cont {
        /* margin-top:-10px ; */
        border-top-left-radius: 20px;
    }

    .socialIcons a {
        color: black;
        background-color: white;
        padding: 10px;
        border: none;
        border-radius: 100%;
        min-height: 35px;
        min-width: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;

    }

    .socialIcons a {
        color: black !important;
    }

    /* .scroll-snap-section {
        scroll-margin-top: 90px!important;
        opacity: 1!important;
        transform: translateY(20px)!important;
        transition: all 0.6s ease!important;
    }

    .scroll-snap-section.active {
        opacity: 1!important;
        transform: translateY(0)!important;
    } */
</style>


<footer class="text-white">
    <div class="overflow-hidden p-0 w-100">
        <div class="row">
            <div class="col-md-4 col-0 bg-lightgray"></div>
            <div class="col-md-8 col-12 p-0 ">
                <div class="bg-danger p-4 socialNames text-start d-flex justify-content-between">
                    <span class="mx-3">Facebook</span>
                    <span class="mx-3">Instagram</span>
                    <span class="mx-3">YouTube</span>
                    <span class="mx-3">WhatsApp</span>
                    <span class="mx-3">Twitter</span>
                    <span class="mx-3">LinkedIn</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left section -->
            <div class="col-md-4  text-center text-md-start p-5 bg-darkgray border-end border-secondary border-1">
                <p class=" fs-2">Mockup Company</p>
                <p class="  ">A strategic consulting firm empowering organizations to grow, adapt, and lead in a rapidly
                    evolving world.</p>
                <div class="d-flex justify-content-center justify-content-md-start mt-5 socialIcons">
                    <a href="#" class=" me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class=" me-3"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class=" me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class=" me-3"><i class="fab fa-youtube"></i></a>
                    <a href="#" class=""><i class="fas fa-phone"></i></a>
                </div>
            </div>
            <!-- Social Banner -->
            <div class="col-md-8 col-12  text-center bg-danger ">

                <div class="row rounded-Cont bg-darkgray h-100 p-5 justify-content-evenly">
                    <div class="col-md-3 p-4 text-start">
                        <h6 class="pb-4  ">Quick Links</h6>
                        <ul class=" ">
                            <li class=" "><a href="/industries">Industries</a></li>
                            <li class=" "><a href="/services">Solutions</a></li>
                            <li class=" "><a href="/insights">Insights</a></li>
                            <li class=" "><a href="/about">About Us</a></li>
                            <li class=" "><a href="/contact">Contact Us</a></li>

                        </ul>
                    </div>
                    <div class="col-md-6 p-4 text-start">
                        <h6 class="pb-4  ">Connect With Us !</h6>
                        <ul class=" ">
                            <li class=" ">
                                <a href="mailto:info@pdadvisorsandstrategists.com"><i class="fas fa-envelope"></i>
                                    info@pdadvisorsandstrategists.com</a>
                            </li> <br>

                            <li class=" ">
                                <a href="#"><i class="fas fa-map-marker-alt"></i> 202 Leo Building, 24th Road, near
                                    Starbucks, Bandra (W), Mumbai-400052 Maharashtra</a>
                            </li> <br>

                            <li class=" ">
                                <a href="tel:+919820202059"><i class="fas fa-phone"></i> +91 9820202059</a>
                            </li>
                        </ul>

                    </div>
                    <!--<div class="col-md-6 col-12 p-4 text-start  ">-->
                    <!--    <h6 class="pb-4  ">Mockup Company</h6>-->
                    <!--    <p class=" ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                    <!--</div>-->
                </div>

            </div>
        </div>

        <!-- Bottom strip -->
        <div class="bg-lightgray">
            <div class="container d-flex justify-content-between border-top pt-3  text-white-50 ">
                <p class="mb-0  ">PD Advisors & Strategists | Developed by <a href="https://crezvatic.com/"
                        target="_blank">Crezvatic</a></p>
                <div>
                    <a href="#" class="text-white-50 me-3  ">Privacy Policy</a>
                    <a href="#" class="text-white-50  ">Terms of Service</a>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('.scroll-snap-section');
        let isScrolling = false;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.intersectionRatio >= 0.3) {
                    const target = entry.target;

                    if (!isScrolling) {
                        isScrolling = true;

                        // Optional: visual animation class
                        sections.forEach(sec => sec.classList.remove('active'));
                        target.classList.add('active');

                        // Smooth scroll to reveal full section
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Reset scroll lock after scroll finishes
                        setTimeout(() => {
                            isScrolling = false;
                        }, 1000); // Match your animation speed
                    }
                }
            });
        }, {
            threshold: 0.3
        });

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script> -->