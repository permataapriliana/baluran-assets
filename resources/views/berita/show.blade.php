@extends('components.header')

@section('title', $berita->judul . ' - TN Baluran')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f5f0; /* Latar belakang beige lembut */
        color: #555; /* Warna teks utama lebih gelap */
    }

    /* Hero Section (warna lembut) */
    .hero-section {
        background-color: #d4edda; /* Hijau lembut */
        color: #155724; /* Warna teks hijau gelap */
        text-align: center;
        padding: 3rem 1rem;
    }

    .hero-title {
        font-weight: 500; /* Lebih ringan */
        font-size: 2.2rem;
        margin-bottom: 0.5rem;
    }

    .post-meta {
        font-size: 0.9rem;
        opacity: 0.8;
    }

    /* Container Konten */
    .main-content-area {
        margin-top: -50px;
        position: relative;
        z-index: 2;
    }

    .news-card {
        background-color: white;
        border-radius: 8px; /* Lebih lembut */
        padding: 2rem; /* Padding sedikit dikurangi */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05); /* Bayangan lebih halus */
        border: 1px solid #e9ecef; /* Garis tipis untuk definisi */
    }

    .news-image {
        width: 100%;
        height: auto;
        max-height: 400px; /* Tinggi maksimum sedikit dikurangi */
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 1.5rem; /* Margin dikurangi */
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
    }

    /* Judul dan Meta di dalam Konten */
    .news-title {
        font-weight: 500; /* Lebih ringan */
        font-size: 1.8rem;
        color: #38761d; /* Warna hijau lebih lembut */
        margin-bottom: 0.5rem;
        line-height: 1.4;
    }

    .news-meta {
        font-size: 0.85rem;
        color: #777; /* Abu-abu lebih lembut */
        margin-bottom: 1.5rem;
    }

    .isi-berita {
        font-family: 'Poppins', sans-serif;
        line-height: 1.7; /* Sedikit lebih rapat */
        font-size: 0.95rem;
        color: #555;
        text-align: justify;
    }

    .isi-berita h1, .isi-berita h2, .isi-berita h3 {
        color: #38761d;
        margin-top: 1.8rem;
        margin-bottom: 1rem;
        font-weight: 600; /* Sedikit lebih tebal dari body */
    }

    .isi-berita p, .isi-berita li {
        margin-bottom: 0.8rem;
    }

    /* Sidebar */
    .sidebar-card {
        background-color: #fff; /* Putih */
        border: 1px solid #e9ecef;
        border-radius: 8px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
        padding: 1.2rem; /* Padding dikurangi */
    }

    .sidebar-header h5 {
        font-weight: 500;
        color: #38761d;
        border-bottom: 1px solid #e9ecef; /* Garis pemisah lebih tipis */
        padding-bottom: 0.8rem;
        margin-bottom: 0.8rem;
        font-size: 1.1rem;
    }

    /* Rekomendasi Berita */
    .recommended-news-list {
        background-color: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
        padding: 1.2rem;
    }

    .recommended-news-item-simple {
        border-bottom: 1px solid #f2f2f2; /* Warna garis lebih muda */
        padding-bottom: 0.6rem;
        margin-bottom: 0.6rem;
    }

    .recommended-news-item-simple:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }

    .recommended-news-item-simple a {
        font-weight: 400; /* Lebih ringan */
        color: #333; /* Warna teks lebih gelap */
        transition: color 0.3s ease;
        font-size: 0.9rem;
    }

    .recommended-news-item-simple a:hover {
        color: #38761d;
    }

    .recommended-news-item-simple small {
        display: block;
        font-size: 0.75rem; /* Lebih kecil */
        color: #777;
        margin-top: 0.2rem;
    }

    /* Tombol Kembali */
    .btn-back-home {
        background-color: #5bac5bff; /* Hijau soft */
        border-color: #8fbc8f;
        color: white;
        transition: background-color 0.3s ease, transform 0.3s ease;
        padding: 0.7rem 1.5rem; /* Padding tombol sedikit disesuaikan */
        border-radius: 6px;
    }

    .btn-back-home:hover {
        background-color: #6e8b6e;
        transform: translateY(-2px);
    }

    /* Styling tambahan untuk profil sidebar agar lebih soft */
    .sidebar-card.text-center img {
        border-radius: 50%; /* Bentuk lingkaran lebih soft */
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
        margin-bottom: 1rem;
    }

    .sidebar-card.text-center h5 {
        font-size: 1.05rem;
        font-weight: 500;
        color: #38761d;
        margin-bottom: 0.3rem;
        border-bottom: none; /* Hilangkan border bawah */
    }

    .sidebar-card.text-center p.text-muted {
        font-size: 0.8rem;
        color: #777;
        margin-bottom: 1.5rem;
    }

    .sidebar-card.text-center .d-flex a {
        color: #777;
        font-size: 1.3rem;
        transition: color 0.3s ease;
    }

    .sidebar-card.text-center .d-flex a:hover {
        color: #38761d;
    }
    .isi-berita img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 1rem auto;
    border-radius: 8px;
    object-fit: contain;
    }
</style>
@endpush

@section('content')
{{-- Hero Section Sederhana --}}
<div class="hero-section">
    <div class="container">
        <h1 style="font-size: 2rem; font-weight: 700;">Berita & Artikel</h1>
    </div>
</div>

<div class="container main-content-area">
    <div class="row">
        {{-- Konten Berita Utama --}}
        <div class="col-md-8 mb-4">
            <div class="news-card">
                {{-- Gambar berita di atas judul --}}
                @if($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="news-image">
                @endif
                
                {{-- Judul dan meta di bawah gambar --}}
                <h1 class="news-title text-start">{{ $berita->judul }}</h1>
                <p class="news-meta text-start">
                    <span class="me-3"><i class="fas fa-calendar-alt me-1"></i> Dipublikasikan pada {{ \Carbon\Carbon::parse($berita->tanggal_publish)->translatedFormat('d F Y') }}</span>
                    <span><i class="fas fa-user me-1"></i> Oleh Admin</span>
                </p>

                <div class="isi-berita">
                    {!! $berita->konten !!}
                </div>
                <a href="{{ url('/') }}" class="btn btn-back-home text-white mt-4">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Beranda
                </a>
            </div>
        </div>

        {{-- Sidebar Baluran --}}
        <div class="col-md-4">
            <div class="card text-center shadow-sm p-3">
                <img src="{{ asset('images/LOGO.png') }}" alt="Logo Baluran" class="img-fluid mx-auto mb-3" style="max-width: 200px;">

                <h5 class="fw-bold mb-0">Taman Nasional Baluran</h5>
                <p class="text-muted mb-2">Situbondo Jawa Timur</p>
                <p class="text-success fw-semibold">Tempat Wisata</p>

                {{-- Ikon Sosial Media --}}
                <div class="d-flex justify-content-center gap-3 mb-3">
                    <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-dark"><i class="fab fa-youtube"></i></a>
                </div>

                <p class="text-muted" style="font-size: 14px">
                    Taman nasional adalah suatu kawasan pelestarian alam yang telah ditetapkan oleh pemerintah dan tentunya memiliki ekosistem asli. Dikelola dengan sistem zonasi yang dimanfaatkan untuk tujuan penelitian, ilmu pengetahuan, pendidikan, menunjang budidaya, pariwisata, dan rekreasi.
                </p>
            </div>

            <!-- {{-- Rekomendasi Berita --}}
            <div class="recommended-news-list">
                <h5 class="fw-bold text-success mb-4">Berita Terbaru</h5>
                <ul class="list-unstyled">
                    @if(isset($rekomendasiBerita) && $rekomendasiBerita->count() > 0)
                        @foreach($rekomendasiBerita as $rekomendasi)
                        <li class="recommended-news-item-simple">
                            <a href="{{ route('berita.show', $rekomendasi->slug) }}" class="text-decoration-none">
                                {{ Str::limit($rekomendasi->judul, 60) }}
                                <small class="d-block mt-1">{{ \Carbon\Carbon::parse($rekomendasi->tanggal_publish)->translatedFormat('d F Y') }}</small>
                            </a>
                        </li>
                        @endforeach
                    @else
                        <p class="text-muted">Tidak ada berita lain yang tersedia.</p>
                    @endif
                </ul>
            </div> -->
        </div>
    </div>
</div>
@endsection