@extends('components.header')

@section('title', 'Galeri Taman Nasional Baluran')

@section('content')

{{-- Tambahkan CSS khusus di bagian head --}}
@push('styles')
<style>
    .gallery-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        cursor: pointer;
    }

    .gallery-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-kategori {
        border-left: 5px solid #198754;
        font-weight: bold;
        text-align: left;
    }

    .modal-dialog {
        max-width: 90vw;
        width: 100%;
        margin: 1.75rem auto;
    }

    .modal-content {
        max-height: 90vh;
        overflow: hidden;
        border-radius: 15px;
    }

    .modal-body {
        max-height: 75vh;
        overflow-y: auto;
        padding: 1rem;
        text-align: center;
    }

    .modal-img {
        max-width: 100%;
        max-height: 60vh;
        width: auto;
        height: auto;
        object-fit: contain;
        margin: 0 auto 1rem auto;
        display: block;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .modal-img {
            max-height: 45vh;
        }

        .modal-body {
            max-height: 65vh;
        }
    }
</style>
@endpush

<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">@lang('messages.Galeri Taman Nasional Baluran')</h2>

    {{-- Accordion per kategori galeri --}}
    <div class="accordion" id="accordionGaleri">
        @foreach (['Flora', 'Fauna', 'Kegiatan'] as $kategori)
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="heading{{ $kategori }}">
                    <button class="accordion-button btn-kategori collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $kategori }}" aria-expanded="false" aria-controls="collapse{{ $kategori }}">
                        {{ $kategori }}
                    </button>
                </h2>
                <div id="collapse{{ $kategori }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $kategori }}" data-bs-parent="#accordionGaleri">
                    <div class="accordion-body">
                        <div class="row g-4">
                            {{-- Menampilkan item galeri berdasarkan kategori --}}
                            @forelse ($galeris->where('kategori', $kategori) as $item)
                                <div class="col-md-4 col-sm-6">
                                    <div class="card h-100 shadow-sm gallery-card border-0">
                                        {{-- Klik gambar untuk memunculkan modal --}}
                                        <img src="{{ asset('images/galeri/' . $item->gambar) }}" 
                                            class="card-img-top"
                                            alt="{{ $item->judul }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalGambar"
                                            data-img="{{ asset('images/galeri/' . $item->gambar) }}"
                                            data-title="{{ $item->judul }}"
                                            data-desc="{{ $item->deskripsi }}"
                                        >
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->judul }}</h5>
                                            <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($item->deskripsi, 100) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p class="text-muted fst-italic">@lang(key: 'messages.Belum ada data pada kategori ini.')</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Modal untuk menampilkan gambar detail --}}
<div class="modal fade" id="modalGambar" tabindex="-1" aria-labelledby="modalGambarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 90vw;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalGambarLabel">Judul Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" alt="Gambar Detail" class="modal-img mb-3">
                <p class="modal-desc text-muted"></p>
            </div>
        </div>
    </div>
</div>


{{-- Script JavaScript untuk mengatur isi modal --}}
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil semua gambar di galeri
        const galleryImages = document.querySelectorAll('.gallery-card img');

        // Modal dan elemen target
        const modal = document.getElementById('modalGambar');
        const modalTitle = modal.querySelector('.modal-title');
        const modalImg = modal.querySelector('.modal-img');
        const modalDesc = modal.querySelector('.modal-desc');

        // Loop semua gambar dan pasang event click
        galleryImages.forEach(img => {
            img.addEventListener('click', () => {
                modalTitle.textContent = img.getAttribute('data-title');
                modalImg.src = img.getAttribute('data-img');
                modalDesc.textContent = img.getAttribute('data-desc');
            });
        });
    });
</script>
@endpush

@endsection
