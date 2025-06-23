<header class="d-flex justify-content-evenly align-items-baseline px-4 py-4 ">
    <a class="companyLogo" href="/">
        <div class="fw-semibold ">Company Logo</div>
    </a>
    <nav>
        <ul class="nav">
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

    <div class="d-flex align-items-center gap-5">
        <!-- ✅ Font Awesome Search Icon -->
        <i class="fas fa-search" style="font-size: 1.2rem;"></i>

        <a class="btn btn-danger rounded-lg px-4" href="/contact">Contact Us</a>
    </div>
</header>

<!-- cursor -->
<div id="dot"></div>
<div id="ball"></div>
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