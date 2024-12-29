<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lingo Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
     .logo {
            font-weight: bold;
            color: white;
            background-color: #563d7c;
            padding: 5px 15px;
            border-radius: 5px;
        }
    .portfolio-title {
      text-align: center;
      margin: 40px 0;
      font-size: 36px;
      font-weight: bold;
    }

    .portfolio-item {
      margin-bottom: 50px;
      padding-bottom: 20px;
    }

    .portfolio-image img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .portfolio-desc {
      margin-top: 15px;
    }

    .portfolio-item .portfolio-desc {
        min-height: 150px; 
    }

    .portfolio-section {
        background-color: #f8f9fa; 
        padding: 50px 0;
    }


    .navbar-brand {
      font-weight: bold;
      color: white !important;
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
  </style>
</head>

<body>
  <!-- Header -->
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

  <!-- Portfolio Section -->
  <div class="portfolio-section">
    <div class="container portfolio-container">
        <div class="portfolio-title">PORTOFOLIO</div>
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <div class="portfolio-image">
                    <img src="{{ asset('images/porto1.jpg') }}" alt="Petualangan Bahasa">
                </div>
                <div class="portfolio-desc">
                    <h5>Petualangan Bahasa Indonesia: Bergurau dengan Pantun Jenaka</h5>
                    <p>20/01/2022</p>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="portfolio-image">
                    <img src="{{ asset('images/porto2.jpg') }}" alt="Kelas Master Mandarin">
                </div>
                <div class="portfolio-desc">
                    <h5>Kelas Master Mandarin: Mengenal Bahasa Mandarin dari Lagu</h5>
                    <p>11/03/2022</p>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="portfolio-image">
                    <img src="{{ asset('images/foto3.jpeg') }}" alt="Nurtures Nihongo">
                </div>
                <div class="portfolio-desc">
                    <h5>Nurtures Nihongo: Mengenal Kosa Kata Bahasa Jepang</h5>
                    <p>15/06/2023</p>
                </div>
            </div>
            <div class="col-md-6 portfolio-item">
                <div class="portfolio-image">
                    <img src="{{ asset('images/porto4.jpg') }}" alt="Percakapan Kreatif">
                </div>
                <div class="portfolio-desc">
                    <h5>Percakapan Kreatif: Meningkatkan Kemahiran Bahasa Inggris Melalui Diskusi Interaktif</h5>
                    <p>07/05/2023</p>
                </div>
            </div>
        </div>
    </div>
</div>



  <!-- Footer Section -->
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