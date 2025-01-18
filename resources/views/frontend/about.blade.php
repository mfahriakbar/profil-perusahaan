@extends('layouts.frontend')
@section('title', 'Tentang Kami')
@section('content')
<!-- Hero Section -->
<div class="hero-section bg-primary text-white py-4">
    <div class="container">
        <h1>Tentang BPMSPH</h1>
        <p class="lead">Balai Pengujian Mutu dan Sertifikasi Prdouk Hewan</p>
    </div>
</div>

<div class="container py-4">
    <!-- Main Info Section -->
    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <div class="position-relative">
                <img src="{{ asset('assets/frontend/images/kantor.jpg') }}" alt="BPMSPH Building" class="img-fluid rounded shadow">
                <div class="position-absolute bottom-0 start-0 bg-primary text-white py-2 px-4 rounded-end">
                    <small>Kantor BPMSPH</small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4">Sejarah Singkat</h3>
                    <div class="card-text">
                        <p>Balai Pengujian Mutu Produk Perternakan terletak di jalan Pemuda No 29A Bogor 16161, berdiri diatas luas lahan ± 8000 m2 yang lokasinya berdampingan dengan bekas rumah potong hewan kota Bogor di sebelah selatan dan Dinas Pendapatan Daerah Kota Bogor disebelah utaranya.</p>
                        <p>Perjalanan institusi ini dimulai dengan terbitnya SK Mentri Pertanian No.466/Kpts/OT.210/6/1994 pada 9 Juni 1994 sebagai Loka Pengujian Mutu Produk Perternakan (LPMPP).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Perjalanan BPMSPH</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h5>1994</h5>
                                <p>Pendirian LPMPP melalui SK Menteri Pertanian No.466/Kpts/OT.210/6/1994</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h5>1995-1996</h5>
                                <p>Bersinergis dengan BPMSOH di Gunung Sindur Bogor</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h5>2000</h5>
                                <p>Penandatanganan kerjasama dengan Pemerintah Kota Bogor</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h5>2001</h5>
                                <p>Perubahan status menjadi BPMPP</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h5>2013</h5>
                                <p>Perubahan nama menjadi BPMSPH</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h5>2023</h5>
                                <p>Pembaharuan Organisasi dan Tata Kerja melalui Permentan No 12 Tahun 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Facilities Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Fasilitas Laboratorium</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="facility-item text-center">
                                <i class="fas fa-flask fa-2x text-primary mb-3"></i>
                                <h5>Lab Cemaran Mikroba I & II</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="facility-item text-center">
                                <i class="fas fa-microscope fa-2x text-primary mb-3"></i>
                                <h5>Lab Skrining Residu & AMR</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="facility-item text-center">
                                <i class="fas fa-vial fa-2x text-primary mb-3"></i>
                                <h5>Lab Kimia I, II & Bioteknologi</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision & Mission Section -->
    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4">Visi</h3>
                    <p class="card-text">Mewujudkan BPMSPH sebagai lembaga pemeriksaan, pengujian dan sertifikasi keamanan dan mutu produk hewan nasional yang handal dan bertaraf internasional.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4">Misi</h3>
                    <ol class="card-text">
                        <li>Meningkatkan pelayanan pemeriksaan, pengujian keamanan dan mutu produk hewan dengan menerapkan persyaratan laboratorium yang diakreditasi;</li>
                        <li>Meningkatkan kompetensi dan kapasitas laboratorium dalam rangka menjamin keabsahan/validitas hasil pengujian dan mewujudkan produk hewan yang aman, sehat, utuh, dan halal;</li>
                        <li>Melaksanakan sertifikasi keamanan dan mutu produk hewan;</li>
                        <li>Meningkatkan pemantauan, pengamatan, dan pengawasan dalam rangka mewujudkan penjaminan produk hewan yang aman, sehat, utuh, dan halal;</li>
                        <li>Meningkatkan pengembangan teknis dan metode pengujian keamanan dan mutu produk hewan yang didukung dengan peningkatan sarana dan prasarana;</li>
                        <li>Meningkatkan jejaring kerja dengan pelanggan dan <em>Stakeholders</em>/lembaga terkait.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Organization Structure Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Struktur Organisasi</h3>
                    <div class="text-center">
                        <img src="{{ asset('assets/frontend/images/struktur organisasi.jpg') }}" 
                             alt="Struktur Organisasi BPMSPH" 
                             class="img-fluid shadow rounded"
                             style="max-width: 736px; width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.timeline {
    position: relative;
    padding: 20px 0;
}

.timeline-item {
    padding: 20px 30px;
    position: relative;
    border-left: 2px solid #007bff;
    margin-left: 20px;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -9px;
    top: 28px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: #007bff;
}

.facility-item {
    padding: 20px;
    transition: all 0.3s ease;
}

.facility-item:hover {
    transform: translateY(-5px);
}
</style>
@endsection