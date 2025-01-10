@extends('layouts.frontend')

@section('title', 'Tentang Kami')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mb-4">Tentang BPMSPH</h2>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="{{ asset('images/about.jpg') }}" alt="About BPMSPH" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h3>{{ $profile->company_name ?? 'BPMSPH' }}</h3>
            <p>{{ $profile->about ?? '' }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Visi</h4>
                    <p class="card-text">{{ $profile->vision ?? '' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Misi</h4>
                    <p class="card-text">{{ $profile->mission ?? '' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection