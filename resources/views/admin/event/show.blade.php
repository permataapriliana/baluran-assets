@extends('components.header')

@section('title', $event->judul)

@section('content')
<div class="container py-5">
    <div class="row">
        {{-- Konten Event --}}
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="container mt-4">
                    <!-- Swiper -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($event->images as $img)
                                <div class="swiper-slide" style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ asset('storage/' . $img->image_path) }}" 
                                        style="width: 400px; height: auto; object-fit: cover;">
                                </div>

                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                            },
                        });
                    </script>
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{ $event->judul }}</h3>
                    <p class="text-muted">{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</p>
                    <p class="card-text">{!! nl2br(e($event->deskripsi)) !!}</p>
                    <a href="{{ url('/') }}" class="btn btn-success mt-3">← Kembali ke Beranda</a>
                </div>
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
        </div>
    </div>
</div>
@endsection
