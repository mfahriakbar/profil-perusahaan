@extends('layouts.frontend')

@section('title', 'Galeri')

@section('content')
<!-- Gallery Hero Section -->
<div class="hero-section bg-primary text-white py-4">
    <div class="container">
        <h1>Galeri BPMSPH</h1>
        <p class="lead">Dokumentasi Kegiatan dan Fasilitas Kami</p>
    </div>
</div>

<!-- Gallery Grid Section -->
<div class="gallery-section py-5">
    <div class="container">
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('uploads/gallery/'.$gallery->image) }}" class="card-img-top" alt="{{ $gallery->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $gallery->title }}</h5>
                        @if($gallery->description)
                        <p class="card-text">{{ $gallery->description }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $galleries->links() }}
        </div>
    </div>
</div>
@endsection