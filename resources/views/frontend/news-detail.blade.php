@extends('layouts.frontend')

@section('title', $news->title)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ $news->title }}</h2>
            <p class="text-muted">{{ $news->created_at->format('d F Y') }}</p>
            
            @if($news->image)
            <img src="{{ asset('uploads/images/'.$news->image) }}" alt="{{ $news->title }}" class="img-fluid rounded mb-4">
            @endif
            
            <div class="content">
                {!! nl2br(e($news->content)) !!}
            </div>
            
            <div class="mt-4">
                <a href="{{ url('/news') }}" class="btn btn-secondary">Kembali ke Berita</a>
            </div>
        </div>
    </div>
</div>
@endsection