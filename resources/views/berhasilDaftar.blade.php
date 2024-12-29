<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Nama Makanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .logo {
            font-weight: bold;
            color: white;
            background-color: #563d7c;
            padding: 5px 15px;
            border-radius: 5px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .main-content {
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center; /* Memusatkan secara horizontal */
        }
        .banner {
            width: 60%;
            height: auto;
            border-radius: 10px;
        }
        .tabs {
            display: flex;
            margin-top: 20px;
        }
        .tabs .tab {
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            background-color: #0033cc;
            margin-right: 10px;
            border-radius: 5px;
        }
        .tabs .tab.active {
            background-color: #0055ff;
        }
        .description {
            margin-top: 20px;
            max-width: 800px;
            text-align: left;
        }
        .confirmation {
            margin-top: 20px;
            max-width: 800px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #0033cc;
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
                <a href="profil" class="btn btn-primary ms-3">Profil</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Ganti konten berikut ini sesuai kebutuhan -->
        <h2>Belajar Nama Makanan</h2>
        <img src="{{ asset('images/food.jpg') }}" alt="Anime Class" class="banner">
        <div class="tabs">
            <a  class="tab active">Deskripsi</a>
            <a class="tab">Jadwal</a>
        </div>
        <section class="description">
            <p>Kelas Bahasa Jepang ini dirancang khusus untuk para pecinta anime yang ingin mempelajari dasar-dasar bahasa Jepang melalui anime...</p>
            <ul>
                <li>Kata umum dalam anime, seperti sapaan, ungkapan emosi, dll.</li>
                <li>Frasa penting dalam situasi sekolah, rumah, dll.</li>
                <li>Karakteristik budaya Jepang yang sering muncul dalam anime.</li>
            </ul>
        </section>
        <!-- Gunakan ini jika sedang di halaman konfirmasi -->
        <!--
        <section class="confirmation">
            ANDA TELAH MELAKUKAN PENDAFTARAN, JANGAN LUPA HADIR DI KELAS!
        </section>
        -->
    </main>

    <!-- Footer -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>