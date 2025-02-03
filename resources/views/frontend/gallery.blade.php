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
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm">
                    <!-- Tombol Previous -->
                    @if ($galleries->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $galleries->previousPageUrl() }}" aria-label="Previous">
                                <span>&laquo;</span>
                            </a>
                        </li>
                    @endif

                    <!-- Nomor Halaman -->
                    @foreach ($galleries->getUrlRange(1, $galleries->lastPage()) as $page => $url)
                        <li class="page-item {{ $galleries->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <!-- Tombol Next -->
                    @if ($galleries->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $galleries->nextPageUrl() }}" aria-label="Next">
                                <span>&raquo;</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection