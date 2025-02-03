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

    <div class="d-flex justify-content-center mt-4">
        {{ $news->links() }}
    </div>
</div>
@endsection