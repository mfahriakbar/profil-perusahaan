@extends('layouts.frontend')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<div class="hero-section-home">
    <div class="hero-video-container">
        <video class="hero-video" autoplay loop muted playsinline>
            <source src="{{ asset('assets/frontend/videos/teknotani.mp4') }}" type="video/mp4">
            Video tidak didukung oleh browser Anda.
        </video>
    </div>
    <div class="hero-content">
        <h1 class="hero-title">Selamat Datang di BPMSPH</h1>
        <h4 class="hero-subtitle">Balai Pengujian Mutu dan Sertifikasi Produk Hewan</h4>
        <a href="{{ url('/about') }}" class="btn btn-light btn-lg mt-3">Pelajari Lebih Lanjut</a>
    </div>
</div>

<!-- Services Section -->
<div class="services-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Layanan Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-award-fill display-4 text-primary mb-3"></i>
                        <h5 class="card-title">Pengujian Mutu</h5>
                        <p class="card-text">Layanan pengujian mutu produk hewan sesuai standar nasional dan internasional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-patch-check-fill display-4 text-primary mb-3"></i>
                        <h5 class="card-title">Sertifikasi</h5>
                        <p class="card-text">Layanan sertifikasi produk hewan yang telah memenuhi standar kualitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-people-fill display-4 text-primary mb-3"></i>
                        <h5 class="card-title">Konsultasi</h5>
                        <p class="card-text">Layanan konsultasi terkait standar mutu dan sertifikasi produk hewan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest News Section -->
<div class="news-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Berita Terbaru</h2>
        <div class="row g-4">
            @foreach($news as $item)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img 
                        src="{{ $item->image ? asset('uploads/images/'.$item->image) : asset('uploads/images/default.png') }}"
                        class="card-img-top"
                        style="height: 200px; object-fit: cover;"
                        alt="{{ $item->title }}"
                    >
                    <div class="card-body p-4">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($item->content, 100) }}</p>
                        <a href="{{ url('/news/'.$item->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection