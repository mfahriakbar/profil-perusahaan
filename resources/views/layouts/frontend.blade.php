<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPMSPH - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-container">
            <div class="loading-animation">
                <div class="loading-bar"></div>
                <div class="loading-bar"></div>
                <div class="loading-bar"></div>
                <div class="loading-bar"></div>
                <div class="loading-bar"></div>
            </div>
            <div class="loading-text">Loading...</div>
            <div class="progress-bar-container">
                <div class="progress-bar"></div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/frontend/images/logo smi.png') }}" alt="BPMSPH Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/news') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/gallery') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">Faq</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 mt-auto">
        <div class="container">
            <div class="row g-4">
                <!-- Main Info -->
                <div class="col-lg-4">
                    <img src="{{ asset('assets/frontend/images/logo smi.png') }}" alt="BPMSPH Logo" height="60" class="mb-3">
                    <p class="mb-3">Balai Pengujian Mutu dan Sertifikasi Produk Hewan - Institusi terpercaya untuk pengujian dan sertifikasi produk hewan di Indonesia.</p>
                </div>

                <!-- View Counter -->
                <div class="col-lg-2">
                    <h5 class="mb-3">Statistik Pengunjung</h5>
                    <div class="view-counter">
                        <p class="mb-2">
                            <i class="bi bi-eye me-2"></i>
                            Total Kunjungan: {{ number_format($totalViews) }}
                        </p>
                        <p class="mb-2">
                            <i class="bi bi-calendar-check me-2"></i>
                            Hari Ini: {{ number_format($todayViews) }}
                        </p>
                        <p class="mb-2">
                            <i class="bi bi-graph-up me-2"></i>
                            Bulan Ini: {{ number_format($monthViews) }}
                        </p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-lg-2">
                    <h5 class="mb-3">Sosial Media</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-3">
                            <a href="https://web.facebook.com/bpmsph.ditjenpkh.5" class="text-white text-decoration-none hover-underline">
                                <i class="bi bi-facebook me-2"></i>Facebook
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.instagram.com/bpmsph_ditjenpkh/" class="text-white text-decoration-none hover-underline">
                                <i class="bi bi-instagram me-2"></i>Instagram
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://twitter.com/BPMSPH" class="text-white text-decoration-none hover-underline">
                                <i class="bi bi-twitter-x me-2"></i>Twitter
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="https://www.youtube.com/@bpmsphbogorkementan231" class="text-white text-decoration-none hover-underline">
                                <i class="bi bi-youtube me-2"></i>Youtube
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <h5 class="mb-3">Kontak Kami</h5>
                    <div class="contact-info">
                        <p class="mb-2"><i class="bi bi-geo-alt me-2"></i>Jalan Pemuda No 29A Kecamatan Tanah Sareal Kota Bogor, Jawa Barat</p>
                        <p class="mb-2"><i class="bi bi-telephone me-2"></i>+62-251-8377111</p>
                        <p class="mb-2"><i class="bi bi-envelope me-2"></i>bpmsph@pertanian.go.id</p>
                        <p class="mb-3"><i class="bi bi-clock me-2"></i>Senin - Kamis: 07:30 - 16:00 <br> Jumat: 07:30 - 16:30</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="row mt-4 pt-3 border-top">
                <div class="col-md-6">
                    <p class="mb-0" style="font-size: 10px;">
                        SNI ISO 9001:2015 - 37001:2016 - 45001:2018 SISTEM MANAJEMEN INTEGRASI - BALAI PENGUJIAN MUTU DAN SERTIFIKASI PRODUK HEWAN
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0" style="font-size: 10px;">
                        &copy; {{ date('Y') }} Fahri Akbar. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
</body>
</html>