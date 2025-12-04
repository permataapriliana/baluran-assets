<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan Umum - Taman Nasional Baluran</title>

    {{-- Bootstrap & Font --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- Style Global & Header --- */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .nav-custom { 
            background-color: #207b3c;
        }
        .logo-navbar {
            height: 40px; 
            width: auto;
        }
        /* .navbar .nav-link.menu-link {
            color: rgb(0, 0, 0) !important;
        } */
            
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

        /* --- Style Layout Halaman FAQ --- */
        .container-faq-page {
            display: flex;
            margin: 20px auto;
            max-width: 1200px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        .sidebar {
            width: 250px;
            padding: 30px;
            background-color: #f8f8f8;
            border-right: 1px solid #eee;
            transition: transform 0.3s ease;
        }
        /* Tambahan untuk sidebar yang tersembunyi */
        .sidebar.hidden {
            transform: translateX(-100%);
        }
        .sidebar h2 {
            font-size: 1.3em;
            color: #555;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #666;
            padding: 8px 10px;
            display: block;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background-color: #e6f7ff; 
            color: #007bff; 
            font-weight: 600;
        }
        .main-content-faq {
            flex-grow: 1;
            padding: 30px;
        }
        .main-content-faq h1 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 30px;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
        }

        /* --- Style FAQ Accordion --- */
        .faq-item {
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .faq-question {
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #444;
            transition: background-color 0.3s ease;
        }
        .faq-question:hover {
            background-color: #f9f9f9;
        }
        .faq-question .arrow {
            font-size: 1.2em;
            transition: transform 0.3s ease;
        }
        .faq-item.active .faq-question {
            background-color: #eafaea;
        }
        .faq-item.active .faq-question .arrow {
            transform: rotate(90deg);
        }
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
            color: #555;
            line-height: 1.6;
        }
        .faq-item.active .faq-answer {
            max-height: 9999px;
            padding-bottom: 15px;
        }
        /* Style untuk tombol toggle sidebar */
        .toggle-sidebar-btn {
            display: none; /* Sembunyikan secara default */
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1000;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .container-faq-page {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #eee;
                position: fixed; /* Jadikan sidebar floating di mobile */
                top: 0;
                left: 0;
                height: 100%;
                z-index: 999;
                padding-top: 60px; /* Jarak dari atas untuk tombol close */
            }
            /* Menampilkan tombol toggle di mobile */
            .toggle-sidebar-btn {
                display: block;
            }
        }

        /* Tombol WhatsApp */
        .whatsapp-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366; 
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
            z-index: 1000;
        }
        .whatsapp-button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

{{-- Tombol Toggle Sidebar (untuk mobile) --}}
<button class="btn btn-primary toggle-sidebar-btn d-md-none" id="toggleSidebarBtn">
    <i class="fas fa-bars"></i>
</button>

{{-- Navbar Utama (dari header.blade.php) --}}
<nav class="navbar navbar-expand-lg nav-custom px-4">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="{{ asset('images/LOGO.png') }}" alt="Logo Baluran" class="logo-navbar me-2">
    </a>
    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBaluran" aria-controls="navbarBaluran" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
    </button>
    {{-- Burger menu button untuk mobile --}}
    <div class="collapse navbar-collapse justify-content-between" id="navbarBaluran">
        {{-- Grup menu tengah --}}
            <div class="mx-auto my-2 my-lg-0">
                <div class="rounded-pill bg-white px-4 py-1 d-flex flex-wrap justify-content-center gap-3">
                    <a href="/" class="nav-link menu-link {{ Request::is('/') ? 'active-menu' : '' }}">@lang('messages.home')</a>
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle menu-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('messages.Publikasi')
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/listberita">@lang('messages.news')</a></li>
                            <li><a class="dropdown-item" href="/listevent">@lang('messages.events')</a></li>
                            <li><a class="dropdown-item" href="{{ route('galeri.index') }}">@lang('messages.galeri')</a></li>
                            <li><a class="dropdown-item" href="{{ route('galeri.index') }}">@lang('messages.pengumuman')</a></li>
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

{{-- Konten Utama Halaman FAQ --}}
<div class="container-faq-page">
    <aside class="sidebar" id="faqSidebar"> 
        <h2>Daftar Isi</h2>
        <ul>
            <li><a href="/faq/tes" class="active">Tentang Baluran</a></li>
            <li><a href="/faq/lokasi">Lokasi & Cara Akses</a></li>
            <li><a href="/faq/objek">Objek Wisata & Satwa Liar</a></li>
            <li><a href="/faq/penginapan">Penginapan & Layanan Pendukung</a></li>
            <li><a href="/faq/aturan">Aturan & Etika Kunjungan</a></li>
            <li><a href="/faq/simaksi">SOP Perizinan SIMAKSI</a></li>
            <li><a href="/faq/publikasi">Publikasi</a></li>
        </ul>
    </aside>
    <main class="main-content-faq">
        @hasSection('title')
            <header class="mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">@yield('title')</h1>
            </header>
        @endif
        @yield('content')
    </main>
</div>

{{-- Footer dan Tombol WhatsApp --}}
@include('components.footer') {{-- Asumsikan Anda memiliki file footer.blade.php di folder components --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item');
        const sidebar = document.getElementById('faqSidebar');
        const toggleBtn = document.getElementById('toggleSidebarBtn');
        const body = document.body;
        const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
        
        // Logika untuk FAQ Accordion (sudah benar)
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                    }
                });
                item.classList.toggle('active');
            });
        });

        // Logika untuk menandai link sidebar yang aktif dan menggulir (scrolling)
        const currentPath = window.location.pathname;
        const currentHash = window.location.hash;

        sidebarLinks.forEach(link => {
            // Hapus kelas 'active' dari semua link sebelum menandai yang baru
            link.classList.remove('active');

            const linkPath = new URL(link.href).pathname;
            const linkHash = new URL(link.href).hash;

            // Logika untuk menandai link sidebar yang aktif berdasarkan URL
            if (linkPath === currentPath && (linkHash === currentHash || linkHash === '')) {
                link.classList.add('active');
            }
        });

        // Logika untuk menggulir ke anchor link saat halaman dimuat
        if (currentHash) {
            const targetElement = document.querySelector(currentHash);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Logika untuk buka/tutup sidebar di mobile
        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
                body.style.overflow = sidebar.classList.contains('hidden') ? 'auto' : 'hidden';
            });
        }
        
        // Logika untuk menyembunyikan sidebar di mobile setelah link diklik
        sidebarLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    if (!sidebar.classList.contains('hidden')) {
                        sidebar.classList.add('hidden');
                        body.style.overflow = 'auto';
                    }
                }
            });
        });
    });
</script>

{{-- Tombol WhatsApp --}}
<a href="https://wa.me/6285319389646" class="whatsapp-button" target="_blank">
    <img src="{{ asset('images/WhatsApp.png') }}" alt="WhatsApp" style="width: 30px;">
</a>

</body>
</html>