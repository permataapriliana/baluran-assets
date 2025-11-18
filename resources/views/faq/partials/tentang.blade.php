<style>
    /* CSS untuk Kontainer & Judul */
    .faq-container-v2 {
        padding: 50px 0;
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
    .accordion-v2 .btn-link {
        color: #212529;
        font-weight: 700;
        text-decoration: none;
        width: 100%;
        text-align: left;
        padding: 22px 30px;
        display: flex;
        align-items: center;
    }
    .accordion-v2 .btn-link i {
        font-size: 1.5rem;
        color: #198754;
        margin-right: 20px;
    }
    .accordion-v2 .btn-link span {
        flex-grow: 1;
    }
    .accordion-v2 .btn-link .arrow-icon {
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }
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


        <div class="faq-header-v2">
            <h2>Pertanyaan Umum (FAQ)</h2>
            <p>Temukan jawaban untuk pertanyaan yang paling sering diajukan seputar kunjungan Anda ke Taman Nasional Baluran.</p>
        </div>
        <div class="accordion-v2" id="accordionExampleV2">

            <div class="card">
                <div class="card-header" id="headingOneV2">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOneV2" aria-expanded="true" aria-controls="collapseOneV2">
                        <i class="bi bi-question-circle-fill"></i>
                        <span>Apa itu Taman Nasional Baluran?</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseOneV2" class="collapse" aria-labelledby="headingOneV2" data-parent="#accordionExampleV2">
                    <div class="card-body">
                        Taman Nasional Baluran adalah kawasan konservasi alam di ujung timur Pulau Jawa yang dikenal sebagai "Africa van Java". Kawasan ini memiliki ekosistem unik berupa padang savana yang luas, hutan mangrove, dan pantai indah.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwoV2">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoV2" aria-expanded="false" aria-controls="collapseTwoV2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Di mana lokasi Taman Nasional Baluran?</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseTwoV2" class="collapse" aria-labelledby="headingTwoV2" data-parent="#accordionExampleV2">
                    <div class="card-body">
                        Taman Nasional Baluran terletak di Kecamatan Banyuputih, Kabupaten Situbondo, Jawa Timur. Lokasinya strategis di jalur utama Situbondo-Banyuwangi.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThreeV2">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThreeV2" aria-expanded="false" aria-controls="collapseThreeV2">
                        <i class="bi bi-clock-fill"></i>
                        <span>Kapan jam operasional Taman Nasional Baluran?</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseThreeV2" class="collapse" aria-labelledby="headingThreeV2" data-parent="#accordionExampleV2">
                    <div class="card-body">
                        Taman Nasional Baluran umumnya buka setiap hari mulai pukul 07.30 WIB hingga 16.00 WIB. Jam operasional dapat berubah sewaktu-waktu tergantung kebijakan pengelola atau kondisi cuaca.
                    </div>
                </div>
            </div>
 
            <div class="card">
                <div class="card-header" id="headingFourV2">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFourV2" aria-expanded="false" aria-controls="collapseFourV2">
                        <i class="bi bi-map-fill"></i>
                        <span>Destinasi wisata apa saja yang ada di dalam kawasan Baluran?</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseFourV2" class="collapse" aria-labelledby="headingFourV2" data-parent="#accordionExampleV2">
                    <div class="card-body">
                        Beberapa destinasi populer di Baluran antara lain:
                        <ul>
                            <li>**Savana Bekol:** Padang savana yang luas tempat satwa liar berkumpul.</li>
                            <li>**Pantai Bama:** Pantai pasir putih yang ideal untuk bersantai dan snorkeling.</li>
                            <li>**Menara Pandang:** Tempat terbaik untuk melihat panorama savana dari ketinggian.</li>
                            <li>**Hutan Mangrove:** Kawasan yang kaya akan ekosistem bakau.</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingFiveV2">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFiveV2" aria-expanded="false" aria-controls="collapseFiveV2">
                        <i class="bi bi-car-front-fill text-success"></i>
                        <span>Jenis kendaraan apa yang diperbolehkan masuk?</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseFiveV2" class="collapse" aria-labelledby="headingFiveV2" data-parent="#accordionExampleV2">
                    <div class="card-body">
                        Kendaraan roda dua dan roda empat pribadi diizinkan masuk ke kawasan utama. Namun, untuk menjelajahi area savana dan rute tertentu, disarankan menggunakan kendaraan sewaan seperti **trooper** yang disediakan oleh pengelola untuk keamanan dan kenyamanan.
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingSixV2">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixV2" aria-expanded="false" aria-controls="collapseSixV2">
                        <i class="bi bi-paw-fill"></i>
                        <span>Satwa apa saja yang dapat ditemui di Baluran?</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseSixV2" class="collapse" aria-labelledby="headingSixV2" data-parent="#accordionExampleV2">
                    <div class="card-body">
                        Baluran adalah rumah bagi berbagai satwa liar, termasuk rusa timor, banteng jawa, kerbau liar, ajak (anjing hutan), dan burung merak hijau. Anda bisa menjumpai mereka saat berkunjung ke area savana.
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header" id="headingSevenV2">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSevenV2" aria-expanded="false" aria-controls="collapseSevenV2">
                        <i class="bi bi-list-task"></i>
                        <span>Bagaimana tata cara berkunjung ke Taman Nasional Baluran?</span>
                        <i class="bi bi-chevron-down arrow-icon"></i>
                    </button>
                </div>
                <div id="collapseSevenV2" class="collapse" aria-labelledby="headingSevenV2" data-parent="#accordionExampleV2">
                    <div class="card-body">
                        <p>Berikut langkah-langkah umum untuk berkunjung:</p>
                        <ol>
                            <li>Lakukan pendaftaran dan bayar tiket masuk di pintu gerbang.</li>
                            <li>Ikuti semua petunjuk dan peraturan yang berlaku dari petugas.</li>
                            <li>Selalu jaga kebersihan dan tidak merusak alam.</li>
                            <li>Dilarang memberi makan satwa liar demi menjaga perilaku alami mereka.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var accordion = document.getElementById('accordionExampleV2');
        if (accordion) {
            accordion.addEventListener('click', function (event) {
                var target = event.target.closest('.btn-link');
                if (target) {
                    var allButtons = accordion.querySelectorAll('.btn-link');
                    var targetId = target.getAttribute('data-target');
                    var targetCollapse = document.querySelector(targetId);

                    allButtons.forEach(btn => {
                        var collapseId = btn.getAttribute('data-target');
                        var collapseElement = document.querySelector(collapseId);
                        if (btn !== target) {
                            btn.classList.add('collapsed');
                            if (collapseElement) {
                                collapseElement.classList.remove('show');
                            }
                        }
                    });

                    target.classList.toggle('collapsed');
                    if (targetCollapse) {
                        targetCollapse.classList.toggle('show');
                    }
                }
            });
        }
    });
</script>