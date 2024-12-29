<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - Lingo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
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

    <!-- Profile Section -->
    <div class="container profile-container">
        <h3>Profil Saya</h3>
        <p><small><a href="#">Profil > Profil Saya</a></small></p>
        <div class="profile-picture">
        @foreach ($users as $user)
                <tr>
                <td>
                        @if($user->Foto)
                            <img src="{{ asset('storage/' . $user->Foto) }}" alt="Foto" width="100">
                        @else
                            <span>-</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            <span class="edit-icon" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i class="bi bi-pencil"></i></span>
        </div>

        <div class="profile-info">
            <table class="table table-borderless">
                @foreach ($users as $user)
                <tr>
                    <td>Nama:</td>
                    <td>{{ $user->Nama }}</td>
                </tr>
                <tr>
                    <td>Umur:</td>
                    <td>{{ $user->Umur }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $user->Alamat }}</td>
                </tr>
                <tr>
                    <td>Telepon:</td>
                    <td>{{ $user->Telepon }}</td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>

    <!-- Modal Edit Profile -->
    @if ($users->isNotEmpty())
    @php $user = $users->first(); @endphp <!-- Ambil user pertama -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 10px 20px">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/updateuser/' . $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" value="{{ $user->Nama }}" required>
            </div>
            <div class="mb-3">
                <label for="Umur" class="form-label">Umur</label>
                <input type="number" class="form-control" id="Umur" name="Umur" value="{{ $user->Umur }}" required>
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Email</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" value="{{ $user->Alamat }}" required>
            </div>
            <div class="mb-3">
                <label for="Telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="Telepon" name="Telepon" value="{{ $user->Telepon }}" required>
            </div>
            <div class="mb-3">
                <label for="Foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="Foto" name="Foto" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
            </div>
        </div>
    </div>
    @endif

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