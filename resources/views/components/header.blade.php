<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Taman Nasional Baluran</title>

    {{-- Bootstrap & Font --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Tambahan style dari halaman --}}
    @stack('styles')

    <style>
        /* CSS untuk Navbar */
        .nav-custom { background-color: #207b3c; }
        .logo-navbar {
            height: 40px;
            width: auto;
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255,255,255, 0.9%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
        /* Bubble menu tengah */
        
        .menu-link {
            display: inline-block;
            padding: 6px 16px;
            color: #207b3c !important;
            border: 1px solid #207b3c;
            background-color: white;
            border-radius: 20px;
            transition: 0.3s;
            text-align: center;
            min-width: 80px;
            font-weight: 500;
            text-decoration: none !important;
        }
        .menu-link:hover {
            background-color: #b7e5b8;
            color: #155e2a !important;
        }
        .active-menu {
            background-color: rgb(41, 159, 76) !important;
            color: white !important;
            border-color: transparent;
            font-weight: 600;
        }

        /* Dropdown styling */
        .dropdown-menu {
            background-color: #207b3c;
            border-radius: 8px;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        .dropdown-menu .dropdown-item {
            color: #fff !important;
            font-weight: 500;
        }
        .dropdown-menu .dropdown-item:hover {
            background-color: rgb(146, 219, 161);
            color: #155e2a;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg nav-custom px-4">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/LOGO.png') }}" alt="Logo Baluran" class="logo-navbar me-2">
        </a>

        {{-- Burger menu button untuk mobile --}}
        <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBaluran" aria-controls="navbarBaluran" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarBaluran">
            {{-- Grup menu tengah --}}
            <div class="mx-auto my-2 my-lg-0">
                <div class="rounded-pill bg-white px-4 py-1 d-flex flex-wrap justify-content-center gap-3">
                    <a href="/" class="nav-link menu-link {{ Request::is('/') ? 'active-menu' : '' }}">@lang('messages.home')</a>
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle menu-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Publikasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/listberita">Berita</a></li>
                            <li><a class="dropdown-item" href="/listevent">Events</a></li>
                        </ul>
                    </li>
                    <a href="/faq" class="nav-link menu-link {{ Request::is('faq') ? 'active-menu' : '' }}">@lang('messages.faq')</a>
                    <a href="/about" class="nav-link menu-link {{ Request::is('about') ? 'active-menu' : '' }}">@lang('messages.about')</a>
                </div>
            </div>

            {{-- Grup kanan --}}
            <ul class="navbar-nav ms-lg-3 text-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                        🌐 {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ url('lang/id') }}">🇮🇩 Bahasa Indonesia</a></li>
                        <li><a class="dropdown-item" href="{{ url('lang/en') }}">🇬🇧 English</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/login" class="nav-link text-white">@lang('messages.login')</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Tambahan script dari halaman --}}
    @stack('scripts')

</body>
</html>
