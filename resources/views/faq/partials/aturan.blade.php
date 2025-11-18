<style>
    .hero-section {
        /* Mengatur tinggi agar tidak terlalu besar */
        padding: 3rem 0; 
        background: linear-gradient(rgba(11, 231, 73, 0.4), rgba(217, 255, 212, 0.4)), url('https://wisatabaluran.com/wp-content/uploads/2021/01/Pintu-Masuk-Baluran.jpg') no-repeat center center;
        background-size: cover;
        position: relative;
        overflow: hidden;
    }
    .hero-section .container {
        position: relative;
        z-index: 2;
    }
    .hero-section h1 {
        /* Mengubah warna teks menjadi lebih gelap agar kontras */
        color: #000000ff;
        text-shadow: 2px 2px 4px rgba(164, 225, 137, 0.6);
        /* Mengatur ukuran teks agar tidak terlalu besar */
        font-size: 2.5rem; 
        font-weight: bold;
    }
    .hero-section p {
        color: #000000ff;
        text-shadow: 1px 1px 2px rgba(152, 236, 239, 0.5);
        /* Mengatur ukuran teks agar tidak terlalu besar */
        font-size: 1rem; 
    }
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
    }
</style>

<div class="hero-section text-center">
    <div class="container">
        <h1 class="fw-bold">Aturan & Etika Kunjungan</h1>
        <p class="mt-2">Mari kita jaga keindahan dan kelestarian Taman Nasional Baluran bersama-sama.</p>
    </div>
</div>

<div class="container my-5">
    <div class="text-center mb-5">
        <p class="fs-5 text-muted">Taman Nasional Baluran adalah surga savana dan hutan yang menyimpan keanekaragaman hayati unik. Dengan mengikuti aturan dan etika di bawah ini, Anda turut serta dalam upaya konservasi dan menjaga kelestarian alam untuk generasi mendatang.</p>
        <a href="#" class="btn btn-outline-success btn-lg mt-4">
            <i class="bi bi-download me-2"></i> Unduh Panduan Lengkap
        </a>
    </div>
</div>
    <div class="row g-4">
        {{-- Card 1: Peraturan Wajib --}}
        <div class="col-lg-6">
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-success mb-4"><i class="bi bi-file-earmark-ruled-fill me-2"></i> Peraturan Wajib Kunjungan</h5>
                    <ul class="list-unstyled icon-list">
                        <li>
                            <i class="bi bi-clock-fill text-primary"></i> <strong class="text-primary">Jam Operasional:</strong> Kunjungan hanya diperbolehkan pada jam yang telah ditetapkan (08:00 - 16:00 WIB).
                        </li>
                        <li>
                            <i class="bi bi-ticket-fill text-primary"></i> <strong class="text-primary">Pembelian Tiket:</strong> Wajib membeli tiket masuk secara online atau di loket.
                        </li>
                        <li>
                            <i class="bi bi-person-badge-fill text-primary"></i> <strong class="text-primary">Identitas Diri:</strong> Siapkan KTP/SIM/Paspor untuk verifikasi di pintu masuk.
                        </li>
                        <li>
                            <i class="bi bi-signpost-fill text-primary"></i> <strong class="text-primary">Jalur Kunjungan:</strong> Tetap berada di jalur yang telah ditentukan. Dilarang keras keluar dari jalur.
                        </li>
                        <li>
                            <i class="bi bi-trash-fill text-primary"></i> <strong class="text-primary">Sampah:</strong> Bawa kembali semua sampah Anda. Terapkan prinsip "Leave No Trace".
                        </li>
                        <li>
                            <i class="bi bi-fire text-primary"></i> <strong class="text-primary">Merokok:</strong> Dilarang merokok di area non-smoking atau area yang berpotensi kebakaran.
                        </li>
                        <li>
                            <i class="bi bi-bandaid-fill text-primary"></i> <strong class="text-primary">Peralatan:</strong> Penggunaan drone atau kamera profesional memerlukan izin khusus.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Card 2: Etika Kunjungan --}}
        <div class="col-lg-6">
            <div class="card h-100 shadow-lg">
                <div class="card-body">
                    <h5 class="card-title text-info mb-4"><i class="bi bi-flower1 me-2"></i> Etika Berinteraksi dengan Alam</h5>
                    <ul class="list-unstyled icon-list">
                        <li>
                            <i class="bi bi-heart-fill text-danger"></i> <strong class="text-danger">Hormati Satwa Liar:</strong> Jaga jarak aman. Dilarang memberi makan, menyentuh, atau mengganggu satwa.
                        </li>
                        <li>
                            <i class="bi bi-volume-mute-fill text-warning"></i> <strong class="text-warning">Tidak Berisik:</strong> Kurangi kebisingan agar tidak mengganggu satwa dan pengunjung lain.
                        </li>
                        <li>
                            <i class="bi bi-x-circle-fill text-danger"></i> <strong class="text-danger">Vandalisme:</strong> Dilarang mencoret-coret pohon, bebatuan, atau fasilitas.
                        </li>
                        <li>
                            <i class="bi bi-bag-x-fill text-danger"></i> <strong class="text-danger">Jangan Mengambil Apapun:</strong> Dilarang mengambil spesimen flora, fauna, atau benda alam lainnya.
                        </li>
                        <li>
                            <i class="bi bi-people-fill text-info"></i> <strong class="text-info">Hormati Budaya:</strong> Berinteraksi dengan petugas dan masyarakat lokal dengan sopan.
                        </li>
                        <li>
                            <i class="bi bi-paw-fill text-danger"></i> <strong class="text-danger">Hewan Peliharaan:</strong> Dilarang membawa hewan peliharaan.
                        </li>
                        <li>
                            <i class="bi bi-telephone-fill text-secondary"></i> <strong class="text-secondary">Sinyal Ponsel:</strong> Sinyal mungkin tidak stabil di beberapa area.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5 p-4 rounded bg-light">
        <h4 class="fw-bold text-danger mb-3">Penting untuk Keselamatan Anda</h4>
        <p class="text-muted">Pastikan Anda siap secara fisik dan membawa perlengkapan yang memadai. Selalu perhatikan kondisi cuaca dan ketahui lokasi posko jaga serta nomor darurat yang tersedia.</p>
        <p class="text-muted">Nomor darurat: <strong>(0333) 234567</strong></p>
    </div>


<div class="text-center my-5">
    <p class="text-muted">Terima kasih telah menjadi pengunjung yang bijak. Kunjungan Anda sangat berarti bagi kelestarian Taman Nasional Baluran.</p>
</div>

