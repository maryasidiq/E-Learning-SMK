@extends('template_backend.home')
@section('heading', 'Dashboard')
@section('page')
    <li class="breadcrumb-item active">Admin</li>
    <li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
<style>
    /* Glassmorphism Styles */
    .glass-box {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.05);
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        margin-bottom: 20px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .glass-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px 0 rgba(0, 0, 0, 0.1);
    }
    .glass-box .icon-wrapper {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 15px;
    }
    .glass-box h3 {
        font-size: 28px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 5px;
    }
    .glass-box p {
        color: #7f8c8d;
        font-size: 15px;
        font-weight: 500;
        margin-bottom: 0;
    }
    .glass-box-footer {
        display: block;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid rgba(0,0,0,0.05);
        color: #3498db;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.2s;
        text-align: right;
        font-size: 14px;
    }
    .glass-box-footer:hover {
        color: #2980b9;
        text-decoration: none;
    }
    
    /* Box Accent Colors (Glass Style) */
    .bg-light-blue .icon-wrapper { background: rgba(52, 152, 219, 0.15); color: #3498db; }
    .bg-light-purple .icon-wrapper { background: rgba(155, 89, 182, 0.15); color: #9b59b6; }
    .bg-light-green .icon-wrapper { background: rgba(46, 204, 113, 0.15); color: #2ecc71; }
    .bg-light-orange .icon-wrapper { background: rgba(230, 126, 34, 0.15); color: #e67e22; }
    .bg-light-red .icon-wrapper { background: rgba(231, 76, 60, 0.15); color: #e74c3c; }
    .bg-light-teal .icon-wrapper { background: rgba(26, 188, 156, 0.15); color: #1abc9c; }

    /* General Glass Card for Charts/Info */
    .glass-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.05);
        border-radius: 15px;
        margin-bottom: 20px;
        border-top: 3px solid #3498db;
    }
    .glass-card .card-body {
        padding: 1.5rem;
    }
    .glass-card .text-bold {
        color: #2c3e50;
    }
    
    .chart-legend li {
        margin-bottom: 8px;
        color: #555;
    }
</style>

    <div class="col-lg-4 col-md-6 col-12">
        <div class="glass-box bg-light-blue">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h3>{{ $jadwal }}</h3>
                    <p>Jadwal</p>
                </div>
                <div class="icon-wrapper">
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </div>
            <a href="{{ route('jadwal.index') }}" class="glass-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="glass-box bg-light-purple">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h3>{{ $guru }}</h3>
                    <p>Guru</p>
                </div>
                <div class="icon-wrapper">
                    <i class="fas fa-id-card"></i>
                </div>
            </div>
            <a href="{{ route('guru.index') }}" class="glass-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="glass-box bg-light-green">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h3>{{ $siswa }}</h3>
                    <p>Siswa</p>
                </div>
                <div class="icon-wrapper">
                    <i class="fas fa-user-graduate"></i>
                </div>
            </div>
            <a href="{{ route('siswa.index') }}" class="glass-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="glass-box bg-light-orange">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h3>{{ $kelas }}</h3>
                    <p>Kelas</p>
                </div>
                <div class="icon-wrapper">
                    <i class="fas fa-home"></i>
                </div>
            </div>
            <a href="{{ route('kelas.index') }}" class="glass-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="glass-box bg-light-red">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h3>{{ $mapel }}</h3>
                    <p>Mapel</p>
                </div>
                <div class="icon-wrapper">
                    <i class="fas fa-book"></i>
                </div>
            </div>
            <a href="{{ route('mapel.index') }}" class="glass-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <div class="glass-box bg-light-teal">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h3>{{ $user }}</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon-wrapper">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>
            <a href="{{ route('user.index') }}" class="glass-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <!-- Charts Section -->
    <div class="col-lg-6">
        <div class="card glass-card">
            <div class="card-body">
                <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg">Data Guru</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success" style="font-weight: 600; font-size: 16px;">
                            <i class="fas fa-arrow-up"></i> {{ $guru }} Total
                        </span>
                    </p>
                </div>
                <div class="position-relative mb-4">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="chart-responsive">
                                <canvas id="pieChartGuru" height="200"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <ul class="chart-legend" style="list-style: none; padding-left: 0; margin-bottom: 0;">
                                <li><i class="far fa-circle" style="color: #9b59b6;"></i> Laki-laki</li>
                                <li><i class="far fa-circle" style="color: #2ecc71;"></i> Perempuan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card glass-card">
            <div class="card-body">
                <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg">Data Siswa</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success" style="font-weight: 600; font-size: 16px;">
                            <i class="fas fa-arrow-up"></i> {{ $siswa }} Total
                        </span>
                    </p>
                </div>
                <div class="position-relative mb-4">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="chart-responsive">
                                <canvas id="pieChartSiswa" height="200"></canvas>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <ul class="chart-legend" style="list-style: none; padding-left: 0; margin-bottom: 0;">
                                <li><i class="far fa-circle" style="color: #9b59b6;"></i> Laki-laki</li>
                                <li><i class="far fa-circle" style="color: #2ecc71;"></i> Perempuan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card glass-card border-top-0" style="border-left: 4px solid #3498db;">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="icon-wrapper mr-3" style="width: 50px; height: 50px; background: rgba(52,152,219,0.15); color: #3498db; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px;">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div>
                        <h4 class="mb-0 text-bold" style="color: #2c3e50;">Informasi Sistem</h4>
                    </div>
                    <div class="ml-auto">
                        <span class="badge badge-primary px-3 py-2" style="font-size: 14px; border-radius: 8px;">
                            {{ $kelas }} Kelas Aktif
                        </span>
                    </div>
                </div>
                <div class="position-relative pl-2">
                    <p style="color: #666; font-size: 15px; margin-bottom: 0; line-height: 1.6;">Sistem ini menggunakan struktur kelas SMP dengan tingkat 7, 8, dan 9, serta kelompok paralel A hingga
                        E per tingkat. Anda dapat mengelola semua data akademik seperti jadwal, kehadiran, nilai dan pengguna pada platform ini.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            'use strict'

            var pieChartCanvasGuru = $('#pieChartGuru').get(0).getContext('2d')
            var pieDataGuru = {
                labels: [
                    'Laki-laki',
                    'Perempuan',
                ],
                datasets: [
                    {
                        data: [{{ $gurulk }}, {{ $gurupr }}],
                        backgroundColor: ['#9b59b6', '#2ecc71'],
                    }
                ]
            }
            var pieOptions = {
                legend: {
                    display: false
                }
            }
            var pieChart = new Chart(pieChartCanvasGuru, {
                type: 'doughnut',
                data: pieDataGuru,
                options: pieOptions
            })

            var pieChartCanvasSiswa = $('#pieChartSiswa').get(0).getContext('2d')
            var pieDataSiswa = {
                labels: [
                    'Laki-laki',
                    'Perempuan',
                ],
                datasets: [
                    {
                        data: [{{ $siswalk }}, {{ $siswapr }}],
                        backgroundColor: ['#9b59b6', '#2ecc71'],
                    }
                ]
            }
            var pieOptions = {
                legend: {
                    display: false
                }
            }
            var pieChart = new Chart(pieChartCanvasSiswa, {
                type: 'doughnut',
                data: pieDataSiswa,
                options: pieOptions
            })



        })

        $("#Dashboard").addClass("active");
        $("#liDashboard").addClass("menu-open");
        $("#AdminHome").addClass("active");
    </script>
@endsection