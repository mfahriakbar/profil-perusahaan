@extends('layouts.frontend')

@section('title', 'Berita')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Berita Terkini</h2>
    
    <div class="row">
        @forelse($news as $item)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img 
                    src="{{ $item->image ? asset('uploads/images/'.$item->image) : asset('uploads/images/default.png') }}" 
                    class="card-img-top" 
                    style="height: 200px; object-fit: cover;"
                    alt="{{ $item->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="text-muted">{{ $item->created_at->format('d F Y') }}</p>
                    <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                    <a href="{{ url('/news/'.$item->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p>Belum ada berita.</p>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="News pagination">
            <ul class="pagination pagination-sm">
                <!-- Tombol Previous -->
                @if ($news->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $news->previousPageUrl() }}" aria-label="Previous">
                            <span>&laquo;</span>
                        </a>
                    </li>
                @endif

                <!-- Nomor Halaman -->
                @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                    <li class="page-item {{ $news->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Tombol Next -->
                @if ($news->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $news->nextPageUrl() }}" aria-label="Next">
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
@endsection