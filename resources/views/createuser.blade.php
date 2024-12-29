<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="script.js"></script>
</head>
<style>
    *{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }
    nav{
        font-weight: bold
    }
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
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
                </div>
            </div>
        </nav>

    <div class="my-5 mx-5">
        <h1 class="text-center">Register</h1>
        <form action="/storeuser" method="POST" class="was-validated">
            @csrf
        <div class="mb-3">
            <label for="uname" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="uname" placeholder="Masukkan Nama" minlength="5" maxlength="20" aria-describedby="emailHelp" name="Nama" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3">
            <label for="uname" class="form-label">Umur</label>
            <input type="number" class="form-control" id="uname" min="20" placeholder="Masukkan Umur" minlength="2" name="Umur" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3">
            <label for="uname" class="form-label">Email</label>
            <input type="text" class="form-control" id="uname" placeholder="Masukkan Email" minlength="10" maxlength="40" name="Alamat" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="mb-3">
            <label for="uname" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="uname" placeholder="Masukkan No. Telepon" minlength="9" maxlength="12" name="Telepon" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>