<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kelas - Belajar Nama Makanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .logo {
            font-weight: bold;
            color: white;
            background-color: #563d7c;
            padding: 5px 15px;
            border-radius: 5px;
        }
        .main-content {
            background-color: #f8f9fa;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
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
        .schedule {
            margin-top: 20px;
            max-width: 800px;
            text-align: left;
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
        <h2>Belajar Nama Makanan</h2>
        <img src="{{ asset('images/food.jpg') }}" alt="Anime Class" class="banner">
        <div class="tabs">
            <a  class="tab">Deskripsi</a>
            <a  class="tab active">Jadwal</a>
        </div>
        <section class="schedule">
            <p>Berikut adalah jadwal kelas "Belajar Nama Makanan":</p>
            <ul>
                <li><strong>Hari:</strong> Senin dan Kamis</li>
                <li><strong>Waktu:</strong> 18:00 - 20:00 WIB</li>
                <li><strong>Lokasi:</strong> Zoom Online Meeting</li>
                <li><strong>Grup Whatsapp</strong> <a href="https://chat.whatsapp.com/Crw4njdwv8X3MU2CNMlepK" target="_blank">Klik di sini</a></li>
            </ul>
        </section>
        <a href="berhasilDaftar" class="btn btn-primary btn-register">Daftar Kelas</a>
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p class="mb-0">Jelajahi keajaiban berkomunikasi melalui dunia bahasa dengan kami.</p>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled text-center">
                        <li><a href="beranda" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="galeri" class="text-white text-decoration-none">Galeri</a></li>
                        <li><a href="kelas" class="text-white text-decoration-none">Kelas</a></li>
                        <li><a href="tentang-kami" class="text-white text-decoration-none">Tentang Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold">Contact information</h6>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-telephone-fill"></i> +34933478486</li>
                        <li><i class="bi bi-envelope-fill"></i> Info@speakup.we</li>
                        <li><i class="bi bi-geo-alt-fill"></i> Jakarta</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>