<header class="d-flex justify-content-evenly align-items-baseline px-4 py-4 ">
    <a class="companyLogo" href="/">
        <div class="fw-semibold ">Company Logo</div>
    </a>

    <nav class="d-none d-lg-block">
        <ul class="nav" id="mainNav">
            <li class="nav-item">
                <a class="nav-link custom-nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link {{ request()->is('industries') ? 'active' : '' }}" href="/industries">Industries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link {{ request()->is('services') ? 'active' : '' }}" href="/services">Solutions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link {{ request()->is('insights') ? 'active' : '' }}" href="/insights">Insights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About Us</a>
            </li>

        </ul>

    </nav>

    <div class="d-none d-lg-flex align-items-center gap-5 ">
        <div class="d-flex align-items-center gap-2 search-bar">
            <input type="text" class="form-control search-input" placeholder="Search..." aria-label="Search">
            <i class="fas fa-search search-icon" style="font-size: 1.2rem; cursor: pointer;"></i>
        </div>

        <a class="btn btn-danger rounded-lg px-4" href="/contact">Contact Us</a>

    </div>

    <button class="d-lg-none border-0 bg-transparent px-4" id="menuToggle" aria-label="Toggle Menu">
        <i class="fas fa-bars fa-lg"></i>
    </button>

</header>

<!-- Mobile Menu Wrapper -->
<!-- Slide-in Mobile Menu -->
<div id="mobileNav" class="mobile-nav d-lg-none">
    <ul class="nav flex-column p-4">
        <li class="nav-item">
            <a class="nav-link custom-nav-link text-black {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link custom-nav-link text-black {{ request()->is('industries') ? 'active' : '' }}" href="/industries">Industries</a>
        </li>
        <li class="nav-item">
            <a class="nav-link custom-nav-link text-black {{ request()->is('services') ? 'active' : '' }}" href="/services">Solutions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link custom-nav-link text-black {{ request()->is('insights') ? 'active' : '' }}" href="/insights">Insights</a>
        </li>
        <li class="nav-item">
            <a class="nav-link custom-nav-link text-black {{ request()->is('about') ? 'active' : '' }}" href="/about">About Us</a>
        </li>
        <li class="nav-item mt-3">
            <a class="btn btn-danger rounded-lg px-4" href="/contact">Contact Us</a>
        </li>
    </ul>
</div>

<!-- Optional: backdrop for closing the menu -->
<div id="mobileNavBackdrop" class="mobile-nav-backdrop d-lg-none"></div>


<!-- cursor -->

<!-- <div id="dot"></div>
<div id="ball"></div> -->

<!-- cursor end -->

<script>
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>