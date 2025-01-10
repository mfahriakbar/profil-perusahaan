@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>

    <!-- Stats Cards -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total News</div>
                            <div class="stat-value">{{ $newsCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-white-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card" style="background: linear-gradient(45deg, #00b09b, #96c93d);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Gallery</div>
                            <div class="stat-value">{{ $galleryCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-white-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card" style="background: linear-gradient(45deg, #ff5f6d, #ffc371);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Views</div>
                            <div class="stat-value">{{ number_format($totalViews ?? 0) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-eye fa-2x text-white-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card" style="background: linear-gradient(45deg, #614385, #516395);">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Active Users</div>
                            <div class="stat-value">{{ number_format($activeUsers ?? 0) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-white-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Monthly Views</h6>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="viewsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Content Distribution</h6>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="distributionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest News -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Latest News</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latestNews as $news)
                                <tr>
                                    <td>{{ $news->title }}</td>
                                    <td>{{ $news->created_at->format('M d, Y') }}</td>
                                    <td>{{ number_format($news->views ?? 0) }}</td>
                                    <td>
                                        <span class="badge badge-{{ $news->status === 'published' ? 'success' : 'warning' }}">
                                            {{ ucfirst($news->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Monthly Views Chart
    const viewsCtx = document.getElementById('viewsChart').getContext('2d');
    new Chart(viewsCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Monthly Views',
                data: [65, 59, 80, 81, 56, 55, 40, 45, 60, 75, 85, 90],
                fill: true,
                borderColor: '#4e73df',
                backgroundColor: 'rgba(78, 115, 223, 0.05)',
                tension: 0.3
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Content Distribution Chart
    const distributionCtx = document.getElementById('distributionChart').getContext('2d');
    new Chart(distributionCtx, {
        type: 'doughnut',
        data: {
            labels: ['News', 'Gallery'],
            datasets: [{
                data: [{{ $newsCount }}, {{ $galleryCount }}],
                backgroundColor: ['#4e73df', '#1cc88a'],
                hoverOffset: 4
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
});
</script>
@endsection
