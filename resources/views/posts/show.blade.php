@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2>{{ $post->judul }}</h2>
    <p>{{ $post->deskripsi }}</p>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($post->images as $img)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $img->image_path) }}" 
                         style="width: 100%; height: 400px; object-fit: cover;">
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
@endsection
