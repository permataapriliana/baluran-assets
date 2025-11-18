@extends('components.header')

@section('title', 'Tentang Kami - Taman Nasional Baluran')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<style>
    :root {
        --hero-image-url: url('{{ asset('images/header.jpeg') }}');
    }

    .hero-about {
        height: 50vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), var(--hero-image-url);
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
    }

    .hero-about h1 {
        font-weight: 700;
        font-size: 3rem;
    }
    .section-title {
        font-weight: 600;
        color: #207b3c;
        border-left: 5px solid #207b3c;
        padding-left: 15px;
        margin-bottom: 2rem;
    }
    .card-about {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
    .card-body p, .card-body ul, .card-body li {
        font-size: 1rem;
        line-height: 1.8;
    }
    .card-body ul {
        padding-left: 1.5rem;
    }
    .card-body li {
        margin-bottom: 0.5rem;
    }
    .profile-image, .geographic-map {
        border-radius: 1rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        height: auto;
    }
    .history-card {
        background-color: #eafaea;
        border-left: 5px solid #207b3c;
        border-radius: 0.5rem;
        padding: 2rem;
    }
    .history-card p {
        margin-bottom: 1.5rem;
    }
    .history-card strong {
        color: #1a5e2d;
    }
    .iframe-container {
        position: relative;
        width: 100%;
        padding-top: 75%; /* 4:3 Aspect Ratio */
    }
    .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        border-radius: 1rem;
    }

    /* CSS baru untuk gambar Visi Misi dan Struktur Organisasi */
    .image-container {
        text-align: center;
        padding: 2rem;
    }
    .image-container img {
        max-width: 100%;
        height: auto;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
</style>
@endpush

@section('content')

{{-- Hero Section --}}
<div class="hero-about">
    <div class="text-center">
        <h1>Tentang Taman Nasional Baluran</h1>
        <p class="lead">"Africa van Java"</p>
    </div>
</div>

<div class="container my-5">
    {{-- Profil Kawasan Section --}}
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6">
            <h2 class="section-title">Profil Kawasan</h2>
            <div class="card-about p-4">
                <p>Taman Nasional Baluran merupakan kawasan pelestarian alam yang mempunyai ekosistem asli. Kawasan ini dikelola dengan sistem zonasi dan dimanfaatkan untuk tujuan penelitian, ilmu pengetahuan, pendidikan, menunjang budidaya, pariwisata dan rekreasi.</p>
                <p>Pengelolaan Taman Nasional Baluran dilaksanakan berdasarkan prinsip konservasi sumberdaya alam hayati dan ekosistemnya yang tertuang dalam **UU Nomor 5 tahun 1990 tentang KSDAHE** dan **UU 41 tahun 1999 tentang Kehutanan**, melalui tiga pilar utama:</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Perlindungan sistem penyangga kehidupan</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Pengawetan keanekaragaman jenis tumbuhan dan satwa beserta ekosistemnya</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Pemanfaatan secara lestari sumberdaya alam hayati dan ekosistemnya</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="{{ asset('images/rusa_kecil.jpg') }}" class="profile-image img-fluid" alt="Rusa di TN Baluran">
        </div>
    </div>

    {{-- Letak Geografis & Peta Section --}}
    <div class="row g-5 align-items-center mb-5 flex-lg-row-reverse">
        <div class="col-lg-6">
            <h2 class="section-title">Letak Geografis</h2>
            <div class="card-about p-4">
                <p>Letak Geografis: 114° 29' 10" – 114° 39' 10" BT & 7° 29' 10" – 7° 55' 55" LS</p>
                <p>Taman Nasional Baluran berbatasan dengan beberapa wilayah, yaitu:</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt-fill text-success me-2"></i> **Sebelah Utara:** Berbatasan dengan Selat Madura</li>
                    <li><i class="bi bi-geo-alt-fill text-success me-2"></i> **Sebelah Timur:** Berbatasan dengan Selat Bali</li>
                    <li><i class="bi bi-geo-alt-fill text-success me-2"></i> **Sebelah Selatan:** Berbatasan dengan Desa Wonorejo, Sungai Bajulmati, Desa Bajulmati dan Desa Watukebo</li>
                    <li><i class="bi bi-geo-alt-fill text-success me-2"></i> **Sebelah Barat:** Berbatasan dengan Sungai Kelokoran dan Desa Sumberwaru</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 d-flex justify-content-center">
            <div class="iframe-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.717614002773!2d114.36440263673322!3d-7.838555230919246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd36017b203e049%3A0x63ce91100375a004!2sTaman%20Nasional%20Baluran!5e0!3m2!1sid!2sid!4v1724647326884!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

    {{-- Sejarah Kawasan Section --}}
    <div class="row justify-content-center mb-5">
        <div class="col-12">
            <h2 class="section-title">Sejarah Kawasan</h2>
            <div class="history-card">
                <p><strong>• Tahun 1920:</strong> Eksistensi kawasan Baluran dalam kesejarahannya diawali dengan usulan pencadangan hutan Blitoksa seluas 1.553 Ha untuk ditetapkan sebagai areal hutan produksi tanaman jati (jati Bosch).</p>
                <p><strong>• Tahun 1928:</strong> Upaya konservasi kawasan Baluran telah dilakukan sejak masa pemerintahan Hindia Belanda. Rintisan penunjangnya menjadi suaka margasatwa telah dilakukan oleh Kebun Raya Bogor, yang merupakan cikal bakal dari upaya perlindungan kawasan.</p>
                <p><strong>• Tahun 1930:</strong> Pada tanggal 29 Januari 1930, diterbitkan Surat Keputusan Pemerintah Hindia Belanda No. 89 yang menetapkan Baluran sebagai Hutan Lindung (Boschreserve).</p>
                <p><strong>• Tahun 1937:</strong> Pada tanggal 26 September 1937, Pemerintah Hindia Belanda menerbitkan Surat Keputusan Gubernur Jenderal Hindia Belanda No. 9, Lembaran Negara 1937, No. 544. Areal Baluran ditunjuk sebagai Suaka Margasatwa (wildreservaat) seluas 25.000 ha.</p>
            </div>
        </div>
    </div>

    {{-- Visi Misi Section (diganti dengan gambar) --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-6 col-md-8 col-10">
            <div class="image-container">
                <img src="{{ asset('images/visi_misi.jpg') }}" class="img-fluid" alt="Visi Misi Balai Taman Nasional Baluran Periode 2024-2033">
            </div>
        </div>
    </div>

    {{-- Struktur Organisasi Section (diganti dengan gambar) --}}
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-12">
            <div class="image-container">
                <img src="{{ asset('images/struktur_organisasi.png') }}" class="img-fluid" alt="Struktur Organisasi Balai Taman Nasional Baluran">
            </div>
        </div>
    </div>
</div>
@include('components.footer')
@endsection