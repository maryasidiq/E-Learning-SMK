@extends('layouts.app2')
@section('pageTitle', 'Detail Soal')
@section('title', 'Detail Soal')
@section('content')
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <!-- Header Section -->
        <div class="relative rounded-3xl p-8 sm:p-10 mb-8 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
            <!-- Decorative Backgrounds -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-gradient-to-br from-blue-400/30 to-indigo-600/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-64 h-64 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 blur-3xl rounded-full"></div>
            
            <div class="relative z-10">
                <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-semibold mb-4 border border-blue-100 dark:border-blue-800">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    <span>Detail Evaluasi</span>
                </div>
                
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div class="flex-1">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/50 text-blue-600 rounded-xl flex items-center justify-center mr-4 shadow-sm border border-blue-200 dark:border-blue-800">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">{{ $soal->judul }}</h1>
                                <p class="text-gray-600 dark:text-gray-300 text-lg">Informasi lengkap tentang evaluasi ini</p>
                            </div>
                        </div>
                        @if($soal->deskripsi)
                            <div class="bg-gray-50/80 dark:bg-gray-700/50 backdrop-blur-sm rounded-xl p-5 border border-gray-200 dark:border-gray-600 mt-4 shadow-inner">
                                <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Deskripsi Singkat
                                </h4>
                                <div class="text-gray-600 dark:text-gray-300 leading-relaxed text-sm prose dark:prose-invert max-w-none">
                                    {!! $soal->deskripsi !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Soal Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-6 mb-8">
            <div
                class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 p-6 rounded-xl border border-blue-200 dark:border-blue-800 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-500 dark:bg-gray-800 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-blue-700 dark:text-white">Mata Pelajaran</h3>
                        <p class="text-lg font-bold text-blue-900 dark:text-white">{{ $soal->mapel->nama_mapel }}</p>
                    </div>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 p-6 rounded-xl border border-green-200 dark:border-green-800 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-500 dark:bg-gray-800 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-green-700 dark:text-white">Kelas</h3>
                        <p class="text-lg font-bold text-green-900 dark:text-white">{{ $soal->kelas->nama_kelas }}</p>
                    </div>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 p-6 rounded-xl border border-purple-200 dark:border-purple-800 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-purple-500 dark:bg-gray-800 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-purple-700 dark:text-white">Waktu Mulai</h3>
                        <p class="text-lg font-bold text-purple-900 dark:text-white">
                            {{ \Carbon\Carbon::parse($soal->waktu_mulai)->format('d/m/Y H:i') }}
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 p-6 rounded-xl border border-orange-200 dark:border-orange-800 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-orange-500 dark:bg-gray-800 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-orange-700 dark:text-white">Waktu Selesai</h3>
                        <p class="text-lg font-bold text-orange-900 dark:text-white">
                            {{ \Carbon\Carbon::parse($soal->waktu_selesai)->format('d/m/Y H:i') }}
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-red-50 to-red-100 dark:from-red-900/20 dark:to-red-800/20 p-6 rounded-xl border border-red-200 dark:border-red-800 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-red-500 dark:bg-gray-800 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-red-700 dark:text-white">Durasi</h3>
                        <p class="text-lg font-bold text-red-900 dark:text-white">{{ $soal->durasi }} menit</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Pengerjaan -->
        <div class="mb-8">
            @if($sudahMengerjakan)
                <div class="bg-white dark:bg-gray-800 backdrop-blur-sm border border-emerald-200 dark:border-emerald-800/50 p-6 rounded-2xl shadow-lg relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/5 to-teal-500/5"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-emerald-100 dark:bg-emerald-900/50 rounded-2xl flex items-center justify-center mr-5 shadow-inner border border-emerald-200 dark:border-emerald-800">
                                <svg class="w-7 h-7 text-emerald-600 dark:text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-emerald-800 dark:text-emerald-400 mb-1">Evaluasi Selesai</h3>
                                <p class="text-emerald-600/80 dark:text-emerald-500/80 font-medium">Anda telah menyelesaikan evaluasi ini</p>
                            </div>
                        </div>

                        @php
                            $siswa = Auth::user()->siswa(Auth::user()->no_induk);
                            $nilaiAkhir = \App\JawabanSoal::where('Soal_id', $soal->id)
                                ->where('siswa_id', $siswa->id)
                                ->first()->nilai_akhir ?? 0;
                        @endphp
                        @if($soal->show_nilai ?? false)
                            <div class="bg-gray-50 dark:bg-gray-800/80 rounded-xl p-5 border border-gray-200 dark:border-gray-700 mt-4 shadow-sm flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg flex items-center justify-center mr-4">
                                         <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Hasil Evaluasi</span>
                                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Nilai Akhir Anda</span>
                                    </div>
                                </div>
                                <div class="px-6 py-3 bg-white dark:bg-gray-900 rounded-lg shadow-inner border border-gray-100 dark:border-gray-800">
                                    <span class="text-3xl font-black {{ $nilaiAkhir >= 70 ? 'text-emerald-600 dark:text-emerald-400' : ($nilaiAkhir >= 50 ? 'text-amber-500' : 'text-rose-600 dark:text-rose-400') }}">
                                        {{ number_format($nilaiAkhir, 1) }}
                                    </span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @else
                <div class="bg-white dark:bg-gray-800 backdrop-blur-sm border border-amber-200 dark:border-amber-800/50 p-6 rounded-2xl shadow-lg relative overflow-hidden group">
                     <div class="absolute inset-0 bg-gradient-to-r from-amber-500/5 to-orange-500/5"></div>
                    <div class="relative z-10 flex items-center">
                        <div class="w-14 h-14 bg-amber-100 dark:bg-amber-900/50 rounded-2xl flex items-center justify-center mr-5 shadow-inner border border-amber-200 dark:border-amber-800">
                            <svg class="w-7 h-7 text-amber-600 dark:text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-amber-800 dark:text-amber-400 mb-1">Belum Dikerjakan</h3>
                            <p class="text-amber-700/80 dark:text-amber-500/80 font-medium">Anda belum memulai evaluasi ini. Segera kerjakan sebelum waktu habis!</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <a href="{{ route('soal.siswa') }}"
                class="inline-flex items-center px-6 py-3 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-xl font-semibold text-sm text-gray-700 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-200 dark:hover:bg-gray-700 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                Kembali ke Daftar Soal
            </a>

            @if(!$sudahMengerjakan)
                <a href="{{ route('soal.siswa.kerjakan', Crypt::encrypt($soal->id)) }}"
                    class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-green-600 to-emerald-600 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-widest hover:from-green-700 hover:to-emerald-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105"
                    onclick="return confirm('Apakah Anda yakin ingin memulai Soal? Setelah memulai, Anda akan memiliki waktu {{ $soal->durasi }} menit untuk menyelesaikan Soal ini. Pastikan koneksi internet Anda stabil dan jangan refresh halaman selama mengerjakan Soal.')">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l.707.707A1 1 0 0012.414 11H13m-3 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    Mulai Mengerjakan
                </a>
            @endif
        </div>
    </div>
@endsection