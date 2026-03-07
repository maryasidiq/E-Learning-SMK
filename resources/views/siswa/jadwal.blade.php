@extends('layouts.app2')
@section('pageTitle', 'Jadwal')
@section('title', 'Jadwal')

@section('content')
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
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
                        <span>Jadwal Kelas {{ $kelas->nama_kelas }}</span>
                    </div>
                
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-2 text-gray-900 dark:text-white tracking-tight">Jadwal Pelajaran</h1>
                    <p class="text-gray-600 dark:text-gray-300 text-lg mb-6 max-w-2xl">Jadwal pelajaran untuk kelas Anda</p>

                    <!-- Quick Info Pill -->
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm transition-transform hover:-translate-y-1 duration-300">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Total Pelajaran</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">{{ $jadwal->count() }} Mata Pelajaran</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero Illustration / Dynamic Element -->
                <div class="hidden md:flex w-1/3 justify-end items-center relative animate-fade-in-up">
                    <div class="relative w-32 h-32 lg:w-40 lg:h-40">
                        <!-- Abstract Shape 1 -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-500 to-indigo-500 rounded-3xl rotate-6 opacity-20 animate-pulse"></div>
                        <!-- Abstract Shape 2 -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-cyan-400 to-blue-500 rounded-3xl -rotate-6 opacity-40 shadow-xl backdrop-blur-sm transition-transform hover:rotate-0 duration-500"></div>
                        <!-- Inner Icon/Graphic -->
                        <div class="absolute inset-0 flex items-center justify-center text-white drop-shadow-2xl">
                            <svg class="w-16 h-16 lg:w-20 lg:h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @foreach ($jadwal as $data)
                <div
                    class="group bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl hover:shadow-yellow-500/10 hover:-translate-y-2 transition-all duration-500 overflow-hidden relative">
                    <!-- Gradient Border Effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 via-amber-500/20 to-orange-500/20 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <!-- Card Header -->
                    <div class="relative bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 p-6">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 to-indigo-500/5"></div>
                        <div class="relative flex justify-between items-start">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mr-4 shadow-sm">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-1">{{ $data->mapel->nama_mapel }}</h3>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">{{ $data->guru->nama_guru }}</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-8 h-8 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg flex items-center justify-center font-bold shadow-sm">
                                    {{ $loop->iteration }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="relative p-6">
                        <div class="space-y-4 mb-6">
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700/30 rounded-xl">
                                <div class="flex items-center">
                                    <div
                                        class="w-8 h-8 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-yellow-600 dark:text-yellow-400" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Hari</p>
                                        <p class="font-semibold text-gray-900 dark:text-white">{{ $data->hari->nama_hari }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-3">
                                <div class="flex items-center justify-between p-3 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Jam
                                                Pelajaran</p>
                                            <p class="font-semibold text-gray-900 dark:text-white">{{ $data->jam_mulai }} -
                                                {{ $data->jam_selesai }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center justify-between p-3 bg-purple-50 dark:bg-purple-900/20 rounded-xl">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-purple-600 dark:text-purple-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Ruang
                                                Kelas</p>
                                            <p class="font-semibold text-gray-900 dark:text-white">
                                                {{ $data->ruang->nama_ruang }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if($jadwal->isEmpty())
            <div
                class="text-center py-20 bg-gradient-to-br from-gray-50 via-blue-50/30 to-indigo-50/30 dark:from-gray-800 dark:via-gray-700 dark:to-gray-800 rounded-2xl border border-gray-200/50 dark:border-gray-700/50 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-indigo-500/5 to-purple-500/5"></div>
                <div class="relative z-10">
                    <div class="mb-8 animate-bounce">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-900/30 rounded-full flex items-center justify-center mx-auto shadow-lg">
                            <svg class="w-12 h-12 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Belum ada jadwal</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-lg max-w-md mx-auto leading-relaxed">Belum ada jadwal
                        pelajaran yang tersedia untuk kelas Anda saat ini. Silakan tunggu pengumuman dari guru Anda.</p>
                    <div class="mt-8 flex justify-center">
                        <div
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-full font-medium shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pantau Pengumuman
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection