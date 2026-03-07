@extends('layouts.app2')
@section('pageTitle', 'Panduan Pengguna')
@section('title', 'Panduan Pengguna Sistem Informasi Akademik SMP Negeri 2 Mlati')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Hero Header -->
        <div class="relative rounded-3xl p-8 sm:p-12 mb-10 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
            <!-- Decorative blobs -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-gradient-to-br from-blue-400/30 to-indigo-600/30 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-72 h-72 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 blur-3xl rounded-full"></div>
            
            <div class="relative z-10 text-center max-w-2xl mx-auto">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/50 rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-sm border border-blue-200 dark:border-blue-800">
                    <svg class="w-9 h-9 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold mb-3 text-gray-900 dark:text-white tracking-tight">Panduan Pengguna</h1>
                <p class="text-gray-500 dark:text-gray-400 text-lg">Sistem Informasi Akademik untuk SMK</p>
            </div>
        </div>

        <!-- Table of Contents -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl p-7 mb-10 shadow-lg border border-gray-100 dark:border-gray-700">
            <h2 class="text-xl font-bold mb-5 text-gray-900 dark:text-white flex items-center">
                <span class="w-8 h-8 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center mr-3 text-blue-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                </span>
                Daftar Isi
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4 border border-gray-200 dark:border-gray-600">
                    <h3 class="font-semibold text-sm mb-3 text-blue-600 dark:text-blue-400 uppercase tracking-wider flex items-center">
                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Umum
                    </h3>
                    <ul class="space-y-1.5">
                        <li><a href="#pendahuluan" class="text-sm text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-blue-400 mr-2"></span>Pendahuluan</a></li>
                        <li><a href="#login" class="text-sm text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-blue-400 mr-2"></span>Cara Login</a></li>
                        <li><a href="#dashboard" class="text-sm text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-blue-400 mr-2"></span>Dashboard</a></li>
                    </ul>
                </div>
                @if(Auth::user()->role == 'Siswa')
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4 border border-gray-200 dark:border-gray-600">
                        <h3 class="font-semibold text-sm mb-3 text-emerald-600 dark:text-emerald-400 uppercase tracking-wider flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            Untuk Siswa
                        </h3>
                        <ul class="space-y-1.5">
                            <li><a href="#siswa-jadwal" class="text-sm text-gray-600 dark:text-gray-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-emerald-400 mr-2"></span>Melihat Jadwal</a></li>
                            <li><a href="#siswa-materi" class="text-sm text-gray-600 dark:text-gray-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-emerald-400 mr-2"></span>Mengakses Materi</a></li>
                            <li><a href="#siswa-soal" class="text-sm text-gray-600 dark:text-gray-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-emerald-400 mr-2"></span>Mengerjakan Soal</a></li>
                            <li><a href="#siswa-rapot" class="text-sm text-gray-600 dark:text-gray-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-emerald-400 mr-2"></span>Melihat Nilai Akademik</a></li>
                        </ul>
                    </div>
                @endif
                @if(Auth::user()->role == 'Guru')
                    <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4 border border-gray-200 dark:border-gray-600">
                        <h3 class="font-semibold text-sm mb-3 text-purple-600 dark:text-purple-400 uppercase tracking-wider flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            Untuk Guru
                        </h3>
                        <ul class="space-y-1.5">
                            <li><a href="#guru-materi" class="text-sm text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-purple-400 mr-2"></span>Upload Materi</a></li>
                            <li><a href="#guru-soal" class="text-sm text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-purple-400 mr-2"></span>Membuat Soal</a></li>
                            <li><a href="#guru-nilai" class="text-sm text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-purple-400 mr-2"></span>Input Nilai Akademik</a></li>
                        </ul>
                    </div>
                @endif
                <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4 border border-gray-200 dark:border-gray-600">
                    <h3 class="font-semibold text-sm mb-3 text-orange-600 dark:text-orange-400 uppercase tracking-wider flex items-center">
                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Lainnya
                    </h3>
                    <ul class="space-y-1.5">
                        <li><a href="#pengaturan" class="text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-orange-400 mr-2"></span>Pengaturan Profil</a></li>
                        <li><a href="#bantuan" class="text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400 transition-colors flex items-center"><span class="w-1 h-1 rounded-full bg-orange-400 mr-2"></span>Bantuan & Dukungan</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="space-y-6">
            <!-- Pendahuluan -->
            <section id="pendahuluan" class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md border border-gray-100 dark:border-gray-700">
                <div class="p-1 bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                <div class="p-7">
                    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 flex items-center justify-center text-sm font-black mr-3">1</span>
                        Pendahuluan
                    </h2>
                    <div class="prose prose-lg dark:prose-invert max-w-none">
                        <p>Sistem Informasi Akademik ini (E-Learning SMK) adalah platform e-learning yang dirancang
                            untuk memfasilitasi proses pembelajaran di sekolah. Sistem ini menyediakan berbagai fitur untuk
                            siswa, guru, dan administrator sekolah.</p>
                        <p>Sistem ini dibangun dengan teknologi modern untuk memastikan kemudahan penggunaan dan keamanan data.
                            Panduan ini akan membantu Anda memahami cara menggunakan sistem ini secara efektif.</p>
                    </div>
                </div>
            </section>

            <!-- Login -->
            <section id="login" class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md border border-gray-100 dark:border-gray-700">
                <div class="p-1 bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                <div class="p-7">
                    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 flex items-center justify-center text-sm font-black mr-3">2</span>
                        Cara Login
                    </h2>
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                        <div class="lg:col-span-3">
                            <h3 class="text-base font-semibold mb-3 text-gray-800 dark:text-gray-200">Langkah-langkah Login:</h3>
                            <ol class="space-y-2">
                                @foreach(['Buka browser dan akses alamat website sekolah', 'Klik tombol "Login" di halaman utama', 'Masukkan email dan password yang telah diberikan', 'Klik tombol "Masuk"', 'Anda akan diarahkan ke dashboard sesuai role Anda'] as $step => $text)
                                    <li class="flex items-start">
                                        <span class="w-6 h-6 rounded-full bg-blue-600 text-white text-xs font-bold flex items-center justify-center mr-3 mt-0.5 shrink-0">{{ $step + 1 }}</span>
                                        <span class="text-gray-600 dark:text-gray-300 text-sm">{{ $text }}</span>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="lg:col-span-2">
                            <div class="bg-amber-50 dark:bg-amber-900/20 rounded-xl p-5 border border-amber-100 dark:border-amber-800">
                                <h4 class="font-semibold mb-3 text-amber-800 dark:text-amber-300 flex items-center text-sm">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                    Catatan Penting
                                </h4>
                                <ul class="space-y-2 text-sm text-amber-700 dark:text-amber-300">
                                    <li class="flex items-start"><span class="mr-2">•</span>Pastikan menggunakan email yang valid</li>
                                    <li class="flex items-start"><span class="mr-2">•</span>Password bersifat case-sensitive</li>
                                    <li class="flex items-start"><span class="mr-2">•</span>Jika lupa password, hubungi administrator</li>
                                    <li class="flex items-start"><span class="mr-2">•</span>Sistem akan logout otomatis setelah 2 jam tidak aktif</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dashboard -->
            <section id="dashboard" class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md border border-gray-100 dark:border-gray-700">
                <div class="p-1 bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                <div class="p-7">
                    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 flex items-center justify-center text-sm font-black mr-3">3</span>
                        Dashboard
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-5">Dashboard adalah halaman utama setelah login yang menampilkan informasi penting secara ringkas dan real-time.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach(['Jadwal pelajaran hari ini' => 'blue', 'Pengumuman sekolah' => 'emerald', 'Tanggal dan waktu real-time' => 'purple'] as $fitur => $color)
                        <div class="flex items-center p-4 bg-{{ $color }}-50 dark:bg-{{ $color }}-900/20 rounded-xl border border-{{ $color }}-100 dark:border-{{ $color }}-800">
                            <div class="w-10 h-10 bg-{{ $color }}-500/20 rounded-lg flex items-center justify-center mr-3">
                                <div class="w-3 h-3 rounded-full bg-{{ $color }}-500"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-800 dark:text-gray-200">{{ $fitur }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            @if(Auth::user()->role == 'Siswa')
                <!-- Siswa Sections -->
                <section id="siswa-jadwal" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                    <h2 class="text-3xl font-bold mb-6 text-green-600 dark:text-green-400">Untuk Siswa - Melihat Jadwal</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Cara Melihat Jadwal:</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Login sebagai siswa</li>
                                <li>Klik menu "Jadwal" di sidebar</li>
                                <li>Pilih "Jadwal Siswa"</li>
                                <li>Lihat jadwal pelajaran Anda</li>
                            </ol>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4">
                            <p class="text-sm text-green-700 dark:text-green-300">Jadwal menampilkan mata pelajaran, waktu,
                                ruangan, dan nama guru pengajar.</p>
                        </div>
                    </div>
                </section>

                <section id="siswa-materi" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                    <h2 class="text-3xl font-bold mb-6 text-green-600 dark:text-green-400">Untuk Siswa - Mengakses Materi</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Cara Mengakses Materi:</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Klik menu "Materi" di sidebar</li>
                                <li>Pilih "Materi Siswa"</li>
                                <li>Browse materi yang tersedia</li>
                                <li>Klik judul materi untuk melihat detail</li>
                                <li>Download file materi jika diperlukan</li>
                            </ol>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4">
                            <p class="text-sm text-green-700 dark:text-green-300">Materi berisi file PDF, dokumen, atau video
                                pembelajaran yang diupload oleh guru.</p>
                        </div>
                    </div>
                </section>

                <section id="siswa-soal" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                    <h2 class="text-3xl font-bold mb-6 text-green-600 dark:text-green-400">Untuk Siswa - Mengerjakan Soal</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Cara Mengerjakan Soal:</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Klik menu "Soal" di sidebar</li>
                                <li>Pilih "Soal Siswa"</li>
                                <li>Klik tombol "Kerjakan" pada soal yang tersedia</li>
                                <li>Jawab pertanyaan sesuai instruksi</li>
                                <li>Klik "Simpan Jawaban" setelah selesai</li>
                            </ol>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4">
                            <p class="text-sm text-green-700 dark:text-green-300">Soal dapat berupa pilihan ganda, essay, atau
                                upload file. Pastikan mengerjakan sebelum batas waktu habis.</p>
                        </div>
                    </div>
                </section>

                <!-- <section id="siswa-nilai" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                            <h2 class="text-3xl font-bold mb-6 text-green-600 dark:text-green-400">Untuk Siswa - Melihat Nilai</h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-xl font-semibold mb-4">Cara Melihat Nilai:</h3>
                                    <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                        <li>Klik menu "Soal " di sidebar</li>
                                        <li>Pilih "Nilai Siswa"</li>
                                        <li>Lihat nilai per mata pelajaran</li>
                                        <li>Klik detail untuk melihat breakdown nilai</li>
                                    </ol>
                                </div>
                                <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4">
                                    <p class="text-sm text-green-700 dark:text-green-300">Nilai mencakup nilai ulangan, tugas, dan nilai
                                        akhir. Hubungi guru jika ada pertanyaan.</p>
                                </div>
                            </div>
                        </section> -->

                <section id="siswa-rapot" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                    <h2 class="text-3xl font-bold mb-6 text-green-600 dark:text-green-400">Untuk Siswa - Melihat Nilai Akademik
                    </h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Cara Melihat Nilai Akademik:</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Klik menu "nilai" di sidebar</li>
                                <li>Pilih "Lihat Lainnya"</li>
                                <li>Lihat nilai akhir dan predikat</li>
                                <li>Download nilai jika tersedia</li>
                            </ol>
                        </div>
                        <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-4">
                            <p class="text-sm text-green-700 dark:text-green-300">Nilai akademik berisi nilai akhir semester dan
                                penilaian sikap siswa.</p>
                        </div>
                    </div>
                </section>
            @endif

            @if(Auth::user()->role == 'Guru')
                <!-- Guru Sections -->
                <!-- <section id="guru-absen" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                            <h2 class="text-3xl font-bold mb-6 text-purple-600 dark:text-purple-400">Untuk Guru - Mengisi Absensi</h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-xl font-semibold mb-4">Cara Mengisi Absensi:</h3>
                                    <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                        <li>Klik menu "Absen" di sidebar</li>
                                        <li>Pilih "Absen Harian"</li>
                                        <li>Pilih tanggal yang diinginkan</li>
                                        <li>Isi status kehadiran untuk setiap siswa</li>
                                        <li>Klik "Simpan" untuk menyimpan data</li>
                                    </ol>
                                </div>
                                <div class="bg-purple-50 dark:bg-purple-900/20 rounded-lg p-4">
                                    <p class="text-sm text-purple-700 dark:text-purple-300">Status absensi: Hadir (hijau), Sakit
                                        (kuning), Izin (biru), Alpha (merah).</p>
                                </div>
                            </div>
                        </section> -->



                <section id="guru-materi" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                    <h2 class="text-3xl font-bold mb-6 text-purple-600 dark:text-purple-400">Untuk Guru - Upload Materi</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Cara Upload Materi:</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Klik menu "Materi" di sidebar</li>
                                <li>Klik "Tambah Materi Baru"</li>
                                <li>Isi judul dan deskripsi</li>
                                <li>Upload file (PDF, DOC, PPT, dll)</li>
                                <li>Pilih kelas dan mapel terkait</li>
                                <li>Klik "Simpan"</li>
                            </ol>
                        </div>
                        <div class="bg-purple-50 dark:bg-purple-900/20 rounded-lg p-4">
                            <p class="text-sm text-purple-700 dark:text-purple-300">Materi akan dapat diakses siswa sesuai kelas
                                yang dipilih. Ukuran file maksimal 10MB.</p>
                        </div>
                    </div>
                </section>

                <section id="guru-soal" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                    <h2 class="text-3xl font-bold mb-6 text-purple-600 dark:text-purple-400">Untuk Guru - Membuat Soal</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Cara Membuat Soal:</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Klik menu "Soal" di sidebar</li>
                                <li>Klik "Tambah Soal Baru"</li>
                                <li>Isi judul dan deskripsi soal</li>
                                <li>Tambah pertanyaan satu per satu</li>
                                <li>Pilih tipe jawaban (pilihan ganda, essay)</li>
                                <li>Set waktu pengerjaan dan nilai</li>
                                <li>Klik "Simpan"</li>
                            </ol>
                        </div>
                        <div class="bg-purple-50 dark:bg-purple-900/20 rounded-lg p-4">
                            <p class="text-sm text-purple-700 dark:text-purple-300">Soal dapat dibuat dari template Excel atau
                                manual. Siswa dapat mengerjakan secara online.</p>
                        </div>
                    </div>
                </section>
                <section id="guru-nilai" class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl">
                    <h2 class="text-3xl font-bold mb-6 text-purple-600 dark:text-purple-400">Untuk Guru - Input Nilai Akademik
                    </h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Cara Input Nilai Akademik:</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Klik menu "Nilai" di sidebar</li>
                                <li>Pilih mata pelajaran Anda</li>
                                <li>Klik "Tambah Nilai" untuk siswa tertentu</li>
                                <li>Isi nilai ulangan, tugas, dll</li>
                                <li>Klik "Update" untuk menyimpan</li>
                            </ol>
                        </div>
                        <div class="bg-purple-50 dark:bg-purple-900/20 rounded-lg p-4">
                            <p class="text-sm text-purple-700 dark:text-purple-300">Nilai dapat diinput per siswa atau massal.
                                Pastikan nilai sudah benar sebelum disimpan.</p>
                        </div>
                    </div>
                </section>
            @endif



            <!-- Pengaturan -->
            <section id="pengaturan" class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md border border-gray-100 dark:border-gray-700">
                <div class="p-1 bg-gradient-to-r from-orange-400 to-amber-400"></div>
                <div class="p-7">
                    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-orange-100 dark:bg-orange-900/50 text-orange-600 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </span>
                        Pengaturan Profil
                    </h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                            <h3 class="text-base font-semibold mb-3 text-gray-800 dark:text-gray-200">Mengubah Profil:</h3>
                            <ol class="space-y-2">
                                @foreach(['Klik menu "Profile" di sidebar', 'Pilih "Pengaturan Profile"', 'Edit data pribadi (nama, email, dll)', 'Upload foto profil baru', 'Klik "Ubah Profile" untuk menyimpan'] as $step => $text)
                                    <li class="flex items-start">
                                        <span class="w-5 h-5 rounded-full bg-orange-400 text-white text-xs font-bold flex items-center justify-center mr-2.5 mt-0.5 shrink-0">{{ $step+1 }}</span>
                                        <span class="text-gray-600 dark:text-gray-300 text-sm">{{ $text }}</span>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                            <h3 class="text-base font-semibold mb-3 text-gray-800 dark:text-gray-200">Mengubah Password:</h3>
                            <ol class="space-y-2">
                                @foreach(['Klik menu "Profile" > "Pengaturan Password"', 'Masukkan password lama', 'Masukkan password baru (minimal 8 karakter)', 'Konfirmasi password baru', 'Klik "Ubah Password"'] as $step => $text)
                                    <li class="flex items-start">
                                        <span class="w-5 h-5 rounded-full bg-orange-400 text-white text-xs font-bold flex items-center justify-center mr-2.5 mt-0.5 shrink-0">{{ $step+1 }}</span>
                                        <span class="text-gray-600 dark:text-gray-300 text-sm">{{ $text }}</span>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bantuan -->
            <section id="bantuan" class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-md border border-gray-100 dark:border-gray-700">
                <div class="p-1 bg-gradient-to-r from-gray-400 to-gray-500"></div>
                <div class="p-7">
                    <h2 class="text-2xl font-bold mb-5 text-gray-900 dark:text-white flex items-center">
                        <span class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 flex items-center justify-center mr-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </span>
                        Bantuan & Dukungan
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-base font-semibold mb-4 text-blue-600 dark:text-blue-400">Jika Mengalami Masalah:</h3>
                            <ul class="space-y-2.5">
                                @foreach(['Cek koneksi internet', 'Refresh halaman browser', 'Clear cache browser', 'Gunakan browser terbaru (Chrome, Firefox, Edge)', 'Logout dan login kembali'] as $item)
                                    <li class="flex items-center text-sm text-gray-600 dark:text-gray-300">
                                        <span class="w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/50 text-blue-600 text-xs flex items-center justify-center mr-3 shrink-0">✓</span>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-base font-semibold mb-4 text-emerald-600 dark:text-emerald-400">Kontak Dukungan:</h3>
                            <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-5 border border-gray-200 dark:border-gray-600">
                                <div class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                                    <p><strong class="text-gray-900 dark:text-white">Admin Sistem:</strong></p>
                                    <p>Email: admin@smk.sch.id</p>
                                    <p>Telp: (0274) 1234567</p>
                                    <hr class="border-gray-200 dark:border-gray-600 my-3">
                                    <p><strong class="text-gray-900 dark:text-white">Tim IT Sekolah</strong></p>
                                    <p>Gedung Administrasi SMK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <div class="mt-10 text-center">
            <div class="relative bg-white dark:bg-gray-800 rounded-3xl p-8 overflow-hidden shadow-xl border border-gray-100 dark:border-gray-700">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/10 dark:to-indigo-900/10"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/50 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Terima Kasih!</h3>
                    <p class="text-gray-500 dark:text-gray-400">Panduan ini dibuat untuk memudahkan penggunaan sistem e-learning. Semoga bermanfaat!</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Print styles */
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>

    <script>
        // Add smooth scrolling to all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add active class to current section in TOC
        window.addEventListener('scroll', function () {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('a[href^="#"]');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 60) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('font-bold', 'text-blue-600');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('font-bold', 'text-blue-600');
                }
            });
        });
    </script>
@endsection