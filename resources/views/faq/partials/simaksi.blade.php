
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f7;
        }
        .hero-section {
            background-color: #207b3c;
            color: white;
            padding: 80px 20px;
            text-align: center;
            background-image: url('https://www.mytrip.co.id/images/uploads/08-08-19_17.19.184976.jpg'); /* Ganti dengan gambar Baluran yang relevan */
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }
        .hero-title {
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }
        .hero-text {
            font-size: 1.1rem;
            max-width: 800px;
            margin: auto;
        }
        .btn-simaksi {
            background-color: #ffc107;
            color: #207b3c;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        .btn-simaksi:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        .section-header h2 {
            font-weight: 700;
            color: #207b3c;
            font-size: 2rem;
            position: relative;
            display: inline-block;
        }
        .section-header h2::after {
            content: '';
            width: 80px;
            height: 4px;
            background-color: #207b3c;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .feature-card {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .feature-card .icon {
            font-size: 2.5rem;
            color: #207b3c;
            margin-bottom: 1rem;
        }
        .step-list {
            list-style: none;
            padding-left: 0;
            text-align: left;
        }
        .step-list li {
            margin-bottom: 1.5rem;
            padding-left: 3rem;
            position: relative;
        }
        .step-list li::before {
            content: attr(data-step);
            position: absolute;
            left: 0;
            top: -5px;
            width: 40px;
            height: 40px;
            background-color: #207b3c;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .download-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .download-item .file-info {
            display: flex;
            align-items: center;
        }
        .download-item .file-icon {
            font-size: 2rem;
            color: #dc3545; /* Merah untuk ikon PDF */
            margin-right: 15px;
        }
    </style>

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <h1 class="hero-title">SOP SIMAKSI</h1>
        <p class="hero-text">
            Surat Izin Masuk Kawasan Konservasi (SIMAKSI) adalah dokumen wajib untuk setiap kegiatan penelitian, dokumentasi komersial, atau aktivitas khusus lainnya di Taman Nasional Baluran.
        </p>
        <a href="#prosedur" class="btn btn-simaksi mt-4">Mulai Pengajuan SIMAKSI</a>
    </div>
</section>

{{-- Prosedur Section --}}
<section id="prosedur" class="container my-5">
    <div class="section-header">
        <h2>Prosedur Pengajuan</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="step-list">
                <li data-step="1">
                    <h4>Persyaratan Administrasi</h4>
                    <p>Siapkan semua dokumen yang diperlukan seperti KTP, surat permohonan resmi, proposal kegiatan, dan data pendukung lainnya sesuai dengan jenis aktivitas yang diajukan.</p>
                </li>
                <li data-step="2">
                    <h4>Proses Pengajuan Online</h4>
                    <p>Kirimkan permohonan Anda melalui email resmi Balai Taman Nasional Baluran atau melalui formulir online yang tersedia di website.</p>
                </li>
                <li data-step="3">
                    <h4>Verifikasi Dokumen</h4>
                    <p>Tim kami akan melakukan verifikasi dan validasi terhadap kelengkapan dokumen yang Anda kirimkan. Pastikan semua data yang diberikan adalah akurat.</p>
                </li>
                <li data-step="4">
                    <h4>Pembayaran PNBP</h4>
                    <p>Lakukan pembayaran sesuai dengan tarif Penerimaan Negara Bukan Pajak (PNBP) yang berlaku, dan kirimkan bukti pembayaran kepada kami.</p>
                </li>
                <li data-step="5">
                    <h4>Penerbitan SIMAKSI</h4>
                    <p>Setelah seluruh proses verifikasi dan pembayaran selesai, surat izin SIMAKSI akan diterbitkan dan dikirimkan kepada Anda melalui email.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-success fw-bold mb-4 text-center">Persyaratan Surat Izin Masuk Kawasan Konservasi (SIMAKSI)</h2>
            <p class="text-center text-muted mb-5">
                Dasar Hukum: Peraturan Direktur Jenderal PHKA Nomor: P.7/IV-Set/2011 tentang Tata Cara Masuk Kawasan Suaka Alam dan Kawasan Pelestarian Alam.
            </p>

            {{-- SIMAKSI untuk Kegiatan Umum --}}
            <div class="card mb-4 shadow-sm border-success">
                <div class="card-header bg-success text-white fw-bold h5">
                    1. SIMAKSI untuk Kegiatan Umum
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Jenis kegiatan ini meliputi kegiatan di dalam kawasan seperti (diksar/dikjut, pendakian massal, bersih gunung, berkemah, penanaman, dll).
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Dokumen Kelengkapan:</strong> Proposal kegiatan dan/atau surat pengantar resmi dari instansi terkait (kampus, kantor, organisasi/lembaga, sekolah) yang berisi:
                            <ul class="mt-2" style="list-style-type:circle;">
                                <li>Rencana kegiatan (rundown acara)</li>
                                <li>Waktu dan lokasi pelaksanaan</li>
                                <li>Perihal permohonan izin</li>
                                <li>Telah disetujui dan ditandatangani oleh dekan/dosen/kepala sekolah/ketua organisasi.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Administrasi:</strong> Fotokopi identitas (KTP/KTM/kartu pelajar) 1 lembar, materai 10.000 (2 lembar), dan nomor kontak yang dapat dihubungi.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Waktu Pengajuan:</strong> Paling lambat <strong>1 minggu</strong> sebelum pelaksanaan kegiatan.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Kepatuhan:</strong> Wajib mematuhi semua ketentuan dan tata tertib yang berlaku di Taman Nasional Baluran.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Koordinasi:</strong> Dalam pelaksanaan kegiatan, wajib berkoordinasi dengan petugas lapangan terkait.
                        </li>
                    </ul>
                </div>
            </div>

            {{-- SIMAKSI untuk Penelitian (TA/Skripsi/Tesis) --}}
            <div class="card mb-4 shadow-sm border-success">
                <div class="card-header bg-success text-white fw-bold h5">
                    2. SIMAKSI untuk Penelitian (Tugas Akhir/Skripsi/Tesis)
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Dokumen Kelengkapan:</strong> Proposal penelitian (Skripsi/Tesis/Tugas Akhir) yang berisi:
                            <ul class="mt-2" style="list-style-type:circle;">
                                <li>Latar belakang, rumusan masalah, dan tujuan penelitian.</li>
                                <li>Tempat dan waktu penelitian.</li>
                                <li>Surat pengantar permohonan izin dari kampus yang sudah disetujui dan ditandatangani dekan/dosen pembimbing.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Administrasi:</strong> Fotokopi identitas pribadi (KTP/KTM) 1 lembar, materai 10.000 (2 lembar), dan nomor kontak yang dapat dihubungi.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Masa Berlaku:</strong> Maksimal <strong>3 bulan</strong>. Perpanjangan dapat diajukan dengan membawa kembali persyaratan yang sama.
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Ketentuan:</strong>
                            <ul class="mt-2" style="list-style-type:circle;">
                                <li>Wajib mematuhi peraturan yang berlaku di Taman Nasional Baluran.</li>
                                <li>Tidak diperkenankan keluar dari lokasi atau objek penelitian yang telah ditentukan.</li>
                                <li>Dilarang mengganggu atau merusak vegetasi dan satwa.</li>
                                <li>Pihak Balai berhak mengawasi pelaksanaan penelitian.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- SIMAKSI untuk PKL/Magang/Internship --}}
            <div class="card mb-4 shadow-sm border-success">
                <div class="card-header bg-success text-white fw-bold h5">
                    3. SIMAKSI untuk Praktek Kerja Lapangan (PKL)/Magang
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Dokumen Kelengkapan:</strong> Proposal kegiatan PKL/magang/internship yang berisi:
                            <ul class="mt-2" style="list-style-type:circle;">
                                <li>Latar belakang, rumusan masalah, tujuan, dan rencana waktu magang.</li>
                                <li>Surat pengantar permohonan izin dari kampus yang sudah disetujui dan ditandatangani dekan/dosen pembimbing.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Administrasi:</strong>
                            <ul class="mt-2" style="list-style-type:circle;">
                                <li>Fotokopi identitas pribadi (KTP/KTM) 1 lembar, materai 10.000 (2 lembar), dan nomor kontak yang dapat dihubungi.</li>
                                <li>Jika berkelompok, daftar nama peserta wajib disertakan dalam proposal.</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Kepatuhan:</strong> Peserta wajib mematuhi segala ketentuan dan tata tertib yang berlaku di Taman Nasional Baluran.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Ketentuan Section --}}
<section id="ketentuan" class="bg-white py-5">
    <div class="container">
        <div class="section-header">
            <h2>Ketentuan dan Aturan</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="feature-card">
                    <div class="icon"><i class="fas fa-file-alt"></i></div>
                    <h4>Kewajiban Pemegang Izin</h4>
                    <p>Wajib mematuhi semua peraturan yang berlaku, tidak melakukan kegiatan di luar izin yang diberikan, dan menjaga kebersihan kawasan.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="feature-card">
                    <div class="icon"><i class="fas fa-bullhorn"></i></div>
                    <h4>Larangan Keras</h4>
                    <p>Dilarang merusak flora dan fauna, membawa senjata, membuat api, dan membuang sampah sembarangan di dalam kawasan Taman Nasional.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="feature-card">
                    <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
                    <h4>Sanksi Pelanggaran</h4>
                    <p>Setiap pelanggaran akan dikenakan sanksi tegas sesuai dengan hukum dan peraturan yang berlaku di Indonesia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Unduh Section --}}
<section id="unduh" class="container py-5">
    <div class="section-header">
        <h2>Unduh Dokumen</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="download-item">
                <div class="file-info">
                    <div class="file-icon"><i class="fas fa-file-pdf"></i></div>
                    <div>
                        <h6 class="mb-0">Formulir Permohonan Simaksi</h6>
                        <small class="text-muted">Ukuran: 1.2 MB</small>
                    </div>
                </div>
                <a href="#" class="btn btn-outline-success"><i class="fas fa-download me-2"></i> Unduh</a>
            </div>
            <div class="download-item">
                <div class="file-info">
                    <div class="file-icon"><i class="fas fa-file-pdf"></i></div>
                    <div>
                        <h6 class="mb-0">Panduan SOP Simaksi</h6>
                        <small class="text-muted">Ukuran: 850 KB</small>
                    </div>
                </div>
                <a href="#" class="btn btn-outline-success"><i class="fas fa-download me-2"></i> Unduh</a>
            </div>
        </div>
    </div>
</section>

{{-- Kontak Section --}}
<section id="kontak" class="bg-white py-5">
    <div class="container">
        <div class="section-header">
            <h2>Kontak Kami</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="text-center text-muted mb-4">
                    Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui kontak di bawah ini.
                </p>
                <ul class="list-unstyled text-center mb-0">
                    <li class="mb-2"><i class="fas fa-map-marker-alt text-success me-2"></i> Kantor Balai Taman Nasional Baluran, Situbondo, Jawa Timur</li>
                    <li class="mb-2"><i class="fas fa-envelope text-success me-2"></i> balurannationalpark@gmail.com</li>
                    <li class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> (0333) 234567</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
