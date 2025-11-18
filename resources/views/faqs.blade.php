<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Taman Nasional Baluran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .nav-custom {
            background-color: #207b3c;
        }
        .nav-custom a {
            color: white !important;
        }
        .header-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .breaking-news img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .next-event img {
            width: 100%;
            height: auto;
        }
        .btn-green {
            background-color: #207b3c;
            color: white;
        }
        .btn-green:hover {
            background-color: #155e2a;
        }

        /* end style navbar */

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            background-color: #2e8b57; /* Dark green from logo */
            color: white;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header .logo {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }
        
        .header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .header nav ul li {
            margin-right: 30px;
        }
        .header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 5px 0;
            transition: border-bottom 0.3s ease;
        }
        .header nav ul li a:hover,
        .header nav ul li a.active {
            border-bottom: 2px solid white;
        }
        .header .right-menu {
            margin-right: 20px;
            display: flex;
            align-items: center;
        }
        .header .right-menu a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
        }

        .container {
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
            background-color: #e6f7ff; /* Light blue */
            color: #007bff; /* Blue */
            font-weight: 600;
        }

        .main-content {
            flex-grow: 1;
            padding: 30px;
        }
        .main-content h1 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 30px;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
        }

        .faq-item {
            background-color: #fff;
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
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
            color: #555;
            line-height: 1.6;
        }
        .faq-item.active .faq-answer {
            max-height: 9999px; /* Nilai sangat besar agar konten bisa meluas sepenuhnya */
            padding-bottom: 15px; /* Tambahkan padding bawah saat aktif */
        }
        .faq-item.active .faq-question {
            background-color: #eafaea; /* Light green when active */
        }
        .faq-item.active .faq-question .arrow {
            transform: rotate(90deg); /* Rotate arrow when open */
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 40px 0;
            margin-top: 40px;
        }
        .footer-content {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
        }
        .footer-section {
            flex: 1;
            min-width: 250px;
            margin: 15px;
        }
        .footer-section h3 {
            font-size: 1.1em;
            margin-bottom: 15px;
            color: #eee;
        }
        .footer-section p, .footer-section ul {
            font-size: 0.9em;
            line-height: 1.6;
            color: #bbb;
        }
        .footer-section ul {
            list-style: none;
            padding: 0;
        }
        .footer-section ul li {
            margin-bottom: 8px;
        }
        .footer-section ul li a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-section ul li a:hover {
            color: white;
        }
        .footer-section .social-icons img {
            height: 24px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .whatsapp-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366; /* WhatsApp green */
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

    <!-- Start Header -->
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg nav-custom px-4">
        <img src="{{ asset('images/LOGO.png') }}" alt="Logo Baluran" class="logo-navbar me-2">
    <!-- <a class="navbar-brand text-white fw-bold" href="#">Taman Nasional Baluran</a> -->
    <style>.logo-navbar {
        height: 40px; /* Sesuaikan tinggi agar sejajar dengan teks navbar */
        width: auto;
        }
    </style>

    <div class="collapse navbar-collapse justify-content-between">

        {{-- Grup menu tengah --}}
        <div class="mx-auto">
            <div class="rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                <a href="/" class="nav-link menu-link {{ Request::is('/') ? 'active-menu' : '' }}">@lang('messages.home')</a>
                <a href="/listberita" class="nav-link menu-link {{ Request::is('listberita') || Request::is('berita*') ? 'active-menu' : '' }}">@lang('messages.news')</a>
                <a href="/listevent" class="nav-link menu-link {{ Request::is('listevent*') || Request::routeIs('event.show') ? 'active-menu' : '' }}">@lang('messages.events')</a>
                <a href="/faq" class="nav-link menu-link {{ Request::is('faq') ? 'active-menu' : '' }}">@lang('messages.faq')</a>
                <a href="/about" class="nav-link menu-link {{ Request::is('about') ? 'active-menu' : '' }}">@lang('messages.about')</a>
            </div>
        </div>

        {{-- Grup kanan --}}
        <ul class="navbar-nav ms-3">
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

    </div> <!-- ✅ Sekarang benar-benar menutup navbar-collapse -->
    <style> /* Style untuk dropdown bahasa */
        /* Warna dropdown item */
        .dropdown-menu {
            background-color:#207b3c; /* atau putih dengan abu muda */
            border-radius: 8px;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        /* Warna tulisan dalam item */
        .dropdown-menu .dropdown-item {
            color: #207b3c;
            font-weight: 500;
        }

        /* Hover efek */
        .dropdown-menu .dropdown-item:hover {
            background-color:rgb(146, 219, 161);
            color: #155e2a;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <style>/* Style untuk bubble menu tengah */
            /* Style dasar semua menu tengah */
            .navbar .nav-link.menu-link {
                color:rgb(0, 0, 0) !important;
            }

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
                background-color:rgb(41, 159, 76)!important;
                color: white !important;
                border-color: transparent;
                font-weight: 600; /* ✅ Khusus untuk menu aktif */
            }
        </style>
    </nav>
    <!-- End Header -->

    <div class="container">
        <aside class="sidebar">
            <h2>Daftar isi</h2>
            <ul>
                <li><a href="#" class="active">Tentang Baluran</a></li>
                <li><a href="#">Lokasi & Cara Akses</a></li>
                <li><a href="#">Objek Wisata & Satwa Liar</a></li>
                <li><a href="#">Penginapan & Layanan Pendukung</a></li>
                <li><a href="#">Aturan & Etika Kunjungan</a></li>
            </ul>
        </aside>

        <main class="main-content">
            <h1>Pertanyaan yang Sering Diajukan</h1>

            <div class="faq-list">
                @foreach($faqs as $faq)
                    <div class="faq-item">
                        <div class="faq-question">
                            {{ $faq->question }}
                            <span class="arrow">&gt;</span>
                        </div>
                        <div class="faq-answer">
                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
        

    <!-- Tombol WhatsApp -->
    <a href="https://wa.me/6285319389646" class="whatsapp-button" target="_blank">
        <img src="{{ asset('images/WhatsApp.png') }}" alt="WhatsApp" style="width: 30px;">
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    // Close all other open items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });

                    // Toggle current item
                    item.classList.toggle('active');
                });
            });

            // Set active class for sidebar based on current URL or a specific link
            // In a real Laravel app, you'd make this dynamic based on route/section
            const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
            sidebarLinks.forEach(link => {
                if (link.textContent.includes('Tentang Baluran')) { // Example logic
                    link.classList.add('active');
                }
            });

            // Set active class for navigation
            const navLinks = document.querySelectorAll('header nav ul li a');
            navLinks.forEach(link => {
                if (link.textContent.includes('FAQ')) { // Example logic
                    link.classList.add('active');
                }
            });
        });
    </script>
    @include('components.footer')
</body>
</html>