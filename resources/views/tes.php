<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Baluran National Park</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Arial', sans-serif;
    }
    /* Navbar */
    .navbar {
      background: rgba(32,123,60,0.9);
      backdrop-filter: blur(6px);
    }
    .navbar a {
      color: #fff !important;
      font-weight: 500;
    }

    /* Slider */
    .full-slider-wrapper {
      position: relative;
      height: 520px;
      overflow: hidden;
    }
    .full-slide {
      background-size: cover;
      background-position: center;
      height: 520px;
      position: relative;
    }
    .hero-overlay {
      background: rgba(0,0,0,0.4);
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      color: #fff;
    }

    /* Card Modern */
    .card-news-event {
      border: none;
      border-radius: 16px;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    .card-news-event:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .card-news-event img {
      height: 220px;
      object-fit: cover;
    }

    /* Button */
    .btn-green {
      background: linear-gradient(135deg,#2e7d32,#1b5e20);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      transition: 0.3s;
    }
    .btn-green:hover {
      background: linear-gradient(135deg,#388e3c,#1b5e20);
      transform: scale(1.03);
    }

    /* Table Modern */
    .table thead {
      background: linear-gradient(135deg, #2e7d32, #1b5e20);
      color: #fff;
    }
    .table tbody tr:hover {
      background-color: #f0f9f2;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-white" href="#">TN Baluran</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#booking" class="nav-link">Booking</a></li>
          <li class="nav-item"><a href="#news" class="nav-link">News</a></li>
          <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="#faq" class="nav-link">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Slider -->
  <div class="full-slider-wrapper">
    <div class="full-slide" style="background-image:url('https://source.unsplash.com/1200x520/?savannah');">
      <div class="hero-overlay">
        <h1 class="fw-bold display-4">Selamat Datang di Baluran</h1>
        <p class="lead">Africa van Java – Keindahan Alam, Satwa, dan Wisata Liar</p>
        <a href="#booking" class="btn btn-green mt-3">Mulai Booking</a>
      </div>
    </div>
  </div>

  <!-- Breaking News -->
  <div id="news" class="container my-5">
    <h4 class="fw-bold mb-3 text-center">Breaking News</h4>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card card-news-event">
          <img src="https://source.unsplash.com/600x400/?forest" alt="">
          <div class="card-body">
            <h5 class="fw-bold">Konservasi Hutan</h5>
            <p class="text-muted">01 Oktober 2025</p>
            <a href="#" class="btn btn-green w-100">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-news-event">
          <img src="https://source.unsplash.com/600x400/?deer" alt="">
          <div class="card-body">
            <h5 class="fw-bold">Pengamatan Satwa</h5>
            <p class="text-muted">29 September 2025</p>
            <a href="#" class="btn btn-green w-100">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Booking Section -->
  <div id="booking" class="container my-5">
    <h4 class="fw-bold mb-3 text-center">Booking Online</h4>
    <p class="text-muted text-center mb-4">Pesan pengalaman seru di Taman Nasional Baluran</p>
    <div class="row g-4 justify-content-center">
      <div class="col-md-5">
        <div class="card card-news-event h-100">
          <img src="https://source.unsplash.com/600x400/?camping" alt="">
          <div class="card-body d-flex flex-column">
            <h5 class="fw-bold">Camping Ground</h5>
            <p class="text-muted">Nikmati sensasi bermalam di tengah savana Africa van Java.</p>
            <a href="#" class="btn btn-green mt-auto w-100">Book Camping</a>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="card card-news-event h-100">
          <img src="https://source.unsplash.com/600x400/?wildlife" alt="">
          <div class="card-body d-flex flex-column">
            <h5 class="fw-bold">Pengamatan Satwa</h5>
            <p class="text-muted">Ikuti tur pengamatan satwa liar bersama pemandu Baluran.</p>
            <a href="#" class="btn btn-green mt-auto w-100">Book Wildlife Tour</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Gallery & FAQ -->
  <div class="container my-5">
    <div class="row g-4">
      <div id="gallery" class="col-md-6">
        <h4 class="fw-bold mb-3">Gallery</h4>
        <div class="card card-news-event">
          <img src="https://source.unsplash.com/600x400/?nature" alt="">
          <div class="card-body text-center">
            <a href="#" class="btn btn-green">See More</a>
          </div>
        </div>
      </div>
      <div id="faq" class="col-md-6">
        <h4 class="fw-bold mb-3">FAQ</h4>
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="q1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1">
                Apa saja jam buka Baluran?
              </button>
            </h2>
            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">Baluran buka setiap hari pukul 07.00 – 17.00 WIB.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="q2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2">
                Bagaimana cara booking camping?
              </button>
            </h2>
            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">Anda bisa booking camping melalui menu Booking Camping di atas.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket & Maps -->
  <div class="container my-5">
    <div class="row g-4">
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Ticket Information</h4>
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th>Type</th>
              <th>Weekday</th>
              <th>Weekend</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Indonesian</td>
              <td>Rp. 20.000</td>
              <td>Rp. 25.000</td>
            </tr>
            <tr>
              <td>Foreigner</td>
              <td>Rp. 200.000</td>
              <td>Rp. 250.000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <h4 class="fw-bold mb-3">Maps & Tourist Accommodations</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18..." 
                width="100%" height="300" style="border:0;" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
