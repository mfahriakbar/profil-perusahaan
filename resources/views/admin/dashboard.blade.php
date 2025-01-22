@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Dashboard</h1>
        <div class="d-none d-sm-inline-block">
            <span class="mr-2">
                <i class="fas fa-calendar fa-sm text-gray-600"></i> {{ date('F d, Y') }}
            </span>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total News Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $newsCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Gallery Items</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $galleryCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="contentTrendChart" style="height: 320px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Content Distribution</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="contentDistributionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Passing data dari controller ke JavaScript -->
    <script>
        var monthlyNewsData = {!! json_encode(array_values($monthlyNewsData)) !!};
        var monthlyGalleryData = {!! json_encode(array_values($monthlyGalleryData)) !!};
        var newsCount = @json($newsCount);
        var galleryCount = @json($galleryCount);
    </script>
    
@endsection
