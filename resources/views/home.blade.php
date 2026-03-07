@extends('layouts.app2')
@section('pageTitle', 'Dashboard')
@section('title', 'Dashboard')

@section('content')
    <div class="max-w-7xl mx-auto">
        <!-- Enhanced Hero Section -->
        <div class="relative rounded-3xl p-8 sm:p-10 mb-8 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
            <!-- Decorative Backgrounds -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-gradient-to-br from-blue-400/30 to-indigo-600/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-64 h-64 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 blur-3xl rounded-full"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="animate-fade-in w-full md:w-2/3">
                    <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-semibold mb-4 border border-blue-100 dark:border-blue-800">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span>Sistem E-Learning SMPN 2 Mlati</span>
                    </div>
                    
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-2 text-gray-900 dark:text-white tracking-tight">
                        Selamat Datang, <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">{{ Auth::user()->name ?? 'Pengguna' }}</span>!
                    </h1>
                    <p class="text-gray-600 dark:text-gray-300 text-lg mb-6 max-w-2xl">
                        Mari kita mulai hari ini dengan semangat belajar dan mengajar yang tinggi. Apa yang ingin Anda lakukan hari ini?
                    </p>
                    
                    <!-- Quick Stats/Info Pills -->
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm transition-transform hover:-translate-y-1 duration-300">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Tanggal</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">{{ date('d M Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm transition-transform hover:-translate-y-1 duration-300">
                            <div class="w-8 h-8 rounded-full bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center mr-3 text-indigo-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Waktu</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white" id="current-time">{{ date('H:i') }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm transition-transform hover:-translate-y-1 duration-300">
                            <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center mr-3 text-emerald-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Status</p>
                                <p class="text-sm font-bold text-emerald-600 dark:text-emerald-400">Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Hero Illustration / Dynamic Element -->
                <div class="hidden md:flex w-1/3 justify-end items-center relative animate-fade-in-up">
                    <div class="relative w-48 h-48 lg:w-56 lg:h-56">
                        <!-- Abstract Shape 1 -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-500 to-indigo-500 rounded-3xl rotate-6 opacity-20 animate-pulse"></div>
                        <!-- Abstract Shape 2 -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-cyan-400 to-blue-500 rounded-3xl -rotate-6 opacity-40 shadow-xl backdrop-blur-sm transition-transform hover:rotate-0 duration-500"></div>
                        <!-- Inner Icon/Graphic -->
                        <div class="absolute inset-0 flex items-center justify-center text-white drop-shadow-2xl">
                            <svg class="w-24 h-24 lg:w-28 lg:h-28" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422M12 14l-6.16-3.422M12 14v7m0-7L6 9m6 5l6-5"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:gap-8 mb-6 sm:mb-8">
            
            <!-- Left Column: Current Schedule -->
            <div class="xl:col-span-2 order-2 xl:order-1 flex flex-col gap-6">
                
                <!-- Quick Access / Stats Menu (New addition) -->
                @if(Auth::user()->role == 'Siswa')
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <a href="{{ route('materi.siswa') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Materi</span>
                    </a>
                    <a href="{{ route('soal.siswa') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Soal</span>
                    </a>
                    <a href="{{ route('nilai.siswa') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-emerald-50 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Nilai</span>
                    </a>
                    <a href="{{ route('forum.siswa') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-purple-50 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Diskusi</span>
                    </a>
                </div>
                @elseif(Auth::user()->role == 'Guru')
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <a href="{{ route('materi.index') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Kelola Materi</span>
                    </a>
                    <a href="{{ route('soal.index') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Buat Soal</span>
                    </a>
                    <a href="{{ route('nilai.index') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-emerald-50 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Input Nilai</span>
                    </a>
                    <a href="{{ route('forum.guru') }}" class="group flex flex-col items-center justify-center p-4 bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-purple-50 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 rounded-xl flex items-center justify-center mb-3 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Buka Diskusi</span>
                    </a>
                </div>
                @endif
                
                <!-- Schedule Card Redesign -->
                <div class="bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 p-6 sm:p-8 shadow-xl">
                    <!-- Header -->
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/30 rounded-2xl flex items-center justify-center shadow-inner">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Jadwal Kelas Hari Ini</h2>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Pantau mata pelajaran dan waktu pelaksanaannya</p>
                            </div>
                        </div>
                        
                        <div class="hidden sm:block">
                             <a href="{{ Auth::user()->role == 'Guru' ? route('jadwal.guru') : route('jadwal.siswa') }}" class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:underline">
                                Lihat Semua Jadwal &rarr;
                             </a>
                        </div>
                    </div>

                    <!-- Clean Schedule List Container -->
                    <div id="data-jadwal" class="flex flex-col gap-4">
                        {{-- ====== LOGIKA WAKTU & JADWAL ====== --}}
                        @php
                            $hari = date('w');
                            $jam = date('H:i');
                        @endphp

                        @if ($jadwal->count() > 0)
                            {{-- === ISTIRAHAT === --}}
                            @if (
                                ($hari == '1' && $jam >= '09:45' && $jam <= '10:15') ||
                                ($hari == '1' && $jam >= '12:30' && $jam <= '13:15') ||
                                ($hari == '2' && $jam >= '09:15' && $jam <= '09:45') ||
                                ($hari == '2' && $jam >= '12:00' && $jam <= '13:00') ||
                                ($hari == '3' && $jam >= '09:15' && $jam <= '09:45') ||
                                ($hari == '3' && $jam >= '12:00' && $jam <= '13:00') ||
                                ($hari == '4' && $jam >= '09:15' && $jam <= '09:45') ||
                                ($hari == '4' && $jam >= '12:00' && $jam <= '13:00') ||
                                ($hari == '5' && $jam >= '09:00' && $jam <= '09:15') ||
                                ($hari == '5' && $jam >= '11:15' && $jam <= '13:00')
                            )
                                @include('components.jadwal-card', [
                                    'iconColor' => 'from-orange-100 to-yellow-100',
                                    'iconDark' => 'dark:from-orange-900/30 dark:to-yellow-900/30',
                                    'svgColor' => 'text-orange-600 dark:text-orange-400',
                                    'title' => 'Waktunya Istirahat!',
                                    'subtitle' => 'Nikmati waktu istirahat Anda',
                                ])
                            @else
                                {{-- === DAFTAR JADWAL (CARD LAYOUT) === --}}
                                @foreach ($jadwal as $data)
                                    <div class="group flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-gray-50 hover:bg-white dark:bg-gray-800/50 dark:hover:bg-gray-800 rounded-2xl border border-transparent hover:border-gray-200 dark:hover:border-gray-600 transition-all shadow-sm hover:shadow-md">
                                        
                                        <!-- Time & Visual indicator -->
                                        <div class="flex items-center gap-4 w-full sm:w-auto mb-3 sm:mb-0">
                                            <div class="flex flex-col items-center justify-center p-2 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 min-w-[90px] text-center border border-blue-100 dark:border-blue-800/50">
                                                <span class="text-sm font-bold">{{ $data->jam_mulai }}</span>
                                                <span class="text-xs text-blue-400 opacity-75">sd</span>
                                                <span class="text-sm font-bold">{{ $data->jam_selesai }}</span>
                                            </div>
                                            
                                            <!-- Teacher Info (For Students) or Subject (For Teachers) -->
                                            <div class="flex items-center gap-3">
                                                <img src="{{ $data->guru->foto ?? asset('assets/img/avatar/avatar-1.png') }}" alt="User profile" class="w-10 h-10 rounded-full object-cover ring-2 ring-white dark:ring-gray-700 shadow-sm" />
                                                <div>
                                                    <h3 class="font-bold text-gray-900 dark:text-white text-base">{{ $data->mapel->nama_mapel }}</h3>
                                                    <p class="text-gray-500 dark:text-gray-400 text-sm flex items-center gap-1">
                                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                        {{ $data->guru->nama_guru }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Location & Status Badge -->
                                        <div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-end pl-16 sm:pl-0">
                                            <div class="flex items-center text-gray-600 dark:text-gray-300 text-sm bg-white dark:bg-gray-700 py-1.5 px-3 rounded-lg border border-gray-200 dark:border-gray-600">
                                                <svg class="w-4 h-4 mr-1.5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                {{ $data->ruang->nama_ruang }}
                                                <span class="mx-2 text-gray-300 dark:text-gray-500">|</span>
                                                <span class="font-medium text-blue-600 dark:text-blue-400">{{ $data->kelas->nama_kelas }}</span>
                                            </div>
                                            
                                            <!-- Status Indicator -->
                                            <div class="relative flex items-center justify-center w-8 h-8 rounded-full bg-white dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600">
                                                @if ($data->absen($data->guru_id))
                                                    <div class="w-3 h-3 rounded-full animate-pulse" style="background-color:#{{ $data->absen($data->guru_id) }}"></div>
                                                @elseif (date('H:i:s') >= '09:00:00')
                                                    <div class="w-3 h-3 bg-red-500 rounded-full" title="Terlambat/Absen"></div>
                                                @else
                                                    <div class="w-3 h-3 bg-gray-300 rounded-full" title="Belum Mulai"></div>
                                                @endif
                                            </div>
                                        </div>
                                        
                                    </div>
                                @endforeach
                                
                                <div class="mt-2 sm:hidden text-center block">
                                     <a href="{{ Auth::user()->role == 'Guru' ? route('jadwal.guru') : route('jadwal.siswa') }}" class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 hover:underline">
                                        Lihat Semua Jadwal &rarr;
                                     </a>
                                </div>
                            @endif
                        @else
                            {{-- === DATA KOSONG / LIBUR === --}}
                            @include('components.jadwal-empty', [
                                'title' => 'Tidak Ada Data Jadwal!',
                                'subtitle' => 'Jadwal belum tersedia untuk hari ini',
                                'iconColor' => 'from-gray-100 to-gray-200',
                                'iconDark' => 'dark:from-gray-700 dark:to-gray-600',
                                'svgColor' => 'text-gray-600 dark:text-gray-400'
                            ])
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="order-1 xl:order-2">
                <div class="sticky top-6">
                    <!-- Pengumuman Card (Redesigned) -->
                    <div class="bg-gradient-to-b from-blue-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-3xl border border-blue-100 dark:border-gray-700 p-6 sm:p-8 shadow-xl overflow-hidden relative">
                        <!-- BG accent -->
                        <div class="absolute top-0 right-0 p-4 opacity-10">
                             <svg class="w-32 h-32 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"></path>
                            </svg>
                        </div>
                        
                        <div class="relative z-10 flex flex-col h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 rounded-xl flex items-center justify-center mr-4 shadow-sm relative">
                                    <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 border-2 border-white dark:border-gray-800 rounded-full animate-ping"></span>
                                    <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                                    <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold rounded text-gray-900 dark:text-white">Papan Pengumuman</h3>
                                    <p class="text-sm border text-gray-500 dark:text-gray-400 px-2 py-0.5 mt-0.5 rounded-md inline-block border-gray-200 dark:border-gray-600 bg-white/50 dark:bg-gray-800/50 backdrop-blur-sm">Informasi Terkini</p>
                                </div>
                            </div>
                            
                            <hr class="border-gray-200 dark:border-gray-700 mb-6">
                            
                            <div class="prose prose-sm sm:prose-base dark:prose-invert max-w-none prose-a:text-blue-600 hover:prose-a:text-blue-500 dark:prose-a:text-blue-400 text-gray-700 dark:text-gray-300">
                                {!! $pengumuman->isi !!}
                            </div>
                            
                            <!-- Illustration at bottom if content is short -->
                            <div class="mt-8 pt-6 flex justify-center opacity-40 mix-blend-multiply dark:mix-blend-screen pointer-events-none grayscale">
                                <img src="{{ asset('assets/img/illustrations/reading.svg') }}" alt="reading" class="w-48 h-auto object-contain hidden lg:block" onerror="this.style.display='none'">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Update current time
            setInterval(function() {
                var now = new Date();
                var timeString = now.toLocaleTimeString('id-ID', {
                    hour12: false,
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
                $('#current-time').text(timeString);
            }, 1000);

            setInterval(function() {
                var date = new Date();
                var hari = date.getDay();
                var h = date.getHours();
                var m = date.getMinutes();
                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                var jam = h + ":" + m;

                if (hari == '0' || hari == '6') {
                    $("#data-jadwal").html(
                        `<tr>
                            <td colspan='5' class='py-8 text-center'>
                                <div class='flex flex-col items-center'>
                                    <div class='w-16 h-16 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-900/30 rounded-full flex items-center justify-center mb-4'>
                                        <svg class='w-8 h-8 text-blue-600 dark:text-blue-400' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'></path>
                                        </svg>
                                    </div>
                                    <h3 class='text-xl font-bold text-gray-900 dark:text-white mb-2'>Sekolah Libur!</h3>
                                    <p class='text-gray-600 dark:text-gray-400'>Nikmati hari libur Anda</p>
                                </div>
                            </td>
                        </tr>`
                    );
                } else {
                    if (jam <= '07:00') {
                        $("#data-jadwal").html(
                            `<tr>
                                <td colspan='5' class='py-8 text-center'>
                                    <div class='flex flex-col items-center'>
                                        <div class='w-16 h-16 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-900/30 rounded-full flex items-center justify-center mb-4'>
                                            <svg class='w-8 h-8 text-blue-600 dark:text-blue-400' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z'></path>
                                            </svg>
                                        </div>
                                        <h3 class='text-xl font-bold text-gray-900 dark:text-white mb-2'>Jam Pelajaran Akan Segera Dimulai!</h3>
                                        <p class='text-gray-600 dark:text-gray-400'>Persiapkan diri untuk belajar</p>
                                    </div>
                                </td>
                            </tr>`
                        );
                    } else if (
                        hari == '1' && jam >= '16:15' ||
                        hari == '2' && jam >= '16:00' ||
                        hari == '3' && jam >= '16:00' ||
                        hari == '4' && jam >= '16:00' ||
                        hari == '5' && jam >= '15:40'
                    ) {
                        $("#data-jadwal").html(
                            `<tr>
                                <td colspan='5' class='py-8 text-center'>
                                    <div class='flex flex-col items-center'>
                                        <div class='w-16 h-16 bg-gradient-to-br from-green-100 to-emerald-100 dark:from-green-900/30 dark:to-emerald-900/30 rounded-full flex items-center justify-center mb-4'>
                                            <svg class='w-8 h-8 text-green-600 dark:text-green-400' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'></path>
                                            </svg>
                                        </div>
                                        <h3 class='text-xl font-bold text-gray-900 dark:text-white mb-2'>Jam Pelajaran Sudah Selesai!</h3>
                                        <p class='text-gray-600 dark:text-gray-400'>Selamat beristirahat</p>
                                    </div>
                                </td>
                            </tr>`
                        );
                    } else {
                        if (
                            hari == '1' && jam >= '09:45' && jam <= '10:15' ||
                            hari == '1' && jam >= '12:30' && jam <= '13:15' ||
                            hari == '2' && jam >= '09:15' && jam <= '09:45' ||
                            hari == '2' && jam >= '12:00' && jam <= '13:00' ||
                            hari == '3' && jam >= '09:15' && jam <= '09:45' ||
                            hari == '3' && jam >= '12:00' && jam <= '13:00' ||
                            hari == '4' && jam >= '09:15' && jam <= '09:45' ||
                            hari == '4' && jam >= '12:00' && jam <= '13:00' ||
                            hari == '5' && jam >= '09:00' && jam <= '09:15' ||
                            hari == '5' && jam >= '11:15' && jam <= '13:00'
                        ) {
                            $("#data-jadwal").html(
                                `<tr>
                                    <td colspan='5' class='py-8 text-center'>
                                        <div class='flex flex-col items-center'>
                                            <div class='w-16 h-16 bg-gradient-to-br from-orange-100 to-orange-100 dark:from-orange-900/30 dark:to-orange-900/30 rounded-full flex items-center justify-center mb-4'>
                                                <svg class='w-8 h-8 text-orange-600 dark:text-orange-400' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'></path>
                                                </svg>
                                            </div>
                                            <h3 class='text-xl font-bold text-gray-900 dark:text-white mb-2'>Waktunya Istirahat!</h3>
                                            <p class='text-gray-600 dark:text-gray-400'>Nikmati waktu istirahat Anda</p>
                                        </div>
                                    </td>
                                </tr>`
                            );
                        } else if (hari == '1' && jam >= '07:00' && jam <= '07:30') {
                            $("#data-jadwal").html(
                                `<tr>
                                    <td colspan='5' class='py-8 text-center'>
                                        <div class='flex flex-col items-center'>
                                            <div class='w-16 h-16 bg-gradient-to-br from-red-100 to-red-200 dark:from-red-900/30 dark:to-red-900/50 rounded-full flex items-center justify-center mb-4'>
                                                <svg class='w-8 h-8 text-red-600 dark:text-red-400' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                                                    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M3 21v-4a4 4 0 014-4h.582l.723-1.447A4 4 0 0114.29 9h.582a4 4 0 014 4v4M6 9V3a2 2 0 012-2h8a2 2 0 012 2v6'></path>
                                                </svg>
                                            </div>
                                            <h3 class='text-xl font-bold text-gray-900 dark:text-white mb-2'>Waktunya Upacara Bendera!</h3>
                                            <p class='text-gray-600 dark:text-gray-400'>Mari kita hormati bendera merah putih</p>
                                        </div>
                                    </td>
                                </tr>`
                            );
                        } else {
                            $.ajax({
                                type: "GET",
                                data: {
                                    hari: hari,
                                    jam: jam
                                },
                                dataType: "JSON",
                                url: "{{ url('/jadwal/sekarang') }}",
                                success: function(data) {
                                    var html = "";
                                    $.each(data, function(index, val) {
                                        html += "<div class='group flex flex-col sm:flex-row items-start sm:items-center justify-between p-4 bg-gray-50 hover:bg-white dark:bg-gray-800/50 dark:hover:bg-gray-800 rounded-2xl border border-transparent hover:border-gray-200 dark:hover:border-gray-600 transition-all shadow-sm hover:shadow-md mb-4'>";
                                        
                                        // Time & Visual indicator
                                        html += "<div class='flex items-center gap-4 w-full sm:w-auto mb-3 sm:mb-0'>";
                                        html += "<div class='flex flex-col items-center justify-center p-2 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 min-w-[90px] text-center border border-blue-100 dark:border-blue-800/50'>";
                                        html += "<span class='text-sm font-bold'>" + val.jam_mulai + "</span>";
                                        html += "<span class='text-xs text-blue-400 opacity-75'>sd</span>";
                                        html += "<span class='text-sm font-bold'>" + val.jam_selesai + "</span>";
                                        html += "</div>";
                                        
                                        // Teacher Info (For Students) or Subject (For Teachers)
                                        html += "<div class='flex items-center gap-3'>";
                                        html += "<img src='" + val.foto + "' alt='guru' class='w-10 h-10 rounded-full object-cover ring-2 ring-white dark:ring-gray-700 shadow-sm' />";
                                        html += "<div>";
                                        html += "<h3 class='font-bold text-gray-900 dark:text-white text-base'>" + val.mapel + "</h3>";
                                        html += "<p class='text-gray-500 dark:text-gray-400 text-sm flex items-center gap-1'>";
                                        html += "<svg class='w-3.5 h-3.5' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'></path></svg>";
                                        html += val.guru;
                                        html += "</p>";
                                        html += "</div>";
                                        html += "</div>";
                                        html += "</div>";

                                        // Location & Status Badge
                                        html += "<div class='flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-end pl-16 sm:pl-0'>";
                                        html += "<div class='flex items-center text-gray-600 dark:text-gray-300 text-sm bg-white dark:bg-gray-700 py-1.5 px-3 rounded-lg border border-gray-200 dark:border-gray-600'>";
                                        html += "<svg class='w-4 h-4 mr-1.5 text-red-500' fill='none' stroke='currentColor' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z'></path><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M15 11a3 3 0 11-6 0 3 3 0 016 0z'></path></svg>";
                                        html += val.ruang;
                                        html += "<span class='mx-2 text-gray-300 dark:text-gray-500'>|</span>";
                                        html += "<span class='font-medium text-blue-600 dark:text-blue-400'>" + val.kelas + "</span>";
                                        html += "</div>";
                                        
                                        // Status Indicator
                                        html += "<div class='relative flex items-center justify-center w-8 h-8 rounded-full bg-white dark:bg-gray-700 shadow-sm border border-gray-100 dark:border-gray-600'>";
                                        if (val.ket != null) {
                                            html += "<div class='w-3 h-3 rounded-full animate-pulse' style='background-color:#" + val.ket + "'></div>";
                                        } else {
                                            html += "<div class='w-3 h-3 bg-gray-300 rounded-full' title='Belum Mulai'></div>";
                                        }
                                        html += "</div>";
                                        html += "</div>";
                                        
                                        html += "</div>";
                                    });
                                    $("#data-jadwal").html(html);
                                },
                                error: function() {}
                            });
                        }
                    }
                }
            }, 60 * 1000);
        });

        $("#Dashboard").addClass("active");
        $("#liDashboard").addClass("menu-open");
        $("#Home").addClass("active");
    </script>
@endsection
