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
                    {{-- Use social links dynamically --}}
                    <!-- <a href="{{ $footerData->facebook_link ?? '#' }}" class="mx-3 text-white" target="_blank" rel="noopener">Facebook</a>
                    <a href="{{ $footerData->insta_link ?? '#' }}" class="mx-3 text-white" target="_blank" rel="noopener">Instagram</a>
                    <a href="{{ $footerData->youtube_link ?? '#' }}" class="mx-3 text-white" target="_blank" rel="noopener">YouTube</a>
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $footerData->whatsapp_number ?? '') }}" class="mx-3 text-white" target="_blank" rel="noopener">WhatsApp</a>
                    <a href="{{ $footerData->twitter_link ?? '#' }}" class="mx-3 text-white" target="_blank" rel="noopener">Twitter</a>
                    <a href="{{ $footerData->linkedin_link ?? '#' }}" class="mx-3 text-white" target="_blank" rel="noopener">LinkedIn</a> -->
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left section -->
            <div class="col-md-4 text-center text-md-start p-5 bg-darkgray border-end border-secondary border-1">
                <p class="fs-2">{{ config('app.name', 'Mockup Company') }}</p>
                <p>
                    A strategic consulting firm empowering organizations to grow, adapt, and lead in a rapidly
                    evolving world.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start mt-5 socialIcons">
                    {{-- Social Icons with dynamic links --}}
                    <a href="{{ $footerData->linkedin_link ?? '#' }}" class="me-3 text-white" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                    <a href="{{ $footerData->facebook_link ?? '#' }}" class="me-3 text-white" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $footerData->instagram_link ?? '#' }}" class="me-3 text-white" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $footerData->twitter_link ?? '#' }}" class="me-3 text-white" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="{{ $footerData->youtube_link ?? '#' }}" class="me-3 text-white" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                    <a href="tel:{{ $footerData->phone_number_1 ?? '' }}" class="text-white"><i class="fas fa-phone"></i></a>
                </div>
            </div>
            <!-- Social Banner -->
            <div class="col-md-8 col-12 text-center bg-danger">
                <div class="row rounded-Cont bg-darkgray h-100 p-2 p-md-5 justify-content-evenly">
                    <div class="col-md-3 p-4 text-start">
                        <h6 class="pb-4 fw-bold">Quick Links</h6>
                        <ul class="d-flex d-md-block flex-wrap" style="row-gap: 10px; column-gap: 20px;">
                            <li><a href="{{ url('/industries') }}">Industries</a></li>
                            <li><a href="{{ url('/services') }}">Solutions</a></li>
                            <li><a href="{{ url('/insights') }}">Insights</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 p-4 text-start">
                        <h6 class="pb-4 fw-bold">Connect With Us !</h6>
                        <ul>
                            <li>
                                <a href="mailto:{{ $footerData->email_1 ?? 'info@example.com' }}">
                                    <i class="fas fa-envelope"></i> {{ $footerData->email_1 ?? 'info@example.com' }}
                                </a>
                            </li>
                            @if(!empty($footerData->email_2))
                            <li>
                                <a href="mailto:{{ $footerData->email_2 }}">
                                    <i class="fas fa-envelope"></i> {{ $footerData->email_2 }}
                                </a>
                            </li>
                            @endif

                            <li>
                                <a href="https://maps.google.com/?q={{ urlencode('202 Leo Building, 24th Road, near Starbucks, Bandra (W), Mumbai-400052 Maharashtra') }}" target="_blank" rel="noopener">
                                    <i class="fas fa-map-marker-alt"></i>
                                    202 Leo Building, 24th Road, near Starbucks, Bandra (W), Mumbai-400052 Maharashtra
                                </a>
                            </li>
                            <li>
                                <a href="tel:{{ $footerData->phone_number_1 ?? '' }}">
                                    <i class="fas fa-phone"></i> {{ $footerData->phone_number_1 ?? '+91 0000000000' }}
                                </a>
                            </li>
                            @if(!empty($footerData->phone_number_2))
                            <li>
                                <a href="tel:{{ $footerData->phone_number_2 }}">
                                    <i class="fas fa-phone"></i> {{ $footerData->phone_number_2 }}
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    {{-- You can add more dynamic blocks here if needed --}}
                </div>
            </div>
        </div>

        <!-- Bottom strip -->
        <div class="bg-lightgray">
            <div class="container d-flex justify-content-between border-top pt-3 text-white-50">
                <p class="mb-0">
                    {{ config('app.name', 'PD Advisors & Strategists') }} | Developed by
                    <a href="https://crezvatic.com/" target="_blank" rel="noopener">Crezvatic</a>
                </p>
                <div>
                    <a href="{{ url('/privacy-policy') }}" class="text-white-50 me-3">Privacy Policy</a>
                    <a href="{{ url('/terms-of-service') }}" class="text-white-50">Terms of Service</a>
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