<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Lingo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: 50px auto;
        }
        .profile-section {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .profile-section img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
        }
        .stats-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        .stat-box {
            background-color: #eef1ff;
            border: 2px solid #5a5af2;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
        .stat-box .percentage {
            font-size: 32px;
            font-weight: bold;
            color: #5a5af2;
        }
        .stat-box p {
            margin: 10px 0;
        }
        .upcoming-class {
            margin-top: 40px;
        }
        .class-card {
        display: flex;
        gap: 15px;
        justify-content: flex-start;
        flex-wrap: wrap;
    }
    .class-card .card {
        flex: 0 0 200px; 
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .class-card img {
        width: 100%;
        height: 100px; 
        object-fit: cover;
    }
    .class-card .card-body {
        padding: 10px; 
    }
    .class-card .card-body h5 {
        font-size: 16px; 
    }
    .class-card .card-body p {
        font-size: 14px; 
        margin: 5px 0;
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
                        <a class="nav-link" href="berandaAfter">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeriAft">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kelasAft">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang-kamiAft">Tentang Kami</a>
                    </li>
                </ul>
                <a href="masuk" class="btn btn-primary ms-3">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- Dashboard Section -->
    <div class="container dashboard-container">
        <div class="profile-section">
            <img src="{{ asset('images/fotodiri.jpeg') }}" alt="Profile Picture">
            <div>
                <h4>Hi Ariel, Good Afternoon!</h4>
                <p>Jangan lupa 2 kelas yang kamu ambil ya!</p>
            </div>
        </div>

        <div class="stats-container">
            <div class="stat-box">
                <div class="percentage">32%</div>
                <p>Bahasa Inggris 🇺🇸</p>
                <small>Jumlah Kelas: 17</small>
            </div>
            <div class="stat-box">
                <div class="percentage">68%</div>
                <p>Bahasa Indonesia 🇮🇩</p>
                <small>Jumlah Kelas: 29</small>
            </div>
            <div class="stat-box">
                <div class="percentage">39%</div>
                <p>Bahasa Mandarin 🇨🇳</p>
                <small>Jumlah Kelas: 18</small>
            </div>
            <div class="stat-box">
                <div class="percentage">18%</div>
                <p>Bahasa Jepang 🇯🇵</p>
                <small>Jumlah Kelas: 7</small>
            </div>
        </div>

        <div class="upcoming-class">
            <h4>UPCOMING CLASS</h4>
            <div class="class-card">
                <div class="card">
                    <img src="{{ asset('images/food3.jpg') }}" alt="Belajar Anime">
                    <div class="card-body">
                        <h5>Belajar Anime</h5>
                        <p>27 Maret 2024</p>
                        <p>Jam: 10.00 - 12.00</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('images/food8.jpg') }}" alt="Belajar Teks Eksplanasi">
                    <div class="card-body">
                        <h5>Belajar Teks Eksplanasi</h5>
                        <p>26 Maret 2024</p>
                        <p>Jam: 10.00 - 12.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p class="mb-0">
                        Jelajahi keajaiban berkomunikasi melalui dunia bahasa dengan kami
                    </p>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled text-center">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Galeri</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Kelas</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>