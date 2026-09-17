<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thunder Riders MC - Company Profile</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
                        url('https://images.unsplash.com/photo-1558981806-ec527fa84c39?q=80&w=1200') center/cover no-repeat;
            min-height: 85vh;
        }
        .card {
            transition: transform 0.3s ease, shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning fs-3" href="#">THUNDER RIDERS MC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold" href="#hero">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold" href="#gallery">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold" href="#events">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold" href="#articles">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold btn btn-warning text-dark px-3 ms-lg-2" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5 border-top border-warning border-3">
        <div class="container">
            <p class="mb-0 text-secondary">&copy; {{ date('Y') }} <strong class="text-warning">Thunder Riders Motor Club</strong>. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
