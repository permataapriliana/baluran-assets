<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baluran National Park</title>

    {{-- Link CSS Eksternal --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    {{-- Styling CSS Internal --}}
    <style>
        /* BASE STYLES */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5; /* Latar belakang abu-abu muda modern */
            color: #333;
        }

        /* CONTAINER SPACING */
        .container {
            padding-top: 30px;
            padding-bottom: 30px;
        }
        
        /* NAVBAR */
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

        /* BOOKING BUTTON IN NAVBAR */
        .btn-booking-header {
            background-color: #ffda6a; /* Warna kuning yang lebih cerah */
            color: #0b5e28; /* Teks hijau gelap */
            font-weight: 700;
            border-radius: 30px;
            padding: 10px 25px;
            transition: all 0.3s ease;
            transform: translateY(-50px);
            opacity: 0;
            box-shadow: 0 6px 15px rgba(255,218,106,0.5); /* Shadow yang cocok dengan warna */
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-booking-header.animate-in {
            animation: slideInBook 0.8s ease-out 0.8s forwards;
        }
        @keyframes slideInBook {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        .btn-booking-header:hover {
            background-color: #ffcd3a;
            color: #073b1d;
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 20px rgba(255,218,106,0.6);
        }

        /* SLIDER/CAROUSEL STYLING */
        .main-carousel {
            height: 450px; /* Tinggi slider konsisten dengan hero sebelumnya */
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .carousel-item {
            height: 450px;
        }
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4); /* Overlay gelap */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px 20px;
        }
        .carousel-caption h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            animation: fadeInDown 1s ease-out;
            color: white;
        }
        .carousel-caption p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out 0.3s forwards;
            opacity: 0;
            color: white;
        }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .carousel-cta-btn {
            background-color: #ffda6a;
            color: #0b5e28;
            font-weight: 700;
            border-radius: 30px;
            padding: 12px 35px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            animation: zoomIn 1s ease-out 0.6s forwards;
            opacity: 0;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        .carousel-cta-btn:hover {
            background-color: #ffcd3a;
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
            color: #073b1d;
        }
        @keyframes zoomIn {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }
        /* Indikator dan Kontrol Carousel */
        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            opacity: 0.7;
            background-color: #ffffff;
            border: 2px solid #ffffff;
        }
        .carousel-indicators .active {
            opacity: 1;
            background-color: #ffda6a;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.7));
        }

        /* (Sisa styling untuk Section Header, Cards, FAQ, dll. SAMA seperti desain sebelumnya) */

        /* GENERAL SECTION STYLING */
        .section-header {
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }
        .section-header h2 {
            font-weight: 700;
            color: #0b5e28;
            font-size: 2.5rem;
        }
        .section-header p {
            color: #666;
            font-size: 1.1rem;
        }
        .section-header::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #ffda6a;
            border-radius: 2px;
        }

        /* CARD STYLING */
        .custom-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            border: none;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .custom-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.12);
        }
        .custom-card img {
            height: 250px; /* Tinggi gambar yang lebih konsisten */
            object-fit: cover;
            width: 100%;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .custom-card .card-body {
            padding: 25px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .custom-card .card-title {
            font-weight: 700;
            color: #0b5e28;
            margin-bottom: 10px;
            font-size: 1.35rem;
        }
        .custom-card .card-text {
            color: #555;
            line-height: 1.6;
            flex-grow: 1; /* Agar deskripsi memenuhi ruang */
        }
        .custom-card .card-footer {
            background-color: #f9f9f9;
            border-top: 1px solid #eee;
            padding: 15px 25px;
        }
        .custom-card .btn-primary, .custom-card .btn-success {
            background-color: #0b5e28;
            border-color: #0b5e28;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .custom-card .btn-primary:hover, .custom-card .btn-success:hover {
            background-color: #073b1d;
            border-color: #073b1d;
        }
        .text-muted.small {
            font-size: 0.85rem;
            color: #888 !important;
        }
        /* FAQ Styling */
        .faq-accordion .accordion-item {
            border: 1px solid #e0e0e0;
            margin-bottom: 10px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .faq-accordion .accordion-button {
            background-color: #f8fcf9;
            color: #0b5e28;
            font-weight: 600;
            padding: 15px 20px;
            font-size: 1.1rem;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            background-color: #e6ffe6;
            color: #073b1d;
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
        }
        .faq-accordion .accordion-button:focus {
            box-shadow: none;
            border-color: transparent;
        }
        .faq-accordion .accordion-body {
            padding: 20px;
            color: #555;
            line-height: 1.7;
        }
        /* TICKET INFO */
        .ticket-info .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }
        .ticket-info .table thead th {
            background-color: #0b5e28;
            color: white;
            border-color: #073b1d;
            font-weight: 600;
            padding: 12px;
        }
        .ticket-info .table tbody tr:nth-child(even) {
            background-color: #f8fcf9;
        }
        .ticket-info .table tbody td {
            padding: 10px;
            vertical-align: middle;
        }
        .ticket-info p.text-danger {
            font-size: 0.95rem;
            font-weight: 600;
            color: #dc3545 !important;
        }
        /* MAP */
        #map-home {
            height: 350px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }
        /* VIDEO SECTION */
        .video-section .card {
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }
        .video-section .ratio-16x9 {
            border-radius: 10px;
            overflow: hidden;
        }
        .video-section p.fw-semibold {
            font-size: 1rem;
            color: #333;
        }
        .btn-outline-success {
            color: #0b5e28;
            border-color: #0b5e28;
            transition: all 0.3s ease;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
        }
        .btn-outline-success:hover {
            background-color: #0b5e28;
            color: white;
        }
        /* UTILITIES */
        .mt-6 { margin-top: 6rem !important; }
        .mb-6 { margin-bottom: 6rem !important; }
        .py-6 { padding-top: 6rem !important; padding-bottom: 6rem !important; }
        .pt-6 { padding-top: 6rem !important; }
        /* EQUAL HEIGHT FIX for flexbox */
        .row-eq-height {
            display: flex;
            flex-wrap: wrap;
        }
        .row-eq-height > [class*='col-'] {
            display: flex;
            margin-bottom: 20px; /* Space between rows */
        }
        .row-eq-height > [class*='col-'] .custom-card,
        .row-eq-height > [class*='col-'] .alert {
            flex: 1; /* Grow to fill height */
        }

        /* RESPONSIVENESS */
        @media (max-width: 1200px) {
            .carousel-caption h1 { font-size: 3rem; }
            .carousel-caption p { font-size: 1.1rem; }
            .bubble-menu-wrapper { padding: 5px 15px; gap: 10px; }
            .bubble-menu-wrapper .menu-link { padding: 6px 12px; }
        }

        @media (max-width: 991px) {
            .navbar-nav { margin-top: 15px; }
            .bubble-menu-wrapper {
                flex-direction: column;
                padding: 15px;
                border-radius: 15px;
            }
            .bubble-menu-wrapper .menu-link,
            .bubble-menu-wrapper .dropdown-toggle {
                width: 100%;
                text-align: center;
                border: 1px solid #e0e0e0;
            }
            .navbar-nav.ms-lg-3 {
                flex-direction: column;
                align-items: center;
                margin-top: 20px;
            }
            .btn-booking-header {
                order: -1; 
                width: 100%;
                margin-bottom: 15px;
                transform: translateY(0); 
                opacity: 1;
            }
            .btn-booking-header.animate-in {
                animation: none;
            }
            .main-carousel { height: 350px; }
            .carousel-item { height: 350px; }
            .carousel-caption h1 { font-size: 2.5rem; }
            .carousel-caption p { font-size: 1.1rem; }
            .section-header h2 { font-size: 2rem; }
            .section-header::after { width: 60px; }
            .custom-card img { height: 200px; }
        }
        
        @media (max-width: 768px) {
            .main-carousel { height: 300px; }
            .carousel-item { height: 300px; }
            .carousel-caption { padding: 30px 15px; }
            .carousel-caption h1 { font-size: 2rem; }
            .carousel-caption p { font-size: 1rem; }
            .carousel-cta-btn { padding: 10px 25px; font-size: 1rem; }
            .section-header h2 { font-size: 1.8rem; }
            .section-header p { font-size: 0.95rem; }
            .custom-card .card-title { font-size: 1.2rem; }
            .custom-card .card-body { padding: 20px; }
            .faq-accordion .accordion-button { font-size: 1rem; padding: 12px 15px; }
            .ticket-info .table th, .ticket-info .table td { font-size: 0.9rem; padding: 8px; }
        }

        @media (max-width: 576px) {
            .navbar-brand img { height: 35px; }
            .bubble-menu-wrapper { width: 100%; }
            .main-carousel { height: 250px; }
            .carousel-item { height: 250px; }
            .carousel-caption h1 { font-size: 1.8rem; }
            .carousel-caption p { display: none; } /* Sembunyikan paragraf di layar sangat kecil */
            .custom-card img { height: 180px; }
            .custom-card .card-title { font-size: 1.1rem; }
            .custom-card .card-text { font-size: 0.9rem; }
        }
    </style>
</head>
<body>

    {{-- Navbar (TETAP MENGGUNAKAN DESAIN BARU) --}}
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

    <div id="mainSlider" class="carousel slide main-carousel" data-bs-ride="carousel" data-bs-interval="5000">
        
        {{-- Indikator Slider --}}
        <div class="carousel-indicators">
            @foreach ($headerImages as $index => $image)
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        {{-- Isi Slider (Carousel Inner) --}}
        <div class="carousel-inner">
            @foreach ($headerImages as $index => $image)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset('images/' . $image) }}" class="d-block w-100" alt="Baluran Slide {{ $index + 1 }}">
                    
                    {{-- Caption/Overlay --}}
                    <div class="carousel-caption">
                        <h1>@lang('messages.Jelajahi Pesona Baluran')</h1>
                        <p>@lang('messages.Africa Van Java Menanti Petualangan Tak Terlupakan Anda')</p>
                        <a href="#booking-section" class="carousel-cta-btn">
                            @lang('messages.Mulai Petualangan')<i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Kontrol Next/Prev --}}
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">@lang('messages.previous')</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Bagian Konten Utama (TETAP MENGGUNAKAN DESAIN BARU) --}}
    <main class="container py-4">
        
        {{-- Section: Booking --}}
        <section id="booking-section" class="mb-6 pt-4">
            <div class="section-header">
                <h2>@lang('messages.Booking Online')</h2>
                <p>@lang('messages.Pesan pengalaman seru Anda di Taman Nasional Baluran dengan mudah dan cepat.')</p>
            </div>

            <div class="row g-4 justify-content-center row-eq-height">
                {{-- Booking Camping Ground --}}
                <div class="col-lg-6 col-md-6">
                    <div class="custom-card">
                        <img src="{{ asset('images/camping.png') }}" class="card-img-top" alt="Camping Ground">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-campground me-2"></i>@lang('messages.Camping Ground')</h5>
                            <p class="card-text">@lang('messages.Nikmati sensasi bermalam di pinggir pantai, rasakan keheningan malam dan suasana alam yang otentik. Tersedia fasilitas dasar untuk kenyamanan Anda.')</p>
                            <div class="mt-auto card-footer text-center">
                                <a href="https://bit.ly/BookingCamping" target="_blank" class="btn btn-primary w-100">@lang('messages.Book Now')</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Booking Pengamatan Satwa --}}
                <div class="col-lg-6 col-md-6">
                    <div class="custom-card">
                        <img src="{{ asset('images/pengamatan_satwa.png') }}" class="card-img-top" alt="Pengamatan Satwa">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-binoculars me-2"></i>@lang('messages.Pengamatan Satwa')</h5>
                            <p class="card-text">@lang('messages.Ikuti tur pengamatan satwa liar bersama pemandu Baluran. Kesempatan melihat Banteng, Rusa, Merak, dan berbagai jenis burung di habitat aslinya.')</p>
                            <div class="mt-auto card-footer text-center">
                                <a href="https://bit.ly/BookingPengamatanSatwa" class="btn btn-primary w-100">@lang('messages.Book Now')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <hr class="my-6">

        {{-- Section: Berita Terbaru --}}
        <section class="mb-6 pt-4">
            <div class="section-header">
                <h2>@lang('messages.breaking news')</h2>
                <p>@lang('messages.Ikuti perkembangan terbaru dan kisah menarik dari Taman Nasional Baluran.')</p>
            </div>
            <div class="row g-4 row-eq-height">
                @forelse ($latestNews as $news)
                    <div class="col-lg-6 col-md-12">
                        <div class="custom-card">
                            @if(isset($news->gambar) && $news->gambar)
                                <img src="{{ asset('storage/' . $news->gambar) }}" class="card-img-top" alt="Thumbnail Berita">
                            @else
                                <img src="https://via.placeholder.com/600x250?text=No+Image" class="card-img-top" alt="No Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $news->judul }}</h5>
                                <p class="card-text text-muted small"><i class="fas fa-calendar-alt me-1"></i> {{ $news->created_at->isoFormat('D MMMM YYYY') }}</p>
                                <p class="card-text">{{ Str::limit(strip_tags($news->isi), 120) }}</p>
                                <div class="mt-auto card-footer text-center">
                                    <a href="{{ route('berita.show', $news->id) }}" class="btn btn-primary w-100">@lang('messages.selengkapnya')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center custom-card">
                            <p class="mb-0">@lang('messages.belum ada berita terbaru')</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </section>

        <hr class="my-6">

        {{-- Section: Publikasi dan Event --}}
        <section class="mb-6 pt-4">
            <div class="section-header">
                <h2>@lang('messages.Publikasi & Event')</h2>
                <p>@lang('messages.Informasi terkini mengenai publikasi riset, kegiatan, dan event seru di Baluran.')</p>
            </div>
            <div class="row g-4 row-eq-height">
                {{-- Publikasi Terbaru --}}
                <div class="col-lg-6 col-md-12">
                    <div class="custom-card">
                        <div class="card-body">
                            <h4 class="card-title mb-3"><i class="fas fa-book-open me-2"></i>@lang('messages.publikasi terbaru')</h4>
                            @if(isset($latestPublication) && $latestPublication)
                                <img src="{{ isset($latestPublication->image_path) ? asset('storage/' . $latestPublication->image_path) : 'https://via.placeholder.com/600x250?text=Publikasi+Image' }}" class="card-img-top mb-3" alt="Thumbnail Publikasi" style="height: 180px;">
                                <h5 class="fw-bold">{{ $latestPublication->title }}</h5>
                                <p class="text-muted small mb-2"><i class="fas fa-calendar-alt me-1"></i> {{ \Carbon\Carbon::parse($latestPublication->date)->isoFormat('D MMMM YYYY') }}</p>
                                <p class="card-text flex-grow-1">{{ Str::limit(strip_tags($latestPublication->content), 100) }}</p>
                                <div class="mt-auto card-footer text-center">
                                    <a href="{{ url('/faq') }}#publikasi" class="btn btn-primary w-100">@lang('messages.lihat semua publikasi')</a>
                                </div>
                            @else
                                <div class="alert alert-info text-center flex-grow-1 d-flex align-items-center justify-content-center">
                                    <p class="mb-0">@lang('messages.belum ada publikasi terbaru')</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Event Terbaru --}}
                <div class="col-lg-6 col-md-12">
                    <div class="custom-card">
                        <div class="card-body">
                            <h4 class="card-title mb-3"><i class="fas fa-calendar-check me-2"></i>@lang('messages.event terbaru')</h4>
                            @if(isset($event) && $event)
                                <img src="{{ (isset($event->images) && $event->images->first()) ? asset('storage/' . $event->images->first()->image_path) : asset('images/event.jpg') }}" class="card-img-top mb-3" alt="Event Poster" style="height: 180px;">
                                <h5 class="fw-bold">{{ $event->judul }}</h5>
                                <p class="text-muted small mb-2"><i class="fas fa-calendar-day me-1"></i> {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</p>
                                <p class="card-text flex-grow-1">{{ Str::limit(strip_tags($event->deskripsi), 100) }}</p>
                                <div class="mt-auto card-footer text-center">
                                    <a href="{{ route('event.show', $event->id) }}" class="btn btn-primary w-100">@lang('messages.lihat detail')</a>
                                </div>
                            @else
                                <div class="alert alert-info text-center flex-grow-1 d-flex align-items-center justify-content-center">
                                    <p class="mb-0">@lang('messages.tidak ada event terbaru')</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-6">

        {{-- Bagian Informasi Tambahan (Galeri, FAQ, Tiket, Peta) --}}
        <section class="info-section mb-6 pt-4">
            <div class="section-header">
                <h2>@lang('messages.Informasi Penting')</h2>
                <p>@lang('messages.Temukan informasi lengkap mengenai galeri, pertanyaan umum, harga tiket, dan peta lokasi.')</p>
            </div>
            
            <div class="row g-4"> 
                
                {{-- Kiri: Galeri & Peta (col-lg-6) --}}
                <div class="col-lg-6 col-md-12 d-flex flex-column">
                    
                    {{-- Galeri Foto --}}
                    <div class="custom-card mb-4 flex-grow-1"> {{-- Tambahkan flex-grow-1 untuk mengisi ruang --}}
                        <div class="card-body d-flex flex-column"> {{-- Tambahkan d-flex flex-column --}}
                            <h5 class="card-title mb-3"><i class="fas fa-images me-2"></i>@lang('messages.galeri')</h5>
                            @if (isset($galeris) && $galeris->count())
                                {{-- Hapus ratio 16x9, ganti dengan flex-grow-1 dan tinggi minimal --}}
                                <div id="carouselGaleri" class="carousel slide flex-grow-1 mb-3" data-bs-ride="carousel" data-bs-interval="3000" style="min-height: 200px;">
                                    <div class="carousel-inner rounded-lg h-100"> {{-- Tambahkan h-100 --}}
                                        @foreach ($galeris->take(3) as $index => $galeri)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }} h-100"> {{-- Tambahkan h-100 --}}
                                                {{-- Style di sini memastikan gambar menutupi area item carousel --}}
                                                <img src="{{ asset('images/galeri/' . $galeri->gambar) }}" class="d-block w-100 h-100" alt="{{ $galeri->judul }}" style="object-fit: cover;">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="text-muted mb-3 text-center d-flex align-items-center justify-content-center flex-grow-1" style="border: 1px dashed #ccc; border-radius: 8px;">@lang('messages.belum ada gambar')</div>
                            @endif
                            <div class="mt-auto card-footer text-center">
                                <a href="{{ route('galeri.index') }}" class="btn btn-success w-100">@lang('messages.selengkapnya')</a>
                            </div>
                        </div>
                    </div>

                    {{-- Peta & Akomodasi --}}
                    <div class="custom-card flex-grow-1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3"><i class="fas fa-map-marked-alt me-2"></i>@lang('messages.Peta & Akomodasi Wisata')</h5>
                            {{-- Tinggi Peta Disesuaikan untuk mengisi ruang --}}
                            <div id="map-home" class="mb-3 flex-grow-1" style="min-height: 250px;"></div> 
                            <div class="mt-auto card-footer text-center">
                                <a href="{{ route('peta.index') }}" class="btn btn-success w-100">@lang('messages.selengkapnya')</a>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Kanan: FAQ & Tiket (col-lg-6) --}}
                <div class="col-lg-6 col-md-12 d-flex flex-column">
                    
                    {{-- Daftar Pertanyaan (FAQ) --}}
                    <div class="custom-card mb-4">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3"><i class="fas fa-question-circle me-2"></i>@lang('messages.daftar pertanyaan')</h5>
                            <div class="accordion faq-accordion flex-grow-1" id="faqAccordion">
                                @if(isset($faqs) && count($faqs) > 0)
                                    @foreach($faqs->take(3) as $index => $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $index }}">
                                            <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-info text-center flex-grow-1 d-flex align-items-center justify-content-center">@lang('messages.Tidak ada FAQ.')</div>
                                @endif
                            </div>
                            <div class="card-footer text-center mt-3 p-0 border-0 bg-transparent">
                                <a href="{{ route('faq.index') }}" class="btn btn-success w-100">@lang('messages.selengkapnya')</a>
                            </div>
                        </div>
                    </div>

                    {{-- Informasi Tiket --}}
                    <div class="custom-card ticket-info flex-grow-1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3"><i class="fas fa-money-bill-wave me-2"></i>@lang('messages.informasi tiket')</h5>
                            <div class="flex-grow-1">
                                <table class="table table-striped table-hover table-bordered text-center table-sm">
                                    <thead>
                                        <tr>
                                            <th>@lang('messages.Tiket')</th>
                                            <th>@lang('messages.Hari Kerja')</th>
                                            <th>@lang('messages.Hari Libur')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>@lang('messages.Lokal')</td><td>Rp. 21.000</td><td>Rp. 31.000</td></tr>
                                        <tr><td>@lang('messages.Internasional')</td><td>Rp. 205.000</td><td>Rp. 205.000</td></tr>
                                        <tr><td>@lang('messages.Sepeda Motor')</td><td>Rp. 5.000</td><td>Rp. 5.000</td></tr>
                                        <tr><td>@lang('messages.Mobil')</td><td>Rp. 10.000</td><td>Rp. 10.000</td></tr>
                                    </tbody>
                                </table>
                                <p class="text-danger text-center small"><strong>@lang('messages.Bagi pengunjung yang tidak memiliki tiket akan')</strong></p>
                                <p class="text-danger text-center small mb-3"><strong>@lang('messages.*DIDENDA 5X tiket yang berlaku*')</strong></p>
                            </div>
                            <div class="mt-auto card-footer text-center">
                                <a href="/tiket" class="btn btn-success w-100">@lang('messages.selengkapnya')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-6">

        {{-- Section Video Terbaru --}}
        <section class="video-section mb-6 pt-4">
            <div class="section-header">
                <h2>@lang('messages.🎥 Video Terbaru Taman Nasional Baluran')</h2>
                <p>@lang('messages.Saksikan keindahan dan kegiatan di Taman Nasional Baluran melalui video kami.')</p>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row g-4 justify-content-center">
                        @forelse (isset($videos) ? array_slice($videos, 0, 2) : [] as $video) 
                            <div class="col-lg-6 col-md-6">
                                <div class="ratio ratio-16x9 shadow-sm">
                                    <iframe 
                                        src="https://www.youtube.com/embed/{{ $video['videoId'] }}" 
                                        title="{{ $video['title'] }}" 
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <p class="mt-3 mb-0 fw-semibold text-truncate text-center" title="{{ $video['title'] }}">
                                    {{ $video['title'] }}
                                </p>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <div class="alert alert-info mb-0">Tidak ada video terbaru yang tersedia.</div>
                            </div>
                        @endforelse
                    </div>
                    <div class="text-center mt-5">
                        <a href="https://www.youtube.com/@tnbaluran" target="_blank" class="btn btn-outline-success">
                            @lang('messages.Lihat Semua Video di YouTube') <i class="fab fa-youtube ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Menggunakan @include untuk footer terpisah --}}
    @include('components.footer')

    {{-- Script JS Eksternal --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    {{-- Script JS Internal --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            // --- 1. Script untuk Animasi Tombol Booking Header ---
            const bookingBtn = document.getElementById('header-booking-btn');
            if (bookingBtn) {
                 bookingBtn.classList.add('animate-in'); // Memicu animasi setelah DOM Load
            }

            // --- 2. Script untuk Smooth Scroll Tombol Booking Header dan Hero CTA ---
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (href === '#booking-section' || href === '#berita-section' /* tambahkan section lain */) {
                        e.preventDefault();
                        const targetElement = document.querySelector(href);
                        if (targetElement) {
                            const offset = document.querySelector('.navbar').offsetHeight; // Tinggi navbar
                            window.scrollTo({
                                top: targetElement.offsetTop - offset - 20, // Offset dengan tinggi navbar + sedikit padding
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            // --- 3. Script untuk Peta Leaflet ---
            var lat = -7.8375;
            var lng = 114.3675;
            var map = L.map('map-home').setView([lat, lng], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            L.marker([lat, lng])
                .addTo(map)
                .bindPopup("<b>Taman Nasional Baluran</b>")
                .openPopup();
        });
    </script>
</body>
</html>