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
            <a href="/admin" class="navbar-brand text-white fs-4">Admin CMS</a>
        </div>

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


        ];
        @endphp

        <ul class="nav nav-pills flex-column gap-1 px-3">
            @foreach ($sidebarLinks as $link)
            @if (isset($link['subLinks']))
            @php
            $subActive = collect($link['subLinks'])->some(fn($s)=>request()->routeIs($s['pattern']));
            @endphp
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center {{ $subActive ? 'active' : 'collapsed' }}"
                    href="#submenu-{{ Str::slug($link['title']) }}"
                    data-bs-toggle="collapse" aria-expanded="{{ $subActive ? 'true' : 'false' }}">
                    <span><i class="bi {{ $link['icon'] }}"></i> {{ $link['title'] }}</span>
                    <i class="bi bi-caret-down-fill"></i>
                </a>
                <div class="collapse {{ $subActive ? 'show' : '' }}" id="submenu-{{ Str::slug($link['title']) }}">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        @foreach ($link['subLinks'] as $subLink)
                        <li>
                            <a href="{{ route($subLink['route']) }}"
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
                <a class="navbar-brand" href="/admin">Admin CMS</a>
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

    @yield('scripts')
    @stack('scripts')
</body>

</html>