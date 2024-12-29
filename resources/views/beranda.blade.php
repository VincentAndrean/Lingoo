<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingo - Platform Pendidikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-color: #f8f9fa;
            padding: 100px 0;
        }
        .logo {
            font-weight: bold;
            color: white;
            background-color: #563d7c;
            padding: 5px 15px;
            border-radius: 5px;
        }
        .text-highlight {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .main-text {
            color: #333;
        }
        .container-my-5{
            background-color: #f8f9fa;
            padding: 90px 50px 100px;
        }
        .py-5-bg-light{
            background-color: #f8f9fa;
            padding:0px 0px 0px;
        }
    </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand logo" href="beranda">LINGO</a>
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

        

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-md-6 order-2 order-md-1">
                        <h1 class="text-highlight">Tingkatkan Pengetahuan, Bangun Masa Depan: Belajarlah Bersama Kami!</h1>
                        <p class="main-text mt-4">
                            Platform pendidikan gratis kami memungkinkan Anda mengikuti kelas onsite tanpa biaya. Dapatkan akses langsung ke beragam kursus bahasa berkualitas, fleksibel sesuai jadwal Anda. Bergabunglah sekarang untuk mulai perjalanan pendidikan Anda!

                        </p>
                    </div>
                    <!-- Right Content -->
                    <div class="col-md-6 order-1 order-md-2 text-center">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/home1.jpg') }}" alt="Gambar 1" class="img-fluid rounded me-3"> 
                            <img src="{{ asset('images/home.jpg') }}" alt="Gambar 2" class="img-fluid rounded"> 
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- <div class="container">
                <h1>

                </h1>
                <hr>
                <p></p>
            </div> -->


        

    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 

    <div class="container-my-5">
        <div class="text-center">
            <h2 class="mb-3">KELAS MASTER MANDARIN</h2>
            <p class="text-muted">11/03/2022</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/porto1.jpg') }}" alt="Kelas Mandarin" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h5 class="mb-3">Mengenal Bahasa Mandarin dari Lagu</h5>
                <p class="main-text mt-4"> 
                    Mereka akan merasakan keajaiban dalam menghubungkan lirik lagu dengan kosakata sehari-hari, sambil menikmati melodi yang memesona. Melalui berbagai aktivitas kreatif, peserta akan mengasah kemampuan mendengar, berbicara, dan memahami bahasa Mandarin dengan lebih dalam.
                </p>
                <p class="main-text mt-4">>
                    Dengan dukungan penuh dari instruktur yang berpengalaman, peserta akan merasa termotivasi untuk mengeksplorasi dunia bahasa dan musik Tionghoa dengan lebih dalam.
                </p>
            </div>
        </div>
    </div>

    <!-- Tambahkan setelah hero section -->
    <section class="py-5-bg-light">
            <div class="container text-center">
                <h2 class="mb-4">Tujuan Kami</h2>
                <div class="row align-items-center">
                    <!-- Visi -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('images/visi.png') }}" alt="Visi Icon" class="mb-3"> 
                        <h4 class="text-primary">Visi</h4>
                        <p class="text-muted">
                            Menjadi platform pendidikan inovatif untuk memberdayakan pembelajaran bahasa yang baik dan mudah dimengerti.
                        </p>
                    </div>
                    <!-- Separator -->
                    <div class="col-md-4">
                        <hr class="d-md-none my-4">
                    </div>
                    <!-- Misi -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('images/misiii (1).png') }}" alt="Misi Icon" class="mb-3">
                        <h4 class="text-primary">Misi</h4>
                        <p class="text-muted">
                            Fokus pada peningkatan kualitas pembelajaran dan pengajaran bahasa di semua tingkat pendidikan, mulai dari taman kanak-kanak hingga pendidikan tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        </section>

    <div class="container-my-5" style="padding: 0px 0px 100px">
    <div class="text-center" style="padding: 0px 0px 20px">
        <h2 class="mb-3">HEADS OF LINGOO</h2>
    </div>
    <div class="row justify-content-center text-center">
        <!-- CEO -->
        <div class="col-md-3 text-center">
            <img src="{{ asset('images/ceo2.jpg') }}" alt="CEO Image" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
            <p class="mt-3">CEO LINGOO</p>
        </div>
        <!-- Administrator -->
        <div class="col-md-3 text-center">
            <img src="{{ asset('images/fotodiri.jpeg') }}" alt="Administrator Image" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
            <p class="mt-3">LINGOO ADMINISTRATOR</p>
        </div>
        <!-- Person in Charge -->
        <div class="col-md-3 text-center">
            <img src="{{ asset('images/person_in_charge.jpg') }}" alt="Person in Charge Image" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
            <p class="mt-3">PERSON IN CHARGE</p>
        </div>
        <!-- Developer -->
        <div class="col-md-3 text-center">
            <img src="{{ asset('images/developer3.jpg') }}" alt="Developer Image" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
            <p class="mt-3">LINGOO DEVELOPER</p>
        </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>


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
</html>