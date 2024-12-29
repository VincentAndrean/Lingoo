<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lingo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('images/regis.jpg') }}'); /* Ganti dengan URL background Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
        }
        .lingo-logo {
            font-weight: bold;
            font-size: 24px;
            color: #4A90E2;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <!-- Logo -->
            <div class="text-center mb-4">
                <span class="lingo-logo">LINGO</span>
            </div>
            <!-- Form -->
            <form>
                <!-- Nama Lengkap -->
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <!-- Button -->
                <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>
            <!-- Link ke Register -->
            <div class="text-center mt-3">
                Belum Punya Akun? <a href="daftar">Daftar</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
