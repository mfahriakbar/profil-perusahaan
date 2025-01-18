@extends('layouts.frontend')

@section('title', 'Kontak')

@section('content')
<!-- Contact Hero Section -->
<div class="hero-section bg-primary text-white py-4">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p class="lead">Bekerja Dengan Sepenuh Hati</p>
    </div>
</div>

<!-- Main Contact Section -->
<div class="contact-section py-5">
    <div class="container">
        <!-- Contact Info Cards -->
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="card h-80 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jam Operasional</h5>
                        <p class="card-text">Senin - Kamis<br>07:30 - 16:00 WIB<br>Jumat<br>07:30 - 16:30 WIB</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-80 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lokasi Kami</h5>
                        <p class="card-text">Jl. Pemuda No.29 A, RT.01/RW.06, Tanah Sareal, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161</p>
                    </div>
                </div>
            </div>
                        
            <div class="col-md-4 mb-4">
                <div class="card h-80 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Email</h5>
                        <p class="card-text">bpmsph@pertanian.go.id</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- WhatsApp Consultation Section -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="text-center mb-4">HALLO BPMSPH</h3>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <a href="http://wa.me/6281327354163" class="card text-decoration-none h-100 border-success hover-shadow">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="fab fa-whatsapp text-success fa-2x me-3"></i>
                                        <div>
                                            <h6 class="card-title mb-0 text-success">Konsultasi Hasil Uji</h6>
                                            <small class="text-muted">Klik untuk menghubungi</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-6">
                                <a href="http://wa.me/6281329376688" class="card text-decoration-none h-100 border-success hover-shadow">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="fab fa-whatsapp text-success fa-2x me-3"></i>
                                        <div>
                                            <h6 class="card-title mb-0 text-success">Konsultasi Pengujian</h6>
                                            <small class="text-muted">Klik untuk menghubungi</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-6">
                                <a href="http://wa.me/628111031275" class="card text-decoration-none h-100 border-success hover-shadow">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="fab fa-whatsapp text-success fa-2x me-3"></i>
                                        <div>
                                            <h6 class="card-title mb-0 text-success">Konsultasi Uji Profisiensi</h6>
                                            <small class="text-muted">Klik untuk menghubungi</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-6">
                                <a href="http://wa.me/6281310407997" class="card text-decoration-none h-100 border-success hover-shadow">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="fab fa-whatsapp text-success fa-2x me-3"></i>
                                        <div>
                                            <h6 class="card-title mb-0 text-success">Konsultasi Magang dan Sewa Gedung</h6>
                                            <small class="text-muted">Klik untuk menghubungi</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-6">
                                <a href="http://wa.me/6285640424269" class="card text-decoration-none h-100 border-success hover-shadow">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="fab fa-whatsapp text-success fa-2x me-3"></i>
                                        <div>
                                            <h6 class="card-title mb-0 text-success">Konsultasi Informasi Publik (PPID)</h6>
                                            <small class="text-muted">Klik untuk menghubungi</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-6">
                                <a href="http://wa.me/6281292736218" class="card text-decoration-none h-100 border-success hover-shadow">
                                    <div class="card-body d-flex align-items-center">
                                        <i class="fab fa-whatsapp text-success fa-2x me-3"></i>
                                        <div>
                                            <h6 class="card-title mb-0 text-success">Konsultasi Biaya dan Tarif Uji</h6>
                                            <small class="text-muted">Klik untuk menghubungi</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Lokasi Kami</h3>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.600848133742!2d106.79698497289372!3d-6.571955001844308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c43ed6402449%3A0xe8b1aa689d12d9e2!2sBalai%20Pengujian%20Mutu%20Dan%20Sertifikasi%20Produk%20Hewan!5e0!3m2!1sid!2sid!4v1736696257426!5m2!1sid!2sid" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                class="rounded">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        transition: all 0.3s ease;
    }
    
    .card {
        transition: all 0.3s ease;
    }
</style>
@endsection