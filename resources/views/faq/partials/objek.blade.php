<style>
    /* CSS untuk Grid Galeri */
    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 32px;
        padding: 20px;
    }

    /* CSS untuk Kartu Galeri */
    .gallery-card {
        border-radius: 12px;
        overflow: hidden;
        background-color: #ffffff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .gallery-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }
    .gallery-card-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .gallery-card-img:hover {
        transform: scale(1.1);
    }
    .gallery-card-body {
        padding: 20px;
        text-align: center;
    }
    .gallery-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 8px;
    }
    .gallery-card-desc {
        font-size: 0.95rem;
        color: #666;
    }
</style>

{{-- Konten Utama berada di dalam satu container agar rata tengah --}}
<div class="container mx-auto p-6 text-center">

    <div class="gallery-section">
        <h2 class="text-2xl font-bold text-center mb-6 text-success">Galeri Objek Wisata</h2>
        <div class="card-grid">
            <div class="gallery-card">
                <img src="{{ asset('images/savana.jpg') }}" alt="Savana Bekol" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Savana Bekol</h4>
                    <p class="gallery-card-desc">Sering disebut Afrika-nya Jawa.</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/objek/bama.jpg') }}" alt="Pantai Bama" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Pantai Bama</h4>
                    <p class="gallery-card-desc">Pantai dengan pasir putih dan hutan mangrove.</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/objek/sijile.jpeg') }}" alt="Labuhan Merak" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Pantai Bilik Sijile</h4>
                    <p class="gallery-card-desc">Tempat menikmati sunrise dan snorkeling.</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/objek/perengan.jpeg') }}" alt="Labuhan Merak" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Pantai Perengan</h4>
                    <p class="gallery-card-desc">Pantai pasir hitam didaerah permukiman nelayan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-px bg-gray-300 my-10"></div>

    <div class="gallery-section">
        <h2 class="text-2xl font-bold text-center mb-6 text-success">Galeri Satwa</h2>
        <div class="card-grid">
            <div class="gallery-card">
                <img src="{{ asset('images/rusa.jpg') }}" alt="Rusa Timor" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Rusa Timor</h4>
                    <p class="gallery-card-desc">Mudah dijumpai merumput di savana.</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/objek/banteng.jpg') }}" alt="Kerbau Liar" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Banteng Jawa</h4>
                    <p class="gallery-card-desc">Sering berkubang di rawa Baluran.</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/objek/ajak.jpg') }}" alt="Ajak" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Ajak</h4>
                    <p class="gallery-card-desc">Salah satu predator di Baluran.</p>
                </div>
            </div>
            <div class="gallery-card">
                <img src="{{ asset('images/objek/monyet.jpg') }}" alt="Monyet Ekor Panjang" class="gallery-card-img">
                <div class="gallery-card-body">
                    <h4 class="gallery-card-title">Monyet Ekor Panjang</h4>
                    <p class="gallery-card-desc">Dapat ditemui di sekitar hutan.</p>
                </div>
            </div>
        </div>
    </div>
</div>