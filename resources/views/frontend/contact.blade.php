@extends('layouts.frontend')

@section('title', 'Kontak')

@section('content')
<!-- Contact Hero Section -->
<div class="hero-section bg-primary text-white py-4">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p class="lead">Kami siap membantu anda dengan segala pertanyaan</p>
    </div>
</div>

<!-- Contact Form Section -->
<div class="contact-section py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Informasi Kontak</h5>
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <span>Jl. Contoh No. 123, Jakarta</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>
                            <span>(021) 1234-5678</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <span>info@bpmsph.go.id</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-clock text-primary me-2"></i>
                            <span>Senin - Jumat: 08:00 - 16:00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Kirim Pesan</h5>

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ url('/contact') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                    id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                    id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                    id="subject" name="subject" value="{{ old('subject') }}" required>
                                @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" 
                                    id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection