@extends('layouts.app2')
@section('pageTitle', 'Edit Nilai Siswa')
@section('title', 'Edit Nilai Siswa')

@section('content')
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="relative rounded-3xl p-8 sm:p-10 mb-8 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
            <!-- Decorative blobs -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-gradient-to-br from-blue-400/30 to-indigo-600/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-64 h-64 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 blur-3xl rounded-full"></div>

            <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div class="animate-fade-in">
                    <div class="inline-flex items-center space-x-2 bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-300 px-3 py-1 rounded-full text-sm font-semibold mb-4 border border-amber-100 dark:border-amber-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        <span>Edit Nilai</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold mb-2 text-gray-900 dark:text-white tracking-tight">Edit Nilai Siswa</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-base mb-5">Perbarui nilai akademik siswa dengan informasi yang akurat</p>
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Nama Siswa</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">{{ $siswa->nama_siswa }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm">
                            <div class="w-8 h-8 rounded-full bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center mr-3 text-indigo-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Mata Pelajaran</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">{{ $mapel->mapel->nama_mapel }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex justify-end items-center relative">
                    <div class="relative w-28 h-28">
                        <div class="absolute inset-0 bg-gradient-to-tr from-amber-500 to-yellow-400 rounded-3xl rotate-6 opacity-20 animate-pulse"></div>
                        <div class="absolute inset-0 bg-gradient-to-tr from-amber-400 to-yellow-400 rounded-3xl -rotate-6 opacity-40 shadow-xl"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white drop-shadow-2xl">
                            <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Info Siswa --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div
                class="bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 hover:shadow-xl hover:shadow-[#2563eb]/10 transition-all duration-300">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 bg-[#4f46e5]/20 dark:bg-[#2563eb]/20 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-[#2563eb]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Nama Siswa</p>
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">{{ $siswa->nama_siswa }}</p>
                    </div>
                </div>
            </div>

            <div
                class="bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 hover:shadow-xl hover:shadow-[#2563eb]/10 transition-all duration-300">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 bg-[#2563eb]/20 dark:bg-[#4f46e5]/20 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-[#2563eb]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">NIS</p>
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">{{ $siswa->no_induk }}</p>
                    </div>
                </div>
            </div>

            <div
                class="bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 hover:shadow-xl hover:shadow-[#2563eb]/10 transition-all duration-300">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 bg-[#4f46e5]/20 dark:bg-[#2563eb]/20 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-[#2563eb]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Kelas</p>
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">{{ $siswa->kelas->nama_kelas }}</p>
                    </div>
                </div>
            </div>

            <div
                class="bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 hover:shadow-xl hover:shadow-[#2563eb]/10 transition-all duration-300">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 bg-[#2563eb]/20 dark:bg-[#4f46e5]/20 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-[#2563eb]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Mata Pelajaran</p>
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">{{ $mapel->mapel->nama_mapel }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Form Edit Nilai --}}
        <div
            class="bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 overflow-hidden shadow-xl">
            <div class="px-8 py-6 border-b border-gray-100 dark:border-gray-700 flex items-center">
                <div class="w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-900/50 flex items-center justify-center mr-4 text-amber-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <div>
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Form Edit Nilai</h2>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Perbarui nilai siswa dengan informasi yang akurat</p>
                </div>
            </div>

            <div class="p-8">
                <form id="edit-nilai-form" class="space-y-6">
                    @csrf
                    @foreach($existingNilai as $judul => $nilaiList)
                        <div class="bg-gray-50 dark:bg-gray-800/50 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-6 text-gray-900 dark:text-white">{{ $judul }}</h3>
                            @foreach($nilaiList as $nilai)
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                    <div class="form-group">
                                        <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Nilai</label>
                                        <input type="number" name="nilai[{{ $nilai->id }}]" value="{{ $nilai->nilai }}" min="0"
                                            max="100"
                                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-[#2563eb] focus:border-[#2563eb] bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-all duration-200"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Bobot</label>
                                        <input type="number" name="bobot[{{ $nilai->id }}]" value="{{ $nilai->bobot }}" min="1"
                                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-[#2563eb] focus:border-[#2563eb] bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-all duration-200"
                                            readonly>
                                    </div>

                                    <div class="form-group">
                                        <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Sumber</label>
                                        <select name="sumber[{{ $nilai->id }}]"
                                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-[#2563eb] focus:border-[#2563eb] bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-all duration-200"
                                            disabled>
                                            <option value="manual" {{ $nilai->sumber == 'manual' ? 'selected' : '' }}>Manual</option>
                                            <option value="soal" {{ $nilai->sumber == 'soal' ? 'selected' : '' }}>Soal</option>
                                        </select>
                                    </div>

                                    <div class="form-group md:col-span-3" id="soal-input-{{ $nilai->id }}"
                                        style="display: {{ $nilai->sumber == 'soal' ? 'block' : 'none' }};">
                                        <label class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Pilih
                                            Soal</label>
                                        <select name="soal[{{ $nilai->id }}]"
                                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-[#2563eb] focus:border-[#2563eb] bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-all duration-200"
                                            disabled>
                                            <option value="">Pilih Soal</option>
                                            @foreach(\App\Soal::where('mapel_id', $mapel->mapel_id)->get() as $soal)
                                                <option value="{{ $soal->id }}" {{ $nilai->soal_id == $soal->id ? 'selected' : '' }}>
                                                    {{ $soal->judul }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </form>


            </div>
        </div>
        {{-- Action Buttons --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8 mt-8">
            <button type="submit" form="edit-nilai-form"
                class="group bg-gradient-to-r from-[#2563eb] to-[#4f46e5] hover:from-[#1d4ed8] hover:to-[#4338ca] border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-500/25 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02] hover:-translate-y-0.5 relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700">
                </div>
                <span class="relative z-10 flex items-center justify-center px-6 py-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    Simpan Perubahan
                </span>
            </button>
            <a href="{{ route('nilai.show', Crypt::encrypt($mapel->mapel_id)) }}"
                class="group bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest shadow-lg hover:shadow-xl focus:ring-4 focus:ring-gray-500/25 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02] hover:-translate-y-0.5 relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700">
                </div>
                <span class="relative z-10 flex items-center justify-center px-6 py-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Entry Nilai
                </span>
            </a>
        </div>
    </div>

    <script>
        // Toggle soal input based on sumber selection
        @foreach($existingNilai as $judul => $nilaiList)
            @foreach($nilaiList as $nilai)
                document.querySelector('select[name="sumber[{{ $nilai->id }}]"]').addEventListener('change', function () {
                    const soalInput = document.getElementById('soal-input-{{ $nilai->id }}');
                    if (this.value === 'soal') {
                        soalInput.style.display = 'block';
                    } else {
                        soalInput.style.display = 'none';
                    }
                });
            @endforeach
        @endforeach

        document.getElementById('edit-nilai-form').addEventListener('submit', function (e) {
            e.preventDefault();

            // Konfirmasi sebelum update
            const confirmed = confirm('Apakah Anda yakin ingin mengupdate nilai siswa ini?');
            if (!confirmed) return;

            const formData = new FormData(this);

            fetch('{{ route("guru.nilai.update", $siswa->id) }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        toastr.success(result.success);
                        setTimeout(() => {
                            window.location.href = '{{ route("nilai.show", Crypt::encrypt($mapel->mapel_id)) }}';
                        }, 2000);
                    } else {
                        toastr.error(result.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    toastr.error('Terjadi kesalahan saat menyimpan data');
                });
        });
    </script>
@endsection