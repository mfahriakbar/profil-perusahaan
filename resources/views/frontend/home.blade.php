@extends('layouts.frontend')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section with Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/frontend/images/kantor.jpg') }}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption">
                <h1>Selamat Datang di BPMSPH</h1>
                <h4>Balai Pengujian Mutu dan Sertifikasi Produk Hewan</h4>
                <a href="{{ url('/about') }}" class="btn btn-light btn-lg">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/frontend/images/bimtek.jpeg') }}" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption">
                <h1>Layanan Profesional</h1>
                <p class="lead">Standar Internasional dalam Pengujian dan Sertifikasi</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/frontend/images/gedung.jpg') }}" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption">
                <h1>Kualitas Terjamin</h1>
                <p class="lead">Didukung oleh Tim Ahli dan Peralatan Modern</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Services Section -->
<div class="services-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-vial fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Pengujian Mutu</h5>
                        <p class="card-text">Layanan pengujian mutu produk hewan sesuai standar nasional dan internasional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-certificate fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">Sertifikasi</h5>
                        <p class="card-text">Layanan sertifikasi produk hewan yang telah memenuhi standar kualitas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-hands-helping fa-3x mb-3 text-primary"></i>
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
        <div class="row">
            @foreach($news as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img 
                        src="{{ $item->image ? asset('uploads/images/'.$item->image) : asset('uploads/images/default.png') }}" 
                        class="card-img-top" 
                        alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                        <a href="{{ url('/news/'.$item->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection