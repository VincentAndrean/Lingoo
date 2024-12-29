<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingo Dashboard</title>
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
        .calendar {
            text-align: center;
            margin: 20px 0;
        }
        .calendar h3 {
            font-size: 1.5rem;
            color: #5a5af2;
        }
        .calendar table {
            width: 100%;
            border-collapse: collapse;
        }
        .calendar th, .calendar td {
            width: 14.2%;
            text-align: center;
            padding: 8px;
            border: 1px solid #ddd;
        }
        .calendar .selected {
            background-color: #5a5af2;
            color: white;
            border-radius: 0%;
        }
        .calendar .empty {
            background-color: #f8f9fa;
            border: none;
        }
        .profile-menu {
            text-align: center;
        }
        .profile-menu img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .profile-menu a {
            display: block;
            padding: 10px;
            margin: 5px 0;
            text-decoration: none;
            color: #333;
            background-color: #f8f9fa;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .profile-menu a:hover {
            background-color: #e0e0e0;
        }
        .history {
            margin-top: 20px;
        }
        .history .list-group-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .history .list-group-item img {
            width: 30px;
            height: 20px;
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
                
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Left Sidebar: Profile & Menu -->
            <div class="col-md-3">
                <div class="profile-menu">
                    <img src="{{ asset('images/fotodiri1.png') }}" alt="Profile">
                    <h5>Ariel</h5>
                    <a href="ubahProfile">My Profile</a>
                    <a href="historyKamu">Performa</a>
                    <a href="#">Pengaturan Akun</a>
                    <a href="createuser" class="text-danger">Log Out</a>
                </div>
            </div>

            <!-- Right Section: Calendar and History -->
            <div class="col-md-9">
                <!-- Calendar -->
                <div class="calendar">
                    <h3>March 2024</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                // Configuration for March 2024
                                $daysInMonth = 31;
                                $startDay = 5; // March 1, 2024 is a Friday (5th day of the week)
                                $selectedDates = [3, 6, 20]; // Highlighted dates
                            @endphp
                            @for ($week = 0; $week < 6; $week++)
                                <tr>
                                    @for ($day = 0; $day < 7; $day++)
                                        @php
                                            $currentDate = $week * 7 + $day - $startDay + 1;
                                        @endphp
                                        @if ($currentDate < 1 || $currentDate > $daysInMonth)
                                            <td class="empty"></td>
                                        @else
                                            <td class="{{ in_array($currentDate, $selectedDates) ? 'selected' : '' }}">
                                                {{ $currentDate }}
                                            </td>
                                        @endif
                                    @endfor
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                <!-- History Section -->
                <div class="history">
                    <h4>History</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div>
                                <h5 class="mb-1">Belajar Ungkapan Salam</h5>
                                <small>3 Maret 2024 | JAM: 10.00 - 12.00</small>
                            </div>
                            <img src="https://flagcdn.com/w320/gb.png" alt="English">
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div>
                                <h5 class="mb-1">Belajar Teks Prosedur</h5>
                                <small>6 Maret 2024 | JAM: 10.00 - 12.00</small>
                            </div>
                            <img src="https://flagcdn.com/w320/id.png" alt="Indonesian">
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div>
                                <h5 class="mb-1">Belajar Berbicara Mandarin</h5>
                                <small>20 Maret 2024 | JAM: 10.00 - 12.00</small>
                            </div>
                            <img src="https://flagcdn.com/w320/cn.png" alt="Mandarin">
                        </a>
                    </div>
                </div>
            </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>