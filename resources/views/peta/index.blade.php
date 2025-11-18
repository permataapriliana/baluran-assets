@extends('components.header')

@section('title', 'Peta Taman Nasional Baluran')

@section('content')
<style>
    /* Mengatur tinggi peta agar terlihat proporsional */
    #map {
        min-height: 600px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        z-index: 1; /* Penting agar peta berada di atas elemen lain */
    }
    .map-container {
        display: flex;
        gap: 20px;
        align-items: flex-start;
        flex-wrap: wrap;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 15px;
    }
    .map-sidebar {
        width: 350px;
        background-color: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        flex-shrink: 0;
    }
    @media (max-width: 991px) {
        .map-sidebar {
            width: 100%;
        }
        #map {
            min-height: 400px;
        }
    }
    .info-card {
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .info-card:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    .info-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .info-card h6 {
        color: #1a6d25;
        font-weight: bold;
    }
    .info-card p {
        font-size: 0.9rem;
    }
    .badge-category {
        font-size: 0.75rem;
    }
    .leaflet-popup-content-wrapper {
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .leaflet-popup-content h5 {
        color: #1a6d25;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .leaflet-popup-content p {
        font-size: 0.9rem;
        color: #555;
        margin-bottom: 3px;
    }
    .leaflet-popup-content .badge-category {
        background-color: #28a745;
        color: white;
        padding: 5px 8px;
        border-radius: 5px;
        font-size: 0.8rem;
    }
</style>

<div class="container py-4">
    <h2 class="fw-bold mb-4 text-center">Peta Wisata Taman Nasional Baluran</h2>

    <div class="map-container">
        {{-- Peta --}}
        <div id="map" class="flex-grow-1"></div>

        {{-- Sidebar Informasi Lokasi --}}
        <div class="map-sidebar">
            <h5 class="fw-bold mb-3 text-success">Poin Menarik</h5>
            <div class="list-group list-group-flush">
                @forelse($lokasi as $point)
                <a href="#" class="list-group-item list-group-item-action info-card" data-lat="{{ $point['lat'] }}" data-lng="{{ $point['lng'] }}" data-nama="{{ $point['nama'] }}" data-deskripsi="{{ $point['deskripsi'] }}" data-kategori="{{ $point['kategori'] }}" data-foto="{{ asset($point['foto']) }}">
                    @if(isset($point['foto']))
                    <img src="{{ asset($point['foto']) }}" alt="{{ $point['nama'] }}">
                    @endif
                    <h6 class="mb-1">{{ $point['nama'] }}</h6>
                    <p class="mb-1 text-muted">{{ Str::limit($point['deskripsi'], 80) }}</p>
                    @if(isset($point['kategori']))
                    <span class="badge bg-success badge-category">{{ $point['kategori'] }}</span>
                    @endif
                </a>
                @empty
                    <p class="text-muted">Belum ada data lokasi yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

{{-- LeafletJS CSS & JS --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil data lokasi dari Blade
        var lokasi = @json($lokasi);

        // Inisialisasi peta dengan posisi awal di tengah Baluran (perkiraan)
        var map = L.map('map').setView([-7.828, 114.408], 12);

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker untuk setiap lokasi
        lokasi.forEach(function(point) {
            var marker = L.marker([point.lat, point.lng]).addTo(map);

            // Buat popup dengan konten HTML yang lebih kaya
            var popupContent = `
                <div class="p-2">
                    <h5 class="fw-bold mb-1">${point.nama}</h5>
                    <p class="text-muted mb-1 small">${point.deskripsi || 'Tidak ada deskripsi.'}</p>
                    ${point.kategori ? `<span class="badge bg-success badge-category">${point.kategori}</span>` : ''}
                </div>
            `;
            marker.bindPopup(popupContent);
        });

        // Event listener untuk klik pada sidebar
        document.querySelectorAll('.info-card').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                var lat = item.getAttribute('data-lat');
                var lng = item.getAttribute('data-lng');

                // Pindah tampilan peta ke lokasi yang diklik dengan animasi
                map.flyTo([lat, lng], 15, {
                    animate: true,
                    duration: 1.5
                });

                // Cari marker yang sesuai dan buka popup-nya
                map.eachLayer(function(layer) {
                    if (layer instanceof L.Marker && layer.getLatLng().equals(L.latLng(parseFloat(lat), parseFloat(lng)))) {
                        layer.openPopup();
                    }
                });
            });
        });
    });
</script>
@endsection