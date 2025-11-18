<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontak - Taman Nasional Baluran</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: url('https://upload.wikimedia.org/wikipedia/commons/d/db/Savana_Bekol%2C_Baluran.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #064e3b;
    }
    .overlay {
      background-color: rgba(255, 255, 255, 0.92);
      min-height: 100vh;
      padding: 40px 20px;
    }
    .container {
      max-width: 1000px;
      margin: auto;
      background: white;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 4px 14px rgba(0,0,0,0.2);
    }
    h1 {
      text-align: center;
      font-size: 2.5rem;
      color: #15803d;
      margin-bottom: 20px;
    }
    .subtitle {
      text-align: center;
      margin-bottom: 40px;
      font-style: italic;
      color: #4b5563;
    }
    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
    }
    .col {
      flex: 1 1 45%;
    }
    label {
      display: block;
      margin-top: 20px;
      font-weight: bold;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }
    button {
      background-color: #15803d;
      color: white;
      padding: 12px 28px;
      border: none;
      border-radius: 8px;
      margin-top: 24px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #166534;
    }
    .icon {
      font-size: 48px;
      margin-bottom: 12px;
    }
    .map {
      margin-top: 40px;
    }
    iframe {
      width: 100%;
      height: 300px;
      border: none;
      border-radius: 12px;
    }
    .satwa {
      display: flex;
      gap: 20px;
      justify-content: center;
      margin: 30px 0;
    }
    .satwa img {
      width: 80px;
      height: auto;
      border-radius: 50%;
      border: 3px solid #15803d;
      background-color: white;
      padding: 4px;
    }

    @media (max-width: 768px) {
      .row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
    <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Balai Taman Nasional Baluran</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/kontak">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>

  <div class="overlay">
    <div class="container">
      <h1>Hubungi Kami</h1>
      <p class="subtitle">Taman Nasional Baluran - "Africa van Java"</p>

      <div class="satwa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Banteng_java.jpg/320px-Banteng_java.jpg" alt="Banteng Baluran" title="Banteng Jawa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Peacock_Plumage.jpg/320px-Peacock_Plumage.jpg" alt="Merak" title="Merak Hijau">
      </div>

      <div class="row">
        <!-- Info Kontak -->
        <div class="col">
          <h2>Informasi Kontak</h2>
          <p><strong>Alamat:</strong><br>
            Balai Taman Nasional Baluran<br>
            Sumberwaru, Banyuputih, Situbondo, Jawa Timur 68374</p>

          <p><strong>Email:</strong><br>
            <a href="mailto:btnbaluran@gmail.com">btnbaluran@gmail.com</a></p>

          <p><strong>Telepon:</strong><br>
            (0333) 461-957</p>

          <p><strong>Jam Operasional:</strong><br>
            Senin - Jumat, 08.00 - 16.00 WIB</p>
        </div>

        <!-- Form Kontak -->
        <div class="col">
          <h2>Formulir Pesan</h2>
          <form action="#" method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>

            <button type="submit">Kirim Pesan</button>
          </form>
        </div>
      </div>

      <!-- Google Maps -->
      <div class="map">
        <h2>Lokasi Kami</h2>
        <iframe 
          src="https://www.google.com/maps?q=Taman+Nasional+Baluran&output=embed"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
</body>
</html>
