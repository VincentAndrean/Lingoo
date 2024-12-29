<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Lingo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .logo {
      font-weight: bold;
      color: white;
      background-color: #563d7c;
      padding: 5px 15px;
      border-radius: 5px;
    }

    .navbar-nav .nav-link {
      color: black !important;
    }

    .btn-login {
      background-color: #6A5ACD;
      color: white;
      font-weight: bold;
    }

    .btn-login:hover {
      background-color: #483D8B;
    }

    .about-section {
      background-color: #f8f9fa;
      padding: 50px 20px;
    }

    .history-section {
      background-color: #f8f9fa;
      padding: 50px 20px;
    }

    .about-title {
      font-size: 32px;
      font-weight: bold;
      color: black;
      margin-bottom: 20px;
    }

    .history-title {
      font-size: 32px;
      font-weight: bold;
      color: black;
      margin-bottom: 20px;
    }

    .about-content {
      font-size: 18px;
      color: #555;
      line-height: 1.8;
    }

    .history-content {
      font-size: 18px;
      color: #555;
      line-height: 1.8;
    }
  </style>
</head>

<body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand logo" href="#">LINGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kelas">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kami">Tentang Kami</a>
                    </li>
                </ul>
                <!-- <a href="masuk" class="btn btn-primary ms-3">Masuk</a> -->
            </div>
        </div>
    </nav>

  <!-- Tentang Section -->
  <section class="about-section">
    <div class="container">
      <h1 class="about-title">Tentang Lingo</h1>
      <p class="about-content">
        Lingo adalah sebuah platform belajar bahasa yang dirancang untuk memudahkan Anda dalam melakukan pemesanan kelas bahasa dengan cara yang mudah dan efektif. Dengan beragam fitur yang disesuaikan untuk berbagai tingkat kemampuan, Lingo menjadi teman setia Anda dalam perjalanan menuju keahlian bahasa yang lebih baik.
      </p>
      <p class="about-content">
        Mulailah perjalanan Anda menuju penguasaan bahasa yang lebih baik dengan Lingo. Jadilah bagian dari komunitas kami yang bersemangat dan rasakan perbedaannya. Segera pesan kelas onsite Anda hari ini dan temukan potensi Anda dalam bahasa!
      </p>
    </div>
  </section>

  <!-- Sejarah Section -->
  <section class="history-section">
    <div class="container">
      <h1 class="history-title">Sejarah Lingo</h1>
      <p class="history-content">
        Lingo lahir dari visi seorang mahasiswa bernama Reibardis yang memiliki hasrat mendalam untuk memfasilitasi pembelajaran bahasa yang menyenangkan dan mudah diakses untuk semua orang terutama yang ingin belajar bahasa. Dengan semangat ini, ia memulai perjalanan menuju pembuatan platform pendidikan bahasa yang inovatif.
      </p>
      <p class="history-content">
        Tak lama setelah peluncuran, Lingo mulai menarik perhatian media dan mendapat pujian luas dari para pengguna. Dengan strategi pemasaran yang cerdas dan umpan balik positif dari komunitas, situs ini mengalami pertumbuhan pesat dalam jumlah pengguna yang mendaftar dan mengakses kursus-kursus bahasa.
      </p>
    </div>
  </section>

  <footer class="bg-primary text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-4">
                <p class="mb-0">
                    Jelajahi keajaiban berkomunikasi melalui dunia bahasa dengan kami
                </p>
            </div>
            <!-- Middle Column -->
            <div class="col-md-4">
                <ul class="list-unstyled text-center">
                    <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Galeri</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Kelas</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
                </ul>
            </div>
            <!-- Right Column -->
            <div class="col-md-4">
                <h6 class="fw-bold">Contact information</h6>
                <ul class="list-unstyled">
                    <li>
                        <i class="bi bi-telephone-fill"></i> +34933478486
                    </li>
                    <li>
                        <i class="bi bi-envelope-fill"></i> Info@speakup.we
                    </li>
                    <li>
                        <i class="bi bi-geo-alt-fill"></i> Jakarta
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>