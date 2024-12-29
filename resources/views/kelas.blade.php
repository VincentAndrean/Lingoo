<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <!-- <a href="#" class="btn btn-primary ms-3">Masuk</a> -->
            </div>
        </div>
    </nav>
<body>
  
    <div class="class-section" style="padding: 75px 70px; background-color: #f8f9fa">
        <!-- Welcome Section -->
        <h2 class="mb-3">Selamat Datang, user</h2>
        <p class="mb-4">Berikut rekomendasi bahasa yang dapat kamu pelajari!</p>

        <!-- Search Bar -->
        <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Bahasa lain yang ingin kamu pelajari?">
            <button class="btn btn-primary">Cari</button>
        </div>

        <!-- Language Recommendations -->
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/logoing.jpg') }}" alt="Image" class="img-fluid mb-3">
                        <h5 class="card-title">Bahasa Inggris</h5>
                        <p class="card-text">Jangan lewatkan kesempatan belajar Bahasa Inggris secara intensif!</p>
                        <a href="createuser" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/mandarinnn.jpg') }}" alt="Image" class="img-fluid mb-3">
                        <h5 class="card-title">Bahasa Mandarin <span class="new-badge">NEW</span></h5>
                        <p class="card-text">Jangan sia-siakan kesempatan untuk mempelajari Bahasa Mandarin!</p>
                        <a href="createuser" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/logoing.jpg') }}" alt="Image" class="img-fluid mb-3">
                        <h5 class="card-title">Bahasa Indonesia</h5>
                        <p class="card-text">Coba belajar Bahasa Indonesia dengan lebih detail dan professional!</p>
                        <a href="createuser" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/jepang.jpg') }}" alt="Image" class="img-fluid mb-3">
                        <h5 class="card-title">Bahasa Jepang <span class="hot-badge">HOT</span></h5>
                        <p class="card-text">Jangan ragu untuk memulai perjalanan belajar Bahasa Jepang!</p>
                        <a href="createuser" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

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
</html>
