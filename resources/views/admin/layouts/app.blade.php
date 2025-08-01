<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 260px;
            background: #1f2833;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: all 0.3s ease;
            box-shadow: 2px 0 6px rgba(0, 0, 0, 0.2);
            z-index: 1020;
        }

        .sidebar .nav-link {
            color: #cfd8dc;
            font-weight: 500;
            transition: background 0.2s;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #fff;
            background: #0b1216;
        }

        .sidebar .nav-link i {
            margin-right: 8px;
            font-size: 1.1rem;
            vertical-align: middle;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            min-height: 100vh;
        }

        .sidebar-toggler {
            display: none;
        }

        @media (max-width: 992px) {
            .sidebar {
                left: -260px;
            }

            .sidebar.active {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar-toggler {
                display: block;
                position: fixed;
                top: 18px;
                left: 18px;
                z-index: 1030;
            }
        }
    </style>

    @yield('head')
</head>

<body>
    <!-- Sidebar toggler for mobile -->
    <button class="btn btn-primary sidebar-toggler d-lg-none" id="sidebarToggle"><i class="bi bi-list"></i> Menu</button>

    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="p-4">
            <a href="{{ route('admin.dashboard') ?? '/admin' }}" class="navbar-brand text-white fs-4">Admin CMS</a>
        </div>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        @php
        $sidebarLinks = [
        [
        'title' => 'Hero Sections',
        'route' => 'admin.hero.index',
        'pattern' => 'admin.hero.*',
        'icon' => 'bi-window-sidebar',
        ],
        [
        'title' => 'Home Page',
        'icon' => 'bi-house-door',
        'subLinks' => [
        ['route' => 'admin.home.industrySlides.index', 'label' => 'Industry Slides', 'pattern' => 'admin.home.industrySlides.*', 'icon' => 'bi-image'],
        ['route' => 'admin.home.counters.index', 'label' => 'Counters', 'pattern' => 'admin.home.counters.*', 'icon' => 'bi-bar-chart'],
        ['route' => 'admin.home.blogSection.edit', 'label' => 'Blog Section', 'pattern' => 'admin.home.blogSection.*', 'icon' => 'bi-journal-text'],
        ['route' => 'admin.home.cta.edit', 'label' => 'CTA Section', 'pattern' => 'admin.home.cta.*', 'icon' => 'bi-megaphone'],
        ['route' => 'admin.home.insights.edit', 'label' => 'Insights', 'pattern' => 'admin.home.insights.*', 'icon' => 'bi-lightning-charge'],
        ],
        ],
        [
        'title' => 'About Us',
        'icon' => 'bi-info-circle',
        'subLinks' => [
        ['route' => 'admin.about.index', 'label' => 'Manage about', 'pattern' => 'admin.about.edit*', 'icon' => 'bi-image', 'params' => ['section' => 'subhero', 'id' => 1]],
        ['route' => 'admin.about.edit', 'label' => 'Subhero Section', 'pattern' => 'admin.about.edit*', 'icon' => 'bi-image', 'params' => ['section' => 'subhero', 'id' => 1]],
        ['route' => 'admin.about.edit', 'label' => 'Approach Section', 'pattern' => 'admin.about.edit*', 'icon' => 'bi-gear', 'params' => ['section' => 'approach', 'id' => 1]],
        ['route' => 'admin.about.edit', 'label' => 'Values Section', 'pattern' => 'admin.about.edit*', 'icon' => 'bi-stars', 'params' => ['section' => 'values', 'id' => 1]],
        ['route' => 'admin.about.index', 'label' => 'Value Points', 'pattern' => 'admin.about.valuepoints.*', 'icon' => 'bi-list-ul'],
        ['route' => 'admin.about.edit', 'label' => 'Experience Section', 'pattern' => 'admin.about.edit*', 'icon' => 'bi-clock-history', 'params' => ['section' => 'experience', 'id' => 1]],
        ['route' => 'admin.about.edit', 'label' => 'CSR Section', 'pattern' => 'admin.about.edit*', 'icon' => 'bi-heart', 'params' => ['section' => 'csr', 'id' => 1]],
        ],
        ],
        [
        'title' => 'Solutions',
        'icon' => 'bi-gear',
        'subLinks' => [
        ['route' => 'admin.solutions.index', 'label' => 'Solutions (Services)', 'pattern' => 'admin.solutions.*', 'icon' => 'bi-puzzle'],
        ['route' => 'admin.sol_ind_ins.solutions', 'label' => 'Solutions Content', 'pattern' => 'admin.sol_ind_ins.solutions*', 'icon' => 'bi-puzzle'],
        ],
        ],
        [
        'title' => 'Industries',
        'icon' => 'bi-building',
        'subLinks' => [
        ['route' => 'admin.industries.index', 'label' => 'Industries', 'pattern' => 'admin.industries.*', 'icon' => 'bi-building'],
        ['route' => 'admin.sol_ind_ins.industries', 'label' => 'Industries Content', 'pattern' => 'admin.sol_ind_ins.industries*', 'icon' => 'bi-building'],
        ],
        ],
        [
        'title' => 'Insights',
        'icon' => 'bi-lightning-charge',
        'subLinks' => [
        ['route' => 'admin.home.insights.edit', 'label' => 'Insights', 'pattern' => 'admin.home.insights.*', 'icon' => 'bi-lightning-charge'],
        ['route' => 'admin.sol_ind_ins.insights', 'label' => 'Insights Content', 'pattern' => 'admin.sol_ind_ins.insights*', 'icon' => 'bi-lightbulb'],
        ],
        ],
        [
        'title' => 'Blogs',
        'icon' => 'bi-file-post',
        'subLinks' => [
        ['route' => 'admin.blog.index', 'label' => 'Blogs', 'pattern' => 'admin.blog.*', 'icon' => 'bi-file-post'],
        ['route' => 'admin.topics.index', 'label' => 'Topics for Blogs', 'pattern' => 'admin.topics.*', 'icon' => 'bi-file-post'],
        ],
        ],
        [
        'title' => 'Contact Us',
        'route' => 'admin.contact-us.index',
        'pattern' => 'admin.contact-us.*',
        'icon' => 'bi-envelope',
        ],
        ];
        @endphp


        <ul class="nav nav-pills flex-column gap-1 px-3">
            @foreach ($sidebarLinks as $link)
            <!-- your code to show links -->
            @endforeach

            <!-- Place Logout inside the sidebar menu list -->
            <li class="nav-item mt-4">
                <a href="{{ route('admin.logout') }}"
                    class="nav-link text-danger"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-left me-1"></i> Logout
                </a>
            </li>

            <li class="nav-item mt-4">
                <a class="nav-link text-warning" target="_blank" href="{{ url('/') }}">
                    <i class="bi bi-box-arrow-up-right me-1"></i> View Site
                </a>
            </li>
        </ul>



        <ul class="nav nav-pills flex-column gap-1 px-3">
            @foreach ($sidebarLinks as $link)
            @if (isset($link['subLinks']))
            @php
            $subActive = collect($link['subLinks'])->some(function ($s) {
            return request()->routeIs($s['pattern']);
            });
            @endphp
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center {{ $subActive ? 'active' : 'collapsed' }}"
                    href="#submenu-{{ \Illuminate\Support\Str::slug($link['title']) }}"
                    data-bs-toggle="collapse" aria-expanded="{{ $subActive ? 'true' : 'false' }}">
                    <span><i class="bi {{ $link['icon'] }}"></i> {{ $link['title'] }}</span>
                    <i class="bi bi-caret-down-fill"></i>
                </a>
                <div class="collapse {{ $subActive ? 'show' : '' }}" id="submenu-{{ \Illuminate\Support\Str::slug($link['title']) }}">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        @foreach ($link['subLinks'] as $subLink)
                        @php
                        $routeParams = $subLink['params'] ?? [];
                        @endphp
                        <li>
                            <a href="{{ route($subLink['route'], $routeParams) }}"
                                class="nav-link ps-4 d-flex align-items-center {{ request()->routeIs($subLink['pattern']) ? 'active' : '' }}">
                                <i class="bi {{ $subLink['icon'] }} me-1"></i> {{ $subLink['label'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a href="{{ route($link['route']) }}"
                    class="nav-link d-flex align-items-center {{ request()->routeIs($link['pattern']) ? 'active' : '' }}">
                    <i class="bi {{ $link['icon'] }} me-1"></i> {{ $link['title'] }}
                </a>
            </li>
            @endif
            @endforeach
            <li class="nav-item mt-4">
                <a class="nav-link text-warning" target="_blank" href="{{ url('/') }}">
                    <i class="bi bi-box-arrow-up-right me-1"></i> View Site
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 d-none d-lg-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('admin.dashboard') ?? '/admin' }}">Admin CMS</a>
            </div>
        </nav>

        <div class="container-fluid pt-2">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', () => {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
    <!-- jQuery (required for Summernote) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS (required for Summernote; only include if not already via your admin layout) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>


    @yield('scripts')
    @stack('scripts')
</body>

</html>