<!-- Start Footer -->
<style>
    .footer {
        background-color: #333;
        color: white;
        padding: 40px 0;
        margin-top: 40px;
    }

    .footer-content {
        display: flex;
        justify-content: space-around;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
    }

    .footer-section {
        flex: 1;
        min-width: 250px;
        margin: 15px;
    }

    .footer-section h3 {
        font-size: 1.1em;
        margin-bottom: 15px;
        color: #eee;
    }

    .footer-section p,
    .footer-section ul {
        font-size: 0.9em;
        line-height: 1.6;
        color: #bbb;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footer-section ul li img {
        height: 15px;
        width: auto;
        filter: invert(1);
    }

    .footer-section ul li a {
        color: #bbb;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-section ul li a:hover {
        color: white;
    }

    .whatsapp-button {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
        text-decoration: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        z-index: 1000;
    }

    .whatsapp-button:hover {
        transform: scale(1.1);
    }

    .footer-bottom {
        text-align: center;
        margin-top: 30px;
        font-size: 0.9em;
        color: #aaa;
    }
</style>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>@lang('messages.Balai Taman Nasional Baluran')</h3>
            <p>
                @lang('messages.Taman Nasional adalah kawasan pelestarian alam yang dikelola secara aktif dan dimanfaatkan
                untuk tujuan penelitian, ilmu pengetahuan, pendidikan, menunjang budidaya, pariwisata, dan rekreasi.')
            </p>
        </div>

        <div class="footer-section">
            <h3>@lang('messages.Lokasi dan Kontak')</h3>
            <ul>
                <li>Jl. Raya Banyuwangi - Situbondo Km. 35, Wonorejo, Situbondo, Jawa Timur</li>
                <li><img src="{{ asset('images/email.png') }}" alt="Email"> balurannationalpark@gmail.com</li>
                <li><img src="{{ asset('images/facebook.png') }}" alt="Tiktok"> @tamannasionalbaluran</li>
                <li><img src="{{ asset('images/instagram.png') }}" alt="Instagram"> @btn_baluran</li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Link Terkait</h3>
            <ul>
                <li><a href="https://kehutanan.go.id/" target="_blank">Kementerian Kehutanan</a></li>
                <li><a href="https://ksdae.menlhk.go.id/" target="_blank">Ditjen KSDAE</a></li>
                <li><a href="https://ppid.bps.go.id/" target="_blank">PPID</a></li>
                <li><a href="https://ropeg.menlhk.go.id/" target="_blank">Biro Kepegawaian</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        &copy; {{ date('Y') }} Taman Nasional Baluran. All rights reserved.
    </div>
</footer>

<!-- Tombol WhatsApp -->
<a href="https://wa.me/6285319389646" class="whatsapp-button" target="_blank">
    <img src="{{ asset('images/WhatsApp.png') }}" alt="WhatsApp" style="width: 30px;">
</a>
