<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahasa Inggris - Lingo</title>
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
        body {
            font-family: Arial, sans-serif;
        }
        .class-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }
        .class-card:hover {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .class-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .class-card .card-body {
            padding: 15px;
            text-align: center;
        }
        .class-card .btn {
            background-color: #5a5af2;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }
        .class-card .btn:hover {
            background-color: #4848c2;
        }
        footer {
            background-color: #5a5af2;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
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
                <a href="profil" class="btn btn-primary ms-3">Profil</a>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="class-section" style="padding: 60px 70px; background-color: #f8f9fa">
        <h3 class="text-center mb-4">Bahasa Inggris</h3>

        <!-- Class Grid -->
        <div class="row">
            @php
                // Sample data
                $classes = [
                    ['title' => 'Belajar Nama Makanan', 'date' => '23 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food.jpg'],
                    ['title' => 'Belajar Grammar', 'date' => '25 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food2.WEBP'],
                    ['title' => 'Belajar Monument', 'date' => '25 Maret 2024', 'time' => '12:30 - 14:30', 'image' => 'food3.jpg'],
                    ['title' => 'Belajar Story Telling', 'date' => '26 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food4.jpg'],
                    ['title' => 'Belajar Public Speaking', 'date' => '27 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food5.jpg'],
                    ['title' => 'Belajar Nama Binatang', 'date' => '25 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food6.jpg'],
                    ['title' => 'Belajar Bagian Mesin', 'date' => '26 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food7.jpg'],
                    ['title' => 'Belajar Basic Vocabulary', 'date' => '27 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food8.jpg'],
                    ['title' => 'Belajar Pronunciation', 'date' => '26 Maret 2024', 'time' => '10:00 - 12:00', 'image' => 'food9.jpg']
                ];
            @endphp

            @foreach ($classes as $class)
                <div class="col-md-4 mb-4">
                    <div class="class-card">
                        <img src="{{ asset('images/' . $class['image']) }}" alt="{{ $class['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $class['title'] }}</h5>
                            <p class="card-text"><strong>{{ $class['date'] }}</strong><br>JAM: {{ $class['time'] }}</p>
                            <a href="deskripsiKelas" class="btn btn-primary">Daftar kelas ></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Footer Section -->
        <div class="text-center mt-4">
            <p>STAY TUNED FOR MORE SCHEDULE INFORMATION!</p>
        </div>
    </div>
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
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>