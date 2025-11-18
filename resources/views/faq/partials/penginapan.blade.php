<style>
    .penginapan-card {
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        overflow: hidden;
        background-color: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .penginapan-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .penginapan-img {
        height: 250px;
        object-fit: cover;
        width: 100%;
    }

    .penginapan-body {
        padding: 1.5rem;
    }

    .penginapan-body h4 {
        font-weight: 700;
        color: #212529;
    }

    .info-item {
        margin-bottom: 0.75rem;
        color: #6c757d;
    }

    .info-item .bi {
        color: #198754;
        font-size: 1.1rem;
        width: 25px;
    }

    .fasilitas-list {
        list-style: none;
        padding-left: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-top: 1rem;
    }

    .fasilitas-list li {
        background-color: #e9f5ee;
        color: #0f5132;
        padding: 0.3rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
</style>

    <h2 class="text-3xl font-bold text-center mb-5 text-success">Penginapan & Layanan Pendukung</h2>
    <div class="row g-4">
        {{-- Penginapan 1 --}}
        <div class="col-lg-6">
            <div class="penginapan-card h-100">
                <img src="{{ asset('images/penginapan/reta.png') }}" alt="Homestay Reta" class="penginapan-img">
                <div class="penginapan-body">
                    <h4 class="mb-3">Homestay Reta</h4>
                    <div class="info-item"><i class="bi bi-telephone-fill me-2"></i><strong>No. Telp:</strong> 085975044542</div>
                    <div class="info-item"><i class="bi bi-tag-fill me-2"></i><strong>Harga:</strong> Rp 300.000 – 500.000</div>
                    <div class="info-item"><i class="bi bi-door-open-fill me-2"></i><strong>Jumlah Kamar:</strong> Deluxe (3), Superior (4), Standart (1)</div>
                    <h6 class="fw-bold mt-4">Fasilitas:</h6>
                    <ul class="fasilitas-list">
                        <li>Breakfast</li>
                        <li>Kolam Renang</li>
                        <li>Wifi</li>
                        <li>Air Panas</li>
                        <li>AC</li>
                        <li>Netflix</li>
                    </ul>
                </div>
            </div>
        </div>
        
        {{-- Penginapan 2 --}}
        <div class="col-lg-6">
            <div class="penginapan-card h-100">
                <img src="{{ asset('images/penginapan/bima.png') }}" alt="Homestay Bima" class="penginapan-img">
                <div class="penginapan-body">
                    <h4 class="mb-3">Homestay Bima</h4>
                    <div class="info-item"><i class="bi bi-telephone-fill me-2"></i><strong>No. Telp:</strong> 085258006520</div>
                    <div class="info-item"><i class="bi bi-tag-fill me-2"></i><strong>Harga:</strong> Rp 150.000 – 450.000</div>
                    <div class="info-item"><i class="bi bi-door-open-fill me-2"></i><strong>Jumlah Kamar:</strong> Kamar Depan (4), Kamar Depan Besar (1), Kamar Belakang (9)</div>
                    <h6 class="fw-bold mt-4">Fasilitas:</h6>
                    <ul class="fasilitas-list">
                        <li>AC</li>
                        <li>Breakfast</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Penginapan 3 --}}
        <div class="col-lg-6">
            <div class="penginapan-card h-100">
                <img src="{{ asset('images/penginapan/villa.jpeg') }}" alt="Homestay Grand Baluran" class="penginapan-img">
                <div class="penginapan-body">
                    <h4 class="mb-3">Homestay Grand Baluran</h4>
                    <div class="info-item"><i class="bi bi-telephone-fill me-2"></i><strong>No. Telp:</strong> 082234747574</div>
                    <div class="info-item"><i class="bi bi-tag-fill me-2"></i><strong>Harga:</strong> Rp 200.000 – 500.000</div>
                    <h6 class="fw-bold mt-4">Fasilitas:</h6>
                    <ul class="fasilitas-list">
                        <li>AC</li>
                        <li>Wifi</li>
                        <li>TV</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Penginapan 4 --}}
        <div class="col-lg-6">
            <div class="penginapan-card h-100">
                <img src="{{ asset('images/penginapan/red.jpg') }}" alt="Reddoorz Baluran" class="penginapan-img">
                <div class="penginapan-body">
                    <h4 class="mb-3">Reddoorz Near Baluran National Park</h4>
                    <div class="info-item"><i class="bi bi-telephone-fill me-2"></i><strong>No. Telp:</strong> 083123089633 / 0895417300072</div>
                    <div class="info-item"><i class="bi bi-tag-fill me-2"></i><strong>Harga:</strong> Rp 100.000 – 300.000</div>
                    <h6 class="fw-bold mt-4">Fasilitas:</h6>
                    <ul class="fasilitas-list">
                        <li>AC</li>
                        <li>Wifi</li>
                        <li>TV</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
