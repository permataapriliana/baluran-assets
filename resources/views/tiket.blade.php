<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket - Taman Nasional Baluran</title>
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{-- Font Awesome untuk Ikon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-primary-green: #1a6d25;
            --color-dark-green: #07471a;
            --color-light-green: #f0fdf4;
            --color-brown-accent: #9b775f;
            --color-cream: #f8f5e9;
            --hero-image-url: url('{{ asset('images/header.jpeg') }}');
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--color-light-green);
        }

        .hero-banner {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), var(--hero-image-url);
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .section-title {
            color: var(--color-dark-green);
            font-weight: 700;
        }

        .card-ticket {
            border: 2px solid var(--color-primary-green);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-ticket:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.2);
        }
        
        .ticket-title {
            color: var(--color-dark-green);
            font-weight: 600;
        }

        .price-text {
            color: var(--color-brown-accent);
            font-weight: 600;
        }

        .btn-natural {
            background-color: var(--color-primary-green);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-natural:hover {
            background-color: var(--color-dark-green);
            color: white;
        }

        .info-card {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .table thead th {
            background-color: var(--color-dark-green);
            color: white;
            border-color: var(--color-dark-green);
        }
        .info-drone {
            background-color: #ffe6e6; /* Warna latar belakang merah muda */
            border-left: 5px solid #ff4d4d; /* Garis tepi merah */
        }
    </style>
</head>
<body>
    {{-- Anda bisa memanggil komponen navbar di sini --}}
        @include('components.header')

    {{-- Hero Banner --}}
    <div class="hero-banner">
        <div class="container">
            <h1 class="display-5 fw-bold">Selamat Datang di Taman Nasional Baluran</h1>
            <p class="lead fw-light">Saksikan sendiri keindahan Savana Bekol dan hutan Mangrove Bama.</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Informasi Tiket Anda</h2>
            <p class="text-muted">Mohon maaf untuk saat ini kami hanya melayani pembelian tiket ditempat/offline.</p>
        </div>

        <div class="row g-4 justify-content-center">
            {{-- Pilihan Tiket WNI --}}
            <div class="col-md-5">
                <div class="card card-ticket text-center">
                    <div class="card-body p-4">
                        <i class="fas fa-id-card fa-3x mb-3 text-success"></i>
                        <h4 class="ticket-title">Warga Negara Indonesia</h4>
                        <p class="text-muted small">Akses penuh ke semua zona wisata</p>
                        <div class="d-flex justify-content-around mt-4">
                            <div>
                                <h6 class="price-text">Rp 21.000</h6>
                                <p class="small text-muted mb-0">Hari Kerja</p>
                            </div>
                            <div>
                                <h6 class="price-text">Rp 31.000</h6>
                                <p class="small text-muted mb-0">Hari Libur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pilihan Tiket WNA --}}
            <div class="col-md-5">
                <div class="card card-ticket text-center">
                    <div class="card-body p-4">
                        <i class="fas fa-passport fa-3x mb-3 text-success"></i>
                        <h4 class="ticket-title">Warga Negara Asing</h4>
                        <p class="text-muted small">Nikmati pemandangan eksotis yang tak terlupakan</p>
                        <div class="mt-4">
                            <h6 class="price-text">Rp 205.000</h6>
                            <p class="small text-muted mb-0">Hari Kerja & Libur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Tabel Informasi Harga & Denda --}}
        <div class="row mt-5 mb-5">
            <div class="col-md-8 mx-auto">
                <h5 class="section-title mb-3">Rincian Biaya</h5>
                <div class="card info-card">
                    <div class="card-body">
                        <table class="table table-striped text-center">
                            <thead class="bg-dark-green text-white">
                                <tr>
                                    <th>Tiket</th>
                                    <th>Hari Kerja</th>
                                    <th>Hari Libur</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>WNI</td><td>Rp 21.000</td><td>Rp 31.000</td></tr>
                                <tr><td>WNA</td><td>Rp 205.000</td><td>Rp 205.000</td></tr>
                                <tr><td>Kendaraan Roda 2</td><td>Rp 5.000</td><td>Rp 5.000</td></tr>
                                <tr><td>Kendaraan Roda 4</td><td>Rp 10.000</td><td>Rp 10.000</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="text-danger text-center mt-3 small"><strong>Pengunjung tanpa tiket akan dikenakan denda <span class="fw-bold">*5x harga tiket yang berlaku*</span></strong></p>
            </div>
        </div>

        {{-- Info Penting: Aturan Drone --}}
        <div class="row mt-4 mb-5">
            <div class="col-md-8 mx-auto">
                <div class="card info-card info-drone p-4">
                    <h5 class="fw-bold text-danger mb-3"><i class="fas fa-exclamation-triangle me-2"></i> Perhatian Penting</h5>
                    <p class="text-dark mb-2">Untuk menjaga keamanan dan kelestarian ekosistem, **pengunjung dilarang menerbangkan drone** di seluruh kawasan Taman Nasional Baluran.</p>
                    <p class="text-dark mb-0">Aturan ini ditetapkan demi melindungi satwa liar dan menjaga ketenangan habitat. Pengambilan gambar dari udara hanya dapat dilakukan dengan izin khusus dari pihak pengelola.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Script Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('components.footer')
</body>
</html>