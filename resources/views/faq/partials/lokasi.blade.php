<style>
    /* CSS untuk Kontainer Utama */
    .location-card {
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .location-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }
    .transport-item {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
        padding: 1.5rem;
        border-radius: 8px;
        background-color: #f8f9fa;
        margin-bottom: 1rem;
    }
    .transport-item i {
        font-size: 2rem;
        color: #198754; /* Warna hijau Bootstrap */
    }
    .transport-item h4 {
        font-weight: 600;
        color: #212529;
    }
    .transport-item p {
        color: #6c757d;
        margin-bottom: 0;
    }
    .map-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container my-5">
    <div class="row g-4">
        {{-- Kolom Kiri: Info & Cara Akses (Sekarang Lebar Penuh) --}}
        <div class="col-12">
            <div class="location-card p-4">
                <h2 class="text-3xl font-bold mb-4 text-center text-success">Lokasi & Cara Akses</h2>
                <p class="text-center text-muted mb-4">
                    Taman Nasional Baluran berada di Kabupaten Situbondo, Jawa Timur. Pilih cara terbaik untuk petualangan Anda!
                </p>

                {{-- Bagian Alamat Lengkap --}}
                <div class="mb-5">
                    <h5 class="fw-bold text-success"><i class="bi bi-geo-alt-fill me-2"></i>Alamat Lengkap</h5>
                    <p class="mb-1 text-muted">
                        Jl. Raya Situbondo - Banyuwangi, Km. 35, Wonorejo,
                        Kec. Banyuputih, Kabupaten Situbondo, Jawa Timur 68374
                    </p>
                    <p class="text-muted">
                        <i class="bi bi-telephone-fill me-2"></i>(0333) 234567 |
                        <i class="bi bi-envelope-fill me-2"></i>info@baluran.id
                    </p>
                </div>
                
                <h5 class="fw-bold text-success"><i class="bi bi-card-checklist me-2"></i>Panduan Cara Akses</h5>
                <div class="d-flex flex-column gap-3 mt-4">
                    {{-- Item Kereta Api --}}
                    <div class="transport-item">
                        <i class="bi bi-train-front-fill text-success"></i>
                        <div>
                            <h4>Dari Surabaya menggunakan Kereta Api</h4>
                            <p>1. Naik kereta dari **Stasiun Gubeng** menuju **Stasiun Ketapang (Banyuwangi)**.</p>
                            <p>2. Lanjutkan perjalanan dari Stasiun Ketapang dengan **ojek online, travel, atau bus** menuju pintu masuk Baluran.</p>
                        </div>
                    </div>

                    {{-- Item Bus --}}
                    <div class="transport-item">
                        <i class="bi bi-bus-front-fill text-success"></i>
                        <div>
                            <h4>Menggunakan Bus / Transportasi Umum</h4>
                            <p>Naik bus jurusan **Situbondo/Banyuwangi** melalui jalur pantura. Turun di Banyuputih lalu lanjutkan dengan ojek atau angkutan lokal menuju Baluran.</p>
                        </div>
                    </div>

                    {{-- Item Kendaraan Pribadi --}}
                    <div class="transport-item">
                        <i class="bi bi-car-front-fill text-success"></i>
                        <div>
                            <h4>Menggunakan Kendaraan Pribadi</h4>
                            <p>Jalan menuju Baluran sudah memadai untuk kendaraan **roda empat maupun roda dua**. Dari Surabaya, perjalanan memakan waktu ±5 jam via Tol Surabaya–Probolinggo, dilanjutkan jalur pantura.</p>
                        </div>
                    </div>
                    
                    {{-- Item Trooper --}}
                    <div class="transport-item">
                        <i class="bi bi-geo-alt-fill text-success"></i>
                        <div>
                            <h4>Transportasi di dalam kawasan</h4>
                            <p>Di dalam kawasan Baluran tersedia **trooper** yang dapat disewa untuk menjelajahi area, termasuk savana, pantai, dan hutan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


    {{-- Kolom Peta (Sekarang di bawah dan Lebar Penuh) --}}
    <div class="col-12 mt-4">
        <h5 class="fw-bold text-success">
            <i class="bi bi-geo-alt-fill me-2"></i>Peta Taman Nasional Baluran
        </h5>
        <div class="map-container h-100">
            <iframe 
                src="https://maps.google.com/maps?q=-7.865917,114.398056&hl=id&z=15&output=embed"
                width="100%" 
                height="600" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>