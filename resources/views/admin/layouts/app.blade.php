<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (required for Summernote) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Summernote CSS/JS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
    <style>
        body {
            background: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            min-width: 220px;
            background: #23272b;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1020;
            transition: all .3s;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            font-weight: 500;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            color: #fff;
            background: #0d6efd;
        }

        .main-content {
            margin-left: 220px;
            min-height: 100vh;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                left: -230px;
                transition: all .3s;
            }

            .sidebar.active {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }

        .sidebar-toggler {
            display: none;
        }

        @media (max-width: 991.98px) {
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
    <nav class="sidebar d-flex flex-column py-4 px-3" id="sidebar">
        <div class="mb-4">
            <a href="{{ route('admin.solutions.index') }}" class="navbar-brand text-white fs-4">Admin CMS</a>
        </div>
        <ul class="nav nav-pills flex-column gap-1">
            <li><a class="nav-link{{ request()->routeIs('admin.hero.*') ? ' active' : '' }}" href="{{ route('admin.hero.index') }}">Hero Sections</a></li>
            <li><a class="nav-link{{ request()->routeIs('admin.solutions.*') ? ' active' : '' }}" href="{{ route('admin.solutions.index') }}">Solutions</a></li>
            <li><a class="nav-link{{ request()->routeIs('admin.industries.*') ? ' active' : '' }}" href="{{ route('admin.industries.index') }}">Industries</a></li>
            <li><a class="nav-link{{ request()->routeIs('admin.blog.*') ? ' active' : '' }}" href="{{ route('admin.blog.index') }}">Blogs</a></li>
            <li><a class="nav-link{{ request()->routeIs('admin.topics.*') ? ' active' : '' }}" href="{{ route('admin.topics.index') }}">Topics for Blogs </a></li>
            {{-- Add more admin links below if needed --}}
            <li class="mt-4"><a class="nav-link text-warning" target="_blank" href="{{ url('/') }}"><i class="bi bi-box-arrow-up-right"></i> View Site</a></li>
        </ul>
    </nav>

    <div class="main-content">
        <!-- Top navbar (optional) -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 d-none d-lg-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('admin.solutions.index') }}">Admin CMS</a>
            </div>
        </nav>
        <div class="container py-3">
            @yield('content')
        </div>
    </div>


    <!-- Bootstrap 5 Bundle JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optionally, Bootstrap Icons (for hamburger and sidebar icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {{-- Sidebar toggler JS --}}
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>

    @yield('scripts')
    @stack('scripts')
</body>

</html>