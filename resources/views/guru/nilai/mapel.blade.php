@extends('layouts.app2')
@section('pageTitle', 'Entry Nilai')
@section('title', 'Entry Nilai')

@section('content')
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="relative rounded-3xl p-8 sm:p-10 mb-8 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
            <!-- Decorative blobs -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-gradient-to-br from-blue-400/30 to-indigo-600/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-64 h-64 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 blur-3xl rounded-full"></div>

            <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div class="animate-fade-in">
                    <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-semibold mb-4 border border-blue-100 dark:border-blue-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Pilih Mata Pelajaran</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold mb-2 text-gray-900 dark:text-white tracking-tight">Entry Nilai Akademik</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-base mb-5">Pilih mata pelajaran untuk memasukkan nilai siswa</p>
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Mata Pelajaran</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">{{ $mapel->count() }} Mapel</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex justify-end items-center relative">
                    <div class="relative w-28 h-28">
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-500 to-indigo-500 rounded-3xl rotate-6 opacity-20 animate-pulse"></div>
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-400 to-indigo-500 rounded-3xl -rotate-6 opacity-40 shadow-xl"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white drop-shadow-2xl">
                            <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Daftar Mata Pelajaran --}}
        @if($mapel->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @php $no = 1; @endphp
                @foreach ($mapel as $mapel_id => $jadwals)
                    @php
                        $jadwalsGrouped = $jadwals->groupBy('mapel_id');
                    @endphp
                    @foreach ($jadwalsGrouped as $mapelId => $jadwalGroup)
                        <div
                            class="group bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl hover:shadow-[#2563eb]/20 hover:-translate-y-2 transition-all duration-500 overflow-hidden relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#2563eb]/15 to-[#4f46e5]/15 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Header -->
                            <div class="relative border-b border-gray-100 dark:border-gray-700 p-5">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <div class="w-11 h-11 bg-blue-100 dark:bg-blue-900/50 rounded-xl flex items-center justify-center mr-4 text-blue-600">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-base font-bold text-gray-900 dark:text-white mb-1">{{ $jadwalGroup->first()->mapel->nama_mapel }}</h3>
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 border border-blue-100 dark:border-blue-800">
                                                Entry Nilai
                                            </span>
                                        </div>
                                    </div>
                                    <div class="w-8 h-8 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                                        <span class="text-xs font-bold text-gray-600 dark:text-gray-300">{{ $no++ }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="relative p-6">
                                <div class="space-y-4 mb-6">
                                    <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700/30 rounded-xl">
                                        <div class="flex items-center">
                                            <div
                                                class="w-8 h-8 bg-[#4f46e5]/20 dark:bg-[#2563eb]/20 rounded-lg flex items-center justify-center mr-3">
                                                <svg class="w-4 h-4 text-[#2563eb]" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Kelas
                                                    Mengajar</p>
                                                <p class="font-semibold text-gray-900 dark:text-white text-lg">
                                                    @php
                                                        $kelasNames = $jadwalGroup->pluck('kelas.nama_kelas')->unique()->sort();
                                                    @endphp
                                                    {{ $kelasNames->join(', ') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between p-3 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                                        <div class="flex items-center">
                                            <div
                                                class="w-8 h-8 bg-[#2563eb]/10 dark:bg-[#2563eb]/30 rounded-lg flex items-center justify-center mr-3">
                                                <svg class="w-4 h-4 text-[#2563eb]" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Jumlah Kelas
                                                </p>
                                                <p class="font-semibold text-gray-900 dark:text-white text-lg">
                                                    {{ $kelasNames->count() }} Kelas
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('nilai.show', Crypt::encrypt($mapel_id)) }}"
                                    class="group/btn w-full inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-[#2563eb] to-[#4f46e5] hover:from-[#1d4ed8] hover:to-[#4338ca] border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-500/25 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02] hover:-translate-y-0.5 relative overflow-hidden">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700">
                                    </div>
                                    <span class="relative z-10">Entry Nilai</span>
                                    <svg class="w-5 h-5 ml-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        @else
            <div
                class="text-center py-20 bg-gradient-to-br from-gray-50 to-[#4f46e5]/10 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-gray-200/50 dark:border-gray-700/50 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#2563eb]/10 to-[#4f46e5]/10"></div>
                <div class="relative z-10">
                    <div class="mb-8 animate-bounce">
                        <div
                            class="w-24 h-24 bg-[#4f46e5]/30 dark:bg-[#2563eb]/30 rounded-full flex items-center justify-center mx-auto shadow-lg">
                            <svg class="w-12 h-12 text-[#2563eb]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Belum ada Mata Pelajaran</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-lg max-w-md mx-auto leading-relaxed">Belum ada mata
                        pelajaran yang tersedia untuk entry nilai. Silakan hubungi administrator.</p>
                </div>
            </div>
        @endif
    </div>
@endsection