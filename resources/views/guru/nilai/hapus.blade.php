@extends('layouts.app2')
@section('pageTitle', 'Hapus Nilai')
@section('title', 'Hapus Nilai')

@section('content')
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="relative rounded-3xl p-8 sm:p-10 mb-8 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
            <!-- Decorative blobs -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-gradient-to-br from-red-400/20 to-rose-600/20 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-64 h-64 bg-gradient-to-tr from-blue-400/20 to-indigo-500/15 blur-3xl rounded-full"></div>

            <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                <div class="animate-fade-in">
                    <div class="inline-flex items-center space-x-2 bg-red-50 dark:bg-red-900/30 text-red-600 dark:text-red-300 px-3 py-1 rounded-full text-sm font-semibold mb-4 border border-red-100 dark:border-red-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        <span>Aksi Destruktif</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold mb-2 text-gray-900 dark:text-white tracking-tight">Hapus Nilai Siswa</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-base mb-5">Hapus nilai akademik siswa dengan hati-hati. Tindakan ini tidak dapat dibatalkan.</p>
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="flex items-center bg-gray-50 dark:bg-gray-700/50 rounded-xl px-4 py-2.5 border border-gray-200 dark:border-gray-600 shadow-sm">
                            <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-3 text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Mata Pelajaran</p>
                                <p class="text-sm font-bold text-gray-900 dark:text-white">{{ $mapel->mapel->nama_mapel }}</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-red-50 dark:bg-red-900/20 rounded-xl px-4 py-2.5 border border-red-100 dark:border-red-800">
                            <svg class="w-4 h-4 mr-2 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            <span class="text-sm font-semibold text-red-600 dark:text-red-400">Tidak dapat dibatalkan</span>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex justify-end items-center relative">
                    <div class="relative w-28 h-28">
                        <div class="absolute inset-0 bg-gradient-to-tr from-red-500 to-rose-500 rounded-3xl rotate-6 opacity-20 animate-pulse"></div>
                        <div class="absolute inset-0 bg-gradient-to-tr from-red-400 to-rose-500 rounded-3xl -rotate-6 opacity-40 shadow-xl"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white drop-shadow-2xl">
                            <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Info Kelas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
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
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">
                            {{ $kelas->pluck('nama_kelas')->join(', ') }}
                        </p>
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
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Wali Kelas</p>
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">
                            {{ $kelas->pluck('guru.nama_guru')->join(', ') }}
                        </p>
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
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Jumlah Siswa</p>
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">{{ $siswa->count() }} Siswa</p>
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
                                d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10m0 0l-2-2m2 2l2-2m6-6v6m0 0l2-2m-2 2l-2-2">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Semester</p>
                        @php
                            $bulan = date('m');
                            $tahun = date('Y');
                        @endphp
                        <p class="font-semibold text-gray-900 dark:text-white text-lg">{{ $bulan > 6 ? 'Ganjil' : 'Genap' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Table Preview --}}
        <div
            class="bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 overflow-hidden shadow-xl mb-8">
            <div class="bg-gradient-to-r from-[#2563eb] to-[#4f46e5] px-8 py-6">
                <h2 class="text-2xl font-bold text-white">Preview Nilai Siswa</h2>
                <p class="text-white/90 mt-1">Tinjau nilai sebelum menghapus</p>
            </div>
            <div class="overflow-x-auto">
                <table id="nilai-table"
                    class="min-w-full bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                    <thead class="bg-gradient-to-r from-[#2563eb] to-[#4f46e5] text-white">
                        <tr>
                            <th class="px-6 py-4 border border-gray-200 dark:border-gray-700 text-left font-semibold">No
                            </th>
                            <th class="px-6 py-4 border border-gray-200 dark:border-gray-700 text-left font-semibold">Nama
                                Siswa</th>
                            <th class="px-6 py-4 border border-gray-200 dark:border-gray-700 text-left font-semibold">NIS
                            </th>
                            <!-- Dynamic columns will be added here -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $s)
                            <tr
                                class="hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors duration-200 dark:text-white">
                                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700 dark:text-white">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700 font-medium dark:text-white">
                                    {{ $s->nama_siswa }}
                                </td>
                                <td class="px-6 py-4 border border-gray-200 dark:border-gray-700 dark:text-white">
                                    {{ $s->no_induk }}
                                </td>
                                <!-- More cells will be added dynamically -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Form Hapus Nilai --}}
        <div
            class="bg-white dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-gray-200/50 dark:border-gray-700/50 overflow-hidden shadow-xl">
            <div class="bg-gradient-to-r from-[#2563eb] to-[#4f46e5] px-8 py-6">
                <h2 class="text-2xl font-bold text-white">Form Hapus Nilai</h2>
                <p class="text-white/90 mt-1">Pilih nilai yang ingin dihapus dengan hati-hati</p>
            </div>

            <div class="p-8">
                <form id="hapus-nilai-form" method="POST" action="{{ route('nilai.destroy', $mapel->mapel_id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="mb-6">
                        <label for="judul_nilai" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">Nama
                            Nilai</label>
                        <select
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-[#2563eb] focus:border-[#2563eb] bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-all duration-200"
                            id="judul_nilai" name="judul_nilai" required>
                            <option value="">Pilih Nama Nilai</option>
                            @foreach($existingNilai as $judul => $nilai)
                                <option value="{{ $judul }}">{{ $judul }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8 mt-8">
            <button type="submit" id="hapus-nilai-btn" form="hapus-nilai-form"
                class="group bg-gradient-to-r from-[#2563eb] to-[#4f46e5] hover:from-[#1d4ed8] hover:to-[#4338ca] border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-500/25 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02] hover:-translate-y-0.5 relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/10 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700">
                </div>
                <span class="relative z-10 flex items-center justify-center px-6 py-4">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                        </path>
                    </svg>
                    Hapus Nilai
                </span>
            </button>
            <a href="{{ route('nilai.show', $mapel->mapel_id) }}"
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
        // Existing nilai data
        const existingNilaiData = @json($existingNilai ?? collect());

        // Siswa data
        const siswaData = @json($siswa);

        // Load existing nilai columns on page load
        document.addEventListener('DOMContentLoaded', function () {
            const table = document.getElementById('nilai-table');
            const thead = table.querySelector('thead tr');
            const tbody = table.querySelector('tbody');

            // Get unique judul_nilai from existing data
            const judulList = Object.keys(existingNilaiData);

            judulList.forEach(function (judul, index) {
                // Add header
                const thNilai = document.createElement('th');
                thNilai.className = 'px-4 py-2 border';
                thNilai.textContent = judul;
                thead.insertBefore(thNilai, thead.lastElementChild);

                // Add cells to each row
                tbody.querySelectorAll('tr').forEach((row, rowIndex) => {
                    const siswaId = {{ $siswa->pluck('id')->toJson() }}[rowIndex];
                    const existingNilai = existingNilaiData[judul] && existingNilaiData[judul][siswaId] ? existingNilaiData[judul][siswaId][0] : null;

                    const tdNilai = document.createElement('td');
                    tdNilai.className = 'px-4 py-2 border';
                    tdNilai.textContent = existingNilai ? existingNilai.nilai : '-';
                    row.insertBefore(tdNilai, row.lastElementChild);
                });
            });
        });
    </script>
@endsection