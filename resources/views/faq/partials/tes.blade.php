<div class="faq-container-v2">
    <style>
        /* CSS untuk Kontainer & Judul */
        .faq-container-v2 {
            padding: 50px 0;
            /* Pastikan kontainer ini berada dalam div row/col Bootstrap yang sesuai */
            background: linear-gradient(180deg, #eaf4e6 0%, #ffffff 100%);
        }
        .faq-header-v2 {
            text-align: center;
            margin-bottom: 40px;
        }
        .faq-header-v2 h2 {
            font-weight: 500;
            color: #0f5132;
            font-size: 1.9rem;
        }
        .faq-header-v2 p {
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        /* CSS untuk Item Accordion */
        .accordion-v2 .card {
            border: none;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }
        .accordion-v2 .card:hover {
            transform: translateY(-5px);
        }
        .accordion-v2 .card-header {
            background-color: #ffffff;
            border-bottom: none;
            padding: 0;
        }
        /* Menggunakan sintaks Bootstrap 4/5 yang benar untuk button accordion */
        .accordion-v2 .btn-link { 
            color: #212529;
            font-weight: 700;
            text-decoration: none;
            width: 100%;
            text-align: left;
            padding: 22px 30px;
            display: flex;
            align-items: center;
            /* Menghilangkan fokus outline bawaan yang kadang mengganggu */
            box-shadow: none !important;
        }
        .accordion-v2 .btn-link i:first-child { /* Ikon pertanyaan */
            font-size: 1.5rem;
            color: #198754;
            margin-right: 20px;
        }
        .accordion-v2 .btn-link span {
            flex-grow: 1;
        }
        .accordion-v2 .btn-link .arrow-icon { /* Ikon panah */
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }
        /* Rotasi panah (perhatikan bahwa ini mungkin dihandle oleh Bootstrap JS, tapi ini untuk memastikan konsistensi dengan CSS asli Anda) */
        .accordion-v2 .btn-link.collapsed .arrow-icon {
            transform: rotate(0deg);
        }
        .accordion-v2 .btn-link:not(.collapsed) .arrow-icon {
            transform: rotate(180deg);
        }
        .accordion-v2 .card-body {
            padding: 25px 30px;
            color: #495057;
            line-height: 1.7;
            border-top: 1px solid #e9ecef;
        }
    </style>

    {{-- Struktur HTML/Blade dimulai di sini --}}
    <div class="container"> {{-- Tambahkan container Bootstrap untuk penataan yang lebih baik --}}
        <div class="faq-header-v2">
            <h2>{{ __('messages.Pertanyaan Umum (FAQ)') }}</h2>
            <p>{{ __('messages.Temukan jawaban untuk pertanyaan yang paling sering diajukan seputar kunjungan Anda ke Taman Nasional Baluran.') }}</p>
        </div>
        
        <div class="accordion-v2" id="accordionExampleV2">

            {{-- ITEM 1: Apa itu Baluran? --}}
            <div class="card">
                <div class="card-header" id="headingOneV2">
                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneV2" aria-expanded="true" aria-controls="collapseOneV2">
                        <i class="bi bi-question-circle-fill"></i>
                        <span>{{ __('messages.Apa itu Taman Nasional Baluran?') }}</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseOneV2" class="collapse" aria-labelledby="headingOneV2" data-bs-parent="#accordionExampleV2">
                    <div class="card-body">
                        {{ __('messages.Taman Nasional Baluran adalah kawasan konservasi alam di ujung timur Pulau Jawa yang dikenal sebagai "Africa van Java". Kawasan ini memiliki ekosistem unik berupa padang savana yang luas, hutan mangrove, dan pantai indah. Taman ini menjadi habitat bagi berbagai satwa liar seperti banteng, rusa, kerbau liar, dan berbagai jenis burung. Selain itu, Baluran juga menawarkan pengalaman wisata alam') }}
                    </div>
                </div>
            </div>

            {{-- ITEM 2: Lokasi Baluran? --}}
            <div class="card">
                <div class="card-header" id="headingTwoV2">
                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoV2" aria-expanded="false" aria-controls="collapseTwoV2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>{{ __('messages.Di mana lokasi Taman Nasional Baluran?') }}</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseTwoV2" class="collapse" aria-labelledby="headingTwoV2" data-bs-parent="#accordionExampleV2">
                    <div class="card-body">
                        {{ __('messages.Taman Nasional Baluran terletak di Kecamatan Banyuputih, Kabupaten Situbondo, Jawa Timur. Lokasinya strategis di jalur utama Situbondo-Banyuwangi. Dari Situbondo, jaraknya sekitar 60 km ke arah timur, sementara dari Banyuwangi sekitar 70 km ke arah barat. Akses menuju taman ini dapat ditempuh dengan kendaraan pribadi atau transportasi umum yang melayani rute tersebut.') }}
                    </div>
                </div>
            </div>

            {{-- ITEM 3: Jam Operasional? --}}
            <div class="card">
                <div class="card-header" id="headingThreeV2">
                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeV2" aria-expanded="false" aria-controls="collapseThreeV2">
                        <i class="bi bi-clock-fill"></i>
                        <span>{{ __('messages.Kapan jam operasional Taman Nasional Baluran?') }}</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseThreeV2" class="collapse" aria-labelledby="headingThreeV2" data-bs-parent="#accordionExampleV2">
                    <div class="card-body">
                        {{ __('messages.Taman Nasional Baluran umumnya buka setiap hari mulai pukul 07.30 WIB hingga 16.00 WIB. Jam operasional dapat berubah sewaktu-waktu tergantung kebijakan pengelola atau kondisi cuaca. Disarankan untuk memeriksa informasi terbaru sebelum berkunjung.') }}
                    </div>
                </div>
            </div>
    
            {{-- ITEM 4: Destinasi Wisata? --}}
            <div class="card">
                <div class="card-header" id="headingFourV2">
                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourV2" aria-expanded="false" aria-controls="collapseFourV2">
                        <i class="bi bi-map-fill"></i>
                        <span>{{ __('messages.Destinasi wisata apa saja yang ada di dalam kawasan Baluran?') }}</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseFourV2" class="collapse" aria-labelledby="headingFourV2" data-bs-parent="#accordionExampleV2">
                    <div class="card-body">
                        {{ __('messages.Beberapa destinasi populer di Baluran antara lain:') }}
                        <ul>
                            <li>{{ __('messages.**Savana Bekol:** Padang savana yang luas tempat satwa liar berkumpul.') }}</li>
                            <li>{{ __('messages.**Pantai Bama:** Pantai pasir putih yang ideal untuk bersantai dan snorkeling.') }}</li>
                            <li>{{ __('messages.**Menara Pandang:** Tempat terbaik untuk melihat panorama savana dari ketinggian.') }}</li>
                            <li>{{ __('messages.**Hutan Mangrove:** Kawasan yang kaya akan ekosistem bakau.') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            {{-- ITEM 5: Jenis Kendaraan? --}}
            <div class="card">
                <div class="card-header" id="headingFiveV2">
                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveV2" aria-expanded="false" aria-controls="collapseFiveV2">
                        <i class="bi bi-car-front-fill text-success"></i>
                        <span>{{ __('messages.Jenis kendaraan apa yang diperbolehkan masuk?') }}</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseFiveV2" class="collapse" aria-labelledby="headingFiveV2" data-bs-parent="#accordionExampleV2">
                    <div class="card-body">
                        {{ __('messages.Kendaraan roda dua dan roda empat pribadi diizinkan masuk ke kawasan utama. Namun, untuk menjelajahi area savana dan rute tertentu, disarankan menggunakan kendaraan sewaan seperti **trooper** yang disediakan oleh pengelola untuk keamanan dan kenyamanan.') }}
                    </div>
                </div>
            </div>
            
            {{-- ITEM 6: Satwa Liar? --}}
            <div class="card">
                <div class="card-header" id="headingSixV2">
                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixV2" aria-expanded="false" aria-controls="collapseSixV2">
                        <i class="bi bi-paw-fill"></i>
                        <span>{{ __('messages.Satwa apa saja yang dapat ditemui di Baluran?') }}</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseSixV2" class="collapse" aria-labelledby="headingSixV2" data-bs-parent="#accordionExampleV2">
                    <div class="card-body">
                        {{ __('messages.Baluran adalah rumah bagi berbagai satwa liar, termasuk rusa timor, banteng jawa, kerbau liar, ajak (anjing hutan), dan burung merak hijau. Anda bisa menjumpai mereka saat berkunjung ke area savana. Selain itu, taman ini juga menjadi habitat bagi berbagai jenis burung migran dan endemik yang menarik bagi para pengamat burung.') }}
                    </div>
                </div>
            </div>
            
            {{-- ITEM 7: Tata Cara Berkunjung? --}}
            <div class="card">
                <div class="card-header" id="headingSevenV2">
                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSevenV2" aria-expanded="false" aria-controls="collapseSevenV2">
                        <i class="bi bi-list-task"></i>
                        <span>{{ __('messages.Bagaimana tata cara berkunjung ke Taman Nasional Baluran?') }}</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseSevenV2" class="collapse" aria-labelledby="headingSevenV2" data-bs-parent="#accordionExampleV2">
                    <div class="card-body">
                        <p>{{ __('messages.Berikut langkah-langkah umum untuk berkunjung:') }}</p>
                        <ol>
                            <li>{{ __('messages.Lakukan pendaftaran dan bayar tiket masuk di pintu gerbang.') }}</li>
                            <li>{{ __('messages.Ikuti semua petunjuk dan peraturan yang berlaku dari petugas.') }}</li>
                            <li>{{ __('messages.Selalu jaga kebersihan dan tidak merusak alam.') }}</li>
                            <li>{{ __('messages.Dilarang memberi makan satwa liar demi menjaga perilaku alami mereka.') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Skrip JavaScript untuk Fungsionalitas Accordion Manual --}}
{{-- Catatan: Jika Anda menggunakan Bootstrap JS (bootstrap.bundle.min.js), Anda mungkin tidak memerlukan skrip ini. --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mengubah dari data-toggle ke data-bs-toggle (jika menggunakan Bootstrap 5)
        // dan memastikan skrip manual bekerja untuk kompatibilitas dengan kode asli Anda.
        
        var accordion = document.getElementById('accordionExampleV2');
        if (accordion) {
            accordion.addEventListener('click', function (event) {
                var target = event.target.closest('.btn-link');
                if (target) {
                    // Mencegah tindakan default jika data-toggle/data-bs-toggle tidak bekerja
                    // event.preventDefault(); 
                    
                    var targetId = target.getAttribute('data-bs-target') || target.getAttribute('data-target'); // Mendukung data-bs-target atau data-target
                    var targetCollapse = document.querySelector(targetId);

                    // Logika untuk menutup semua item lain (Collapse/Accordion)
                    var allButtons = accordion.querySelectorAll('.btn-link');
                    allButtons.forEach(btn => {
                        var collapseId = btn.getAttribute('data-bs-target') || btn.getAttribute('data-target');
                        var collapseElement = document.querySelector(collapseId);
                        
                        // Tutup item lain jika sedang terbuka dan bukan item yang diklik
                        if (btn !== target && collapseElement && collapseElement.classList.contains('show')) {
                            btn.classList.add('collapsed');
                            collapseElement.classList.remove('show');
                        }
                    });

                    // Logika untuk membuka/menutup item yang diklik
                    target.classList.toggle('collapsed');
                    if (targetCollapse) {
                        targetCollapse.classList.toggle('show');
                    }
                }
            });
        }
    });
</script>