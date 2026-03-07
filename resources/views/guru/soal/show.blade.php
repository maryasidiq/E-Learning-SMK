@extends('layouts.app2')
@section('pageTitle', 'Detail Soal')
@section('title', 'Detail Soal')
@section('content')
<div class="max-w-5xl mx-auto">

    <!-- Header Section -->
    <div class="relative rounded-3xl p-8 sm:p-10 mb-8 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
        <!-- Decorative blobs -->
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-gradient-to-br from-blue-400/30 to-indigo-600/30 blur-3xl rounded-full"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-64 h-64 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 blur-3xl rounded-full"></div>

        <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="animate-fade-in flex-1">
                <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 px-3 py-1 rounded-full text-sm font-semibold mb-4 border border-blue-100 dark:border-blue-800">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    <span>Rincian Assessment</span>
                </div>

                <h1 class="text-3xl sm:text-4xl font-extrabold mb-2 text-gray-900 dark:text-white tracking-tight">{{ $soal->judul }}</h1>
                @if($soal->deskripsi)
                    <p class="text-gray-500 dark:text-gray-400 text-base mb-5 max-w-2xl">{!! $soal->deskripsi !!}</p>
                @endif

                <!-- Quick Stats -->
                <div class="flex flex-wrap items-center gap-3 mt-4">
                    <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm">
                        <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wider">Total Item</p>
                            <p class="text-sm font-bold text-gray-900 dark:text-white">{{ $soalDetail->count() }} Soal</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Illustration -->
            <div class="hidden md:flex justify-end items-center">
                <div class="relative w-28 h-28 lg:w-36 lg:h-36">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-500 to-indigo-500 rounded-3xl rotate-6 opacity-20 animate-pulse"></div>
                    <div class="absolute inset-0 bg-gradient-to-tr from-cyan-400 to-blue-500 rounded-3xl -rotate-6 opacity-40 shadow-xl"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-white drop-shadow-2xl">
                        <svg class="w-14 h-14 lg:w-18 lg:h-18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 mb-8">
        <!-- Mata Pelajaran -->
        <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-5 hover:shadow-lg hover:shadow-blue-500/10 transition-all duration-300">
            <div class="flex items-center">
                <div class="w-11 h-11 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center mr-4 shrink-0">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide mb-0.5">Mata Pelajaran</p>
                    <p class="text-base font-bold text-gray-900 dark:text-white">{{ $soal->mapel->nama_mapel }}</p>
                </div>
            </div>
        </div>

        <!-- Kelas -->
        <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-5 hover:shadow-lg hover:shadow-green-500/10 transition-all duration-300">
            <div class="flex items-center">
                <div class="w-11 h-11 bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center mr-4 shrink-0">
                    <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide mb-0.5">Kelas</p>
                    <p class="text-base font-bold text-gray-900 dark:text-white">{{ $soal->kelas->nama_kelas }}</p>
                </div>
            </div>
        </div>

        <!-- Waktu Mulai -->
        <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-5 hover:shadow-lg hover:shadow-blue-500/10 transition-all duration-300">
            <div class="flex items-center">
                <div class="w-11 h-11 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center mr-4 shrink-0">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide mb-0.5">Waktu Mulai</p>
                    <p class="text-base font-bold text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($soal->waktu_mulai)->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>

        <!-- Durasi -->
        <div class="bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-5 hover:shadow-lg hover:shadow-orange-500/10 transition-all duration-300">
            <div class="flex items-center">
                <div class="w-11 h-11 bg-orange-100 dark:bg-orange-900/30 rounded-xl flex items-center justify-center mr-4 shrink-0">
                    <svg class="w-5 h-5 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide mb-0.5">Durasi</p>
                    <p class="text-base font-bold text-gray-900 dark:text-white">{{ $soal->durasi }} menit</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
        <a href="{{ route('soal.edit', Crypt::encrypt($soal->id)) }}"
            class="group inline-flex items-center justify-center px-6 py-3.5 bg-gradient-to-r from-amber-500 to-yellow-500 hover:from-amber-600 hover:to-yellow-600 text-white rounded-xl font-bold text-sm uppercase tracking-widest shadow-lg hover:shadow-xl focus:ring-4 focus:ring-amber-400/30 transition-all duration-300 hover:-translate-y-0.5 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
            <svg class="w-5 h-5 mr-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            <span class="relative z-10">Edit Soal</span>
        </a>

        <a href="{{ route('soal.create-soal', Crypt::encrypt($soal->id)) }}"
            class="group inline-flex items-center justify-center px-6 py-3.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white rounded-xl font-bold text-sm uppercase tracking-widest shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-400/30 transition-all duration-300 hover:-translate-y-0.5 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
            <svg class="w-5 h-5 mr-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            <span class="relative z-10">+ Tambah Soal</span>
        </a>
    </div>

    <!-- Daftar Soal -->
    <div class="mb-8">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Daftar Soal</h2>
            </div>
            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-bold bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 border border-blue-100 dark:border-blue-800">
                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path></svg>
                {{ $soalDetail->count() }} Soal
            </span>
        </div>

        @if($soalDetail->count() > 0)
            <div class="space-y-5">
                @foreach($soalDetail as $index => $item)
                    <div class="group bg-white dark:bg-gray-800/50 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1 transition-all duration-300 overflow-hidden">

                        <!-- Card Header -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 p-5 border-b border-gray-100 dark:border-gray-700 bg-gray-50/50 dark:bg-gray-800/30">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-50 dark:bg-blue-900/40 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mr-4 border border-blue-100 dark:border-blue-800 shrink-0">
                                    <span class="text-sm font-bold">#{{ $index + 1 }}</span>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold text-gray-900 dark:text-white mb-1">Soal {{ $index + 1 }}</h3>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100/60 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300 border border-blue-200 dark:border-blue-800">
                                            {{ ucfirst(str_replace('_', ' ', $item->tipe)) }}
                                        </span>
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-indigo-100/60 text-indigo-800 dark:bg-indigo-900/30 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-800">
                                            Bobot: {{ $item->bobot }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-2 ml-14 sm:ml-0">
                                <a href="{{ route('soal.edit-soal', [Crypt::encrypt($soal->id), Crypt::encrypt($item->id)]) }}"
                                    class="inline-flex items-center px-3 py-1.5 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-700 dark:text-gray-200 text-xs font-semibold rounded-lg hover:bg-blue-50 hover:text-blue-600 hover:border-blue-200 transition-all duration-200">
                                    <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('soal.destroy-soal', [Crypt::encrypt($soal->id), Crypt::encrypt($item->id)]) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-3 py-1.5 bg-red-50 border border-red-200 text-red-600 dark:bg-red-900/20 dark:border-red-800 dark:text-red-400 text-xs font-semibold rounded-lg hover:bg-red-100 transition-all duration-200"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus soal ini?')">
                                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6">
                            @if($item->gambar && is_array($item->gambar))
                                <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 justify-items-center">
                                    @foreach($item->gambar as $gambar)
                                        @if($gambar)
                                            <img src="{{ asset('storage/' . $gambar) }}" alt="Gambar Soal" class="max-w-full max-h-32 w-auto h-auto rounded-xl shadow-md object-contain border border-gray-200 dark:border-gray-700">
                                        @endif
                                    @endforeach
                                </div>
                            @elseif($item->gambar)
                                <div class="mb-4 flex justify-center">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Soal" class="max-w-xs max-h-32 w-auto h-auto rounded-xl shadow-md object-contain border border-gray-200 dark:border-gray-700">
                                </div>
                            @endif

                            <style>
                                .pertanyaan-content ul { list-style-type: disc !important; padding-left: 1.5rem !important; }
                                .pertanyaan-content li { margin-bottom: 0.25rem !important; }
                            </style>
                            <div class="prose dark:prose-invert dark:text-white max-w-none pertanyaan-content mb-4">
                                {!! $item->pertanyaan !!}
                            </div>

                            @if($item->tipe == 'pilihan_ganda')
                                <div class="space-y-2">
                                    @foreach(['a' => 'A', 'b' => 'B', 'c' => 'C', 'd' => 'D', 'e' => 'E'] as $key => $label)
                                        @if($item->{"pilihan_$key"})
                                            <div class="flex items-start p-3 {{ $item->jawaban_benar == $key ? 'bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800' : 'bg-gray-50 dark:bg-gray-700/30' }} rounded-xl">
                                                <span class="font-bold mr-3 mt-0.5 {{ $item->jawaban_benar == $key ? 'text-green-600 dark:text-green-400' : 'text-blue-600 dark:text-blue-400' }}">{{ $label }}.</span>
                                                <div class="flex-1 dark:text-white">{!! $item->{"pilihan_$key"} !!}</div>
                                                @if($item->jawaban_benar == $key)
                                                    <span class="ml-3 shrink-0 text-green-600 font-bold bg-green-100 dark:bg-green-900/40 px-2 py-0.5 rounded-lg text-xs">✓ Benar</span>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-4 bg-orange-50 dark:bg-orange-900/20 border border-orange-200 dark:border-orange-800 rounded-xl">
                                    <svg class="w-7 h-7 text-orange-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    <div class="text-orange-800 dark:text-orange-200 font-semibold">Jawaban Essay</div>
                                    <p class="text-sm text-orange-600 dark:text-orange-300">Dinilai secara subjektif oleh guru</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20 bg-gray-50 dark:bg-gray-800/30 rounded-2xl border border-gray-200/50 dark:border-gray-700/50">
                <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Belum ada Soal</h3>
                <p class="text-gray-500 dark:text-gray-400 max-w-md mx-auto mb-8">Belum ada soal yang dibuat. Tambahkan soal pertama untuk memulai ujian ini.</p>
                <a href="{{ route('soal.create-soal', Crypt::encrypt($soal->id)) }}"
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold text-sm shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Tambah Soal Pertama
                </a>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <div class="flex justify-center mt-6 mb-2">
        <a href="{{ route('soal.index') }}"
            class="group inline-flex items-center px-6 py-3 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200 border border-gray-200 dark:border-gray-700 rounded-xl font-semibold text-sm shadow-sm hover:shadow-md transition-all duration-300">
            <svg class="w-4 h-4 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Daftar Soal
        </a>
    </div>

</div>

<style>
    .animate-fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(16px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection
