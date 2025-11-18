@extends('components.header')

@section('title', 'Event Terkini')

@section('content')
<div class="container my-4">
    <h2 class="mb-3">
        Event Terkini{{ isset($tahun) ? ' Tahun ' . $tahun : '' }}
    </h2>

    <div class="row">
        <!-- Bagian daftar event -->
        <div class="col-12 col-md-8">
            @foreach ($events as $event)
                <div class="d-flex flex-column flex-md-row mb-4 border-bottom pb-3 align-items-start">
                    
                    <!-- Swiper -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
                    <div class="swiper swiper-event-{{ $event->id }} mb-3 mb-md-0 me-md-3" 
                         style="width: 200px; height: 200px; flex-shrink: 0;">
                        <div class="swiper-wrapper">
                            @if($event->images->count() > 0)
                                @foreach ($event->images as $img)
                                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('storage/' . $img->image_path) }}" 
                                             class="img-fluid rounded"
                                             style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                @endforeach
                            @else
                                <!-- Placeholder jika tidak ada gambar -->
                                <div class="swiper-slide d-flex justify-content-center align-items-center bg-light text-muted">
                                    <span>No Image</span>
                                </div>
                            @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Konten event -->
                    <div class="flex-grow-1">
                        <h5>{{ $event->judul }}</h5>
                        <p style="margin-bottom: 0;">
                            {{ Str::limit(strip_tags($event->deskripsi), 400) }}
                            <a href="{{ route('event.show', $event->id) }}">Read More</a>
                        </p>
                        <span class="badge bg-primary">
                            Tanggal: {{ \Carbon\Carbon::parse($event->tanggal)->format('Y/m/d') }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bagian arsip -->
        <div class="col-12 col-md-4">
            <h5>Arsip Event</h5>
            @php
                $arsipTahun = \App\Models\Event::selectRaw('YEAR(tanggal) as tahun')
                                ->distinct()->orderByDesc('tahun')->pluck('tahun');
            @endphp
            <ul class="list-unstyled">
                @foreach ($arsipTahun as $t)
                    <li>
                        <a href="{{ route('event.listeven.arsip', $t) }}"
                           class="{{ (isset($tahun) && $tahun == $t) ? 'fw-bold text-primary' : '' }}">
                            {{ $t }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-4">
            {{ $events->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

@include('components.footer')

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        // ambil semua ID event dari Laravel ke JS
        let eventIds = @json($events->pluck('id'));

        // inisialisasi swiper untuk setiap event
        eventIds.forEach(function(id) {
            new Swiper(".swiper-event-" + id, {
                pagination: {
                    el: ".swiper-event-" + id + " .swiper-pagination",
                    clickable: true,
                },
            });
        });
    });
</script>
@endsection
