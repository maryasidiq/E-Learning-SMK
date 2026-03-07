@extends('layouts.app2')
@section('pageTitle', 'Detail Materi Pembelajaran')
@section('title', 'Detail Materi Pembelajaran')

@section('content')
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
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
                        <span>Materi Anda</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-2 text-gray-900 dark:text-white tracking-tight">{{ $materi->judul }}</h1>
                    <p class="text-gray-600 dark:text-gray-300 text-lg mb-6 max-w-2xl">{{ $materi->mapel->nama_mapel }}</p>

                    <div class="flex flex-wrap items-center gap-4">
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2 border border-gray-200 dark:border-gray-600 shadow-sm">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-9 0V1m10 3V1m0 3l1 1v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5l1-1z"></path></svg>
                            </div>
                            <span class="text-sm font-bold text-gray-900 dark:text-white uppercase">{{ ucfirst($materi->tipe) }}</span>
                        </div>
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2 border border-gray-200 dark:border-gray-600 shadow-sm">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <span class="text-sm font-bold text-gray-900 dark:text-white">{{ $materi->guru->nama_guru }}</span>
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
                            @if($materi->tipe == 'teks')
                                <svg class="w-16 h-16 lg:w-20 lg:h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            @elseif($materi->tipe == 'pdf')
                                <svg class="w-16 h-16 lg:w-20 lg:h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            @else
                                <svg class="w-16 h-16 lg:w-20 lg:h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                @if($materi->deskripsi)
                    <!-- Description Card -->
                    <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-8 shadow-xl hover:shadow-2xl transition-all duration-500">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-900/30 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Deskripsi Materi</h2>
                        </div>
                        <div class="prose prose-lg dark:prose-invert max-w-none">
                            {!! $materi->deskripsi !!}
                        </div>
                    </div>
                @endif

                @if($materi->tipe == 'teks' && $materi->konten)
                    <!-- Text Content Card -->
                    <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-8 shadow-xl hover:shadow-2xl transition-all duration-500">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/30 dark:to-cyan-900/30 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Konten Materi</h2>
                        </div>
                        <div class="ck-content prose prose-lg dark:prose-invert max-w-none p-6 bg-gray-50 dark:bg-gray-700/30 rounded-xl">
                            {!! $materi->konten !!}
                        </div>
                    </div>
                @elseif($materi->file_path)
                    <!-- File Content Card -->
                    <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-8 shadow-xl hover:shadow-2xl transition-all duration-500">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
    <div class="flex items-center">
        <div
            class="w-12 h-12 bg-gradient-to-br from-red-100 to-pink-100 dark:from-red-900/30 dark:to-pink-900/30 rounded-xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                </path>
            </svg>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">File Materi</h2>
            <p class="text-gray-600 dark:text-gray-400 break-words max-w-[250px] sm:max-w-none">
                {{ basename($materi->file_path) }}
            </p>
        </div>
    </div>

    <a href="{{ asset($materi->file_path) }}" target="_blank"
        class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 sm:px-6 sm:py-3
               bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700
               border border-transparent rounded-xl font-semibold text-sm sm:text-base text-white
               uppercase tracking-wide shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-500/25
               focus:ring-offset-2 transition-all duration-300 transform hover:scale-105">
        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        <span>Download File</span>
    </a>
</div>


                        @php
                            $extension = strtolower(pathinfo($materi->file_path, PATHINFO_EXTENSION));
                        @endphp
                        @if($materi->tipe == 'pdf' || ($materi->tipe == 'file' && $extension == 'pdf'))
                            <div class="rounded-xl overflow-hidden shadow-2xl">
                                <embed src="{{ asset($materi->file_path) }}" type="application/pdf" width="100%" height="600px" />
                            </div>
                        @elseif($materi->tipe == 'file' && in_array($extension, ['docx', 'ppt', 'pptx', 'doc', 'xls', 'xlsx']))
                            <div class="rounded-xl overflow-hidden shadow-2xl">
                                <iframe
                                    src="https://docs.google.com/viewer?url={{ urlencode(asset($materi->file_path)) }}&embedded=true"
                                    width="100%" height="600px" style="border: none;"></iframe>
                            </div>
                        @endif
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Info Card -->
                <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 shadow-xl hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-3 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Informasi Materi
                    </h3>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-50 dark:bg-gray-700/30 rounded-xl">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-3 text-blue-600 dark:text-blue-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Mata Pelajaran</p>
                                    <p class="font-semibold text-gray-900 dark:text-white">{{ $materi->mapel->nama_mapel }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-blue-50 dark:bg-blue-900/20 rounded-xl">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-9 0V1m10 3V1m0 3l1 1v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5l1-1z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Tipe Materi</p>
                                    <p class="font-semibold text-gray-900 dark:text-white">{{ ucfirst($materi->tipe) }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-purple-50 dark:bg-purple-900/20 rounded-xl">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Guru Pengajar</p>
                                    <p class="font-semibold text-gray-900 dark:text-white">{{ $materi->guru->nama_guru }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-amber-50 dark:bg-amber-900/20 rounded-xl">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Dibuat Pada</p>
                                    <p class="font-semibold text-gray-900 dark:text-white">{{ $materi->created_at->format('d M Y, H:i') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back Button Card -->
                <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 shadow-xl hover:shadow-2xl transition-all duration-500">
                    <a href="{{ route('materi.siswa') }}"
                        class="w-full inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest shadow-lg hover:shadow-xl focus:ring-4 focus:ring-gray-500/25 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02] hover:-translate-y-0.5 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></div>
                        <svg class="w-5 h-5 mr-3 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span class="relative z-10">Kembali ke Daftar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .ck-content h1,
    .ck-content h2,
    .ck-content h3 {
        font-weight: 600;
        margin-top: 1rem;
        color: #111827;
    }

    .dark .ck-content h1,
    .dark .ck-content h2,
    .dark .ck-content h3 {
        color: #f9fafb;
    }

    .ck-content ul {
        list-style: disc;
        margin-left: 1.5rem;
    }

    .ck-content ol {
        list-style: decimal;
        margin-left: 1.5rem;
    }

    .ck-content a {
        color: #2563eb;
        text-decoration: underline;
    }

    .ck-content a:hover {
        color: #1d4ed8;
    }

    .dark .ck-content a {
        color: #60a5fa;
    }

    .dark .ck-content a:hover {
        color: #93c5fd;
    }
</style>
