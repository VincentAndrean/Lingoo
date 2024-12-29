<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - Lingo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        }
        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }
        .profile-picture {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            /* border: 5px solid #5a5af2; */
        }
        .edit-icon {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background-color: #5a5af2;
            color: white;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }
        .edit-icon:hover {
            background-color: #4848c2;
        }
        .profile-info {
            text-align: left;
            margin-top: 20px;
        }
        .profile-info table {
            width: 100%;
        }
        .profile-info td {
            padding: 10px;
            vertical-align: top;
        }
        footer {
            background-color: #5a5af2;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 50px;
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
                    <li class="nav-item"><a class="nav-link text-danger" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
   
    <!-- Profile Section -->
    <div class="container profile-container">
        <h3>Profil Saya</h3>
        <p><small><a href="#">Profil > Profil Saya</a></small></p>
        
        <div class="profile-picture">
            <img src="{{ asset('images/fotodiri.jpeg') }}" alt="Profile Picture">
            <span class="edit-icon"><i class="bi bi-pencil"></i></span>
        </div>

        <div class="profile-info">
            <table class="table table-borderless">
                <tr>
                    <td>Nama</td>
                    <td>: Pacar Winter</td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>: 19 Mei 2004</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: Wiwi123@gmail.com</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: Pria</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: Jl.Rawa Belong</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Footer -->
    </footer>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>