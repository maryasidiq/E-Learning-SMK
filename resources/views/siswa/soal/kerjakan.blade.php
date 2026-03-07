@extends('layouts.app2')
@section('pageTitle', 'Kerjakan Soal')
@section('title', 'Kerjakan Soal')
@section('content')
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <!-- Header Section -->
        <div class="relative rounded-3xl p-6 sm:p-8 mb-6 overflow-hidden bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
            <!-- Decorative Backgrounds -->
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-indigo-600/20 blur-3xl rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-64 h-64 bg-gradient-to-tr from-cyan-400/20 to-blue-500/20 blur-3xl rounded-full"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center">
                    <div class="w-14 h-14 bg-blue-100 dark:bg-blue-900/50 text-blue-600 rounded-2xl flex items-center justify-center mr-5 shadow-sm border border-blue-200 dark:border-blue-800">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white">{{ $soal->judul }}</h1>
                        <p class="text-gray-600 dark:text-gray-400 font-medium">Kerjakan Soal dengan baik dan jujur</p>
                    </div>
                </div>

                <div class="w-full md:w-auto text-center md:text-right bg-gray-50 dark:bg-gray-900/50 rounded-2xl p-4 border border-gray-200 dark:border-gray-700 shadow-inner">
                    <div class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-widest mb-1">Sisa Waktu</div>
                    <div class="text-3xl md:text-4xl font-black font-mono text-gray-900 dark:text-white tracking-tight" id="countdown">00:00:00</div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        <!-- Progress Bar -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-200/80 dark:border-gray-700/80 p-6 mb-8 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    Progress Pengerjaan
                </h3>
                <span class="text-sm font-semibold bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 px-3 py-1 rounded-full" id="progress-text">
                    0 dari {{ count($soalDetail) }} soal
                </span>
            </div>
            <div class="w-full bg-gray-100 dark:bg-gray-700 rounded-full h-4 relative overflow-hidden">
                <div class="absolute top-0 bottom-0 left-0 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full transition-all duration-500 ease-out shadow-[0_0_10px_rgba(59,130,246,0.5)]"
                    id="progress-bar" style="width: 0%"></div>
            </div>
        </div>

        <form id="SoalForm" action="{{ route('soal.siswa.simpan-jawaban', Crypt::encrypt($soal->id)) }}" method="POST">
            @csrf

            @foreach($soalDetail as $index => $item)
                <div
                    class="mb-8 bg-white dark:bg-gray-800 rounded-2xl border border-gray-200/80 dark:border-gray-700/80 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/0 via-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    
                    <!-- Question Header -->
                    <div class="bg-gray-50 dark:bg-gray-900/30 border-b border-gray-200 dark:border-gray-700 p-5">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mr-4 shadow-sm font-black text-lg">
                                    {{ $index + 1 }}
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Soal {{ $index + 1 }}</h3>
                            </div>
                            <div class="flex items-center">
                                <span class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 px-4 py-1.5 rounded-full text-sm font-bold shadow-inner">
                                    {{ $item->bobot }} poin
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Question Content -->
                    <div class="p-6">
                        <div class="mb-6">
                            @if($item->gambar && is_array($item->gambar))
                                <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 justify-items-center">
                                    @foreach($item->gambar as $gambar)
                                        <img src="{{ asset('storage/' . $gambar) }}" alt="Gambar Soal"
                                            class="max-w-full max-h-48 w-auto h-auto rounded-lg shadow-md object-contain">
                                    @endforeach
                                </div>
                            @elseif($item->gambar)
                                <div class="mb-4 flex justify-center">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Soal"
                                        class="max-w-sm max-h-48 w-auto h-auto rounded-lg shadow-md object-contain">
                                </div>
                            @endif
                            <style>
                                .pertanyaan-content ul {
                                    list-style-type: disc !important;
                                    padding-left: 1.5rem !important;
                                }

                                .pertanyaan-content li {
                                    margin-bottom: 0.25rem !important;
                                }
                            </style>
                            <div class="prose prose-lg dark:prose-invert max-w-none pertanyaan-content">
                                {!! $item->pertanyaan !!}
                            </div>
                        </div>

                        @if($item->tipe == 'pilihan_ganda')
                            <div class="space-y-3">
                                @if($item->pilihan_a)
                                    <label
                                        class="flex items-start p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-blue-900/20 hover:border-blue-300 dark:hover:border-blue-600 cursor-pointer transition-all duration-200">
                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="A"
                                            class="mt-1 mr-4 text-blue-600 focus:ring-blue-500">
                                        <div class="flex-1">
                                            <div class="flex items-center mb-1">
                                                <span
                                                    class="w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">A</span>
                                                <span class="text-gray-700 dark:text-gray-300 font-medium">Pilihan A</span>
                                            </div>
                                            <div
                                                class="text-gray-600 dark:text-gray-400 ml-9 prose prose-sm dark:prose-invert max-w-none">
                                                {!! $item->pilihan_a !!}
                                            </div>
                                        </div>
                                    </label>
                                @endif
                                @if($item->pilihan_b)
                                    <label
                                        class="flex items-start p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-blue-900/20 hover:border-blue-300 dark:hover:border-blue-600 cursor-pointer transition-all duration-200">
                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="B"
                                            class="mt-1 mr-4 text-blue-600 focus:ring-blue-500">
                                        <div class="flex-1">
                                            <div class="flex items-center mb-1">
                                                <span
                                                    class="w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">B</span>
                                                <span class="text-gray-700 dark:text-gray-300 font-medium">Pilihan B</span>
                                            </div>
                                            <div
                                                class="text-gray-600 dark:text-gray-400 ml-9 prose prose-sm dark:prose-invert max-w-none">
                                                {!! $item->pilihan_b !!}
                                            </div>
                                        </div>
                                    </label>
                                @endif
                                @if($item->pilihan_c)
                                    <label
                                        class="flex items-start p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-blue-900/20 hover:border-blue-300 dark:hover:border-blue-600 cursor-pointer transition-all duration-200">
                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="C"
                                            class="mt-1 mr-4 text-blue-600 focus:ring-blue-500">
                                        <div class="flex-1">
                                            <div class="flex items-center mb-1">
                                                <span
                                                    class="w-6 h-6 bg-purple-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">C</span>
                                                <span class="text-gray-700 dark:text-gray-300 font-medium">Pilihan C</span>
                                            </div>
                                            <div
                                                class="text-gray-600 dark:text-gray-400 ml-9 prose prose-sm dark:prose-invert max-w-none">
                                                {!! $item->pilihan_c !!}
                                            </div>
                                        </div>
                                    </label>
                                @endif
                                @if($item->pilihan_d)
                                    <label
                                        class="flex items-start p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-blue-900/20 hover:border-blue-300 dark:hover:border-blue-600 cursor-pointer transition-all duration-200">
                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="D"
                                            class="mt-1 mr-4 text-blue-600 focus:ring-blue-500">
                                        <div class="flex-1">
                                            <div class="flex items-center mb-1">
                                                <span
                                                    class="w-6 h-6 bg-orange-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">D</span>
                                                <span class="text-gray-700 dark:text-gray-300 font-medium">Pilihan D</span>
                                            </div>
                                            <div
                                                class="text-gray-600 dark:text-gray-400 ml-9 prose prose-sm dark:prose-invert max-w-none">
                                                {!! $item->pilihan_d !!}
                                            </div>
                                        </div>
                                    </label>
                                @endif
                                @if($item->pilihan_e)
                                    <label
                                        class="flex items-start p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-blue-900/20 hover:border-blue-300 dark:hover:border-blue-600 cursor-pointer transition-all duration-200">
                                        <input type="radio" name="jawaban[{{ $item->id }}]" value="E"
                                            class="mt-1 mr-4 text-blue-600 focus:ring-blue-500">
                                        <div class="flex-1">
                                            <div class="flex items-center mb-1">
                                                <span
                                                    class="w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center text-sm font-bold mr-3">E</span>
                                                <span class="text-gray-700 dark:text-gray-300 font-medium">Pilihan E</span>
                                            </div>
                                            <div
                                                class="text-gray-600 dark:text-gray-400 ml-9 prose prose-sm dark:prose-invert max-w-none">
                                                {!! $item->pilihan_e !!}
                                            </div>
                                        </div>
                                    </label>
                                @endif
                            </div>
                        @elseif($item->tipe == 'essay')
                            <div class="space-y-3">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Jawaban Essay
                                </label>
                                <textarea name="jawaban[{{ $item->id }}]" rows="6"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 resize-vertical"
                                    placeholder="Ketik jawaban Anda di sini..."></textarea>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach

            <!-- Submit Button -->
            <!-- Submit Button -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-200 dark:border-gray-700 p-8 shadow-xl mt-12 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-500/5 to-transparent"></div>
                <div class="relative z-10 text-center max-w-2xl mx-auto">
                    <div class="w-20 h-20 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Selesai Mengerjakan?</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-8">Pastikan Anda telah mengisi semua jawaban dengan benar sebelum mengirim. Waktu yang tersisa tidak dapat digunakan kembali setelah pengiriman.</p>
                    
                    <button type="button" onclick="confirmSubmit()"
                        class="inline-flex items-center justify-center w-full sm:w-auto px-10 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 border border-transparent rounded-xl font-bold text-lg text-white uppercase tracking-widest shadow-[0_10px_20px_rgba(79,70,229,0.3)] hover:shadow-[0_15px_30px_rgba(79,70,229,0.4)] focus:ring-4 focus:ring-blue-500/30 focus:outline-none transition-all duration-300 transform hover:-translate-y-1">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Kirim Jawaban Sekarang
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Data dari PHP
        const soalId = {{ $soal->id }};
        const durasiMenit = {{ $soal->durasi }};
        const waktuSelesaiStr = '{{ $soal->waktu_selesai }}'; 
        const serverTime = new Date('{{ now()->format('Y-m-d H:i:s') }}').getTime();
        const totalSoal = {{ count($soalDetail) }};
        
        // LocalStorage Keys
        const STORAGE_KEY_START = `quiz_${soalId}_start_time`;
        const STORAGE_KEY_ANSWERS = `quiz_${soalId}_answers`;

        // 1. Timer Logic with Persistence
        let startTime = localStorage.getItem(STORAGE_KEY_START);
        
        if (!startTime) {
            // First time loading the quiz (or storage cleared)
            startTime = serverTime; 
            localStorage.setItem(STORAGE_KEY_START, startTime);
        } else {
            startTime = parseInt(startTime);
        }

        // Calculate Target End Time based on stored Start Time + Duration
        // Note: JavaScipt timestamps are in milliseconds
        const durationMs = durasiMenit * 60 * 1000;
        const endTimeDuration = startTime + durationMs;
        
        // Calculate Absolute End Time (Hard Deadline from Server)
        const endTimeAbsolute = new Date(waktuSelesaiStr).getTime();
        
        // The actual deadline is the earliest of the two
        const waktuBerakhir = Math.min(endTimeDuration, endTimeAbsolute);

        function updateCountdown() {
            const sekarang = new Date().getTime();
            const selisih = waktuBerakhir - sekarang;

            if (selisih <= 0) {
                document.getElementById('countdown').innerHTML = 'WAKTU HABIS!';
                document.getElementById('countdown').style.color = '#ef4444';
                // Clear storage before submitting to avoid stale data on next attempt (if any)
                localStorage.removeItem(STORAGE_KEY_START);
                localStorage.removeItem(STORAGE_KEY_ANSWERS);
                document.getElementById('SoalForm').submit();
                return;
            }

            const jam = Math.floor(selisih / (1000 * 60 * 60));
            const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
            const detik = Math.floor((selisih % (1000 * 60)) / 1000);

            let countdownText = '';
            if (jam > 0) {
                countdownText = jam + 'j ' + menit + 'm ' + detik + 's';
            } else {
                countdownText = menit + 'm ' + detik + 's';
            }

            const countdownElem = document.getElementById('countdown');
            if (countdownElem) {
                countdownElem.innerHTML = countdownText;
                // Ubah warna jika waktu tersisa kurang dari 5 menit
                if (selisih < 5 * 60 * 1000) {
                    countdownElem.style.color = '#ef4444';
                } else {
                    countdownElem.style.color = '#ffffff';
                }
            }
        }

        // 2. Answer Persistence Logic
        function loadAnswers() {
            const savedAnswers = JSON.parse(localStorage.getItem(STORAGE_KEY_ANSWERS) || '{}');
            
            // Restore Radio Buttons
            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                const name = radio.name; 
                // name format: jawaban[123]
                if (savedAnswers[name] === radio.value) {
                    radio.checked = true;
                }
            });

            // Restore Textareas
            document.querySelectorAll('textarea').forEach(textarea => {
                const name = textarea.name;
                if (savedAnswers[name]) {
                    textarea.value = savedAnswers[name];
                }
            });

            // Note: File inputs cannot be restored programmatically for security reasons
        }

        function saveAnswer(e) {
            const target = e.target;
            // Only save inputs related to the quiz form
            if (!target.name || !target.name.startsWith('jawaban[')) return;

            const savedAnswers = JSON.parse(localStorage.getItem(STORAGE_KEY_ANSWERS) || '{}');
            savedAnswers[target.name] = target.value;
            localStorage.setItem(STORAGE_KEY_ANSWERS, JSON.stringify(savedAnswers));
            
            updateProgress();
        }

        function updateProgress() {
            const radios = document.querySelectorAll('input[type="radio"]:checked');
            // Check textareas that have content (trim whitespace)
            const textareas = Array.from(document.querySelectorAll('textarea')).filter(t => t.value.trim().length > 0);
            const fileInputs = document.querySelectorAll('input[type="file"]');
            
            const answered = new Set();

            // Count radio button answers
            radios.forEach(radio => {
                const match = radio.name.match(/jawaban\[(\d+)\]/);
                if (match) answered.add(match[1]);
            });

            // Count textarea answers
            textareas.forEach(textarea => {
                const match = textarea.name.match(/jawaban\[(\d+)\]/);
                if (match) answered.add(match[1]);
            });

            // Count file uploads
            fileInputs.forEach(fileInput => {
                if (fileInput.files.length > 0) {
                    const match = fileInput.name.match(/file\[(\d+)\]/);
                    if (match) answered.add(match[1]);
                }
            });

            const answeredCount = answered.size;
            const progressPercent = (answeredCount / totalSoal) * 100;

            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');

            if(progressBar) progressBar.style.width = progressPercent + '%';
            if(progressText) progressText.innerHTML = answeredCount + ' dari ' + totalSoal + ' soal';
        }

        function confirmSubmit() {
            if (confirm('Apakah Anda yakin ingin mengirim jawaban? Pastikan semua jawaban sudah benar.')) {
                // Clear storage on intentional submit
                localStorage.removeItem(STORAGE_KEY_START);
                localStorage.removeItem(STORAGE_KEY_ANSWERS);
                document.getElementById('SoalForm').submit();
            }
        }

        // Event Listeners
        document.addEventListener('DOMContentLoaded', () => {
            loadAnswers();
            updateProgress(); // Initial progress check
            
            // Start timer
            updateCountdown();
            setInterval(updateCountdown, 1000);

            // Listen for changes
            const form = document.getElementById('SoalForm');
            if (form) {
                form.addEventListener('change', saveAnswer);
                form.addEventListener('input', (e) => {
                    // Save textareas on input (debounced could be better but this is simple)
                    if (e.target.tagName === 'TEXTAREA') {
                        saveAnswer(e);
                    }
                });
            }
        });


        // Prevent right-click dan shortcut keyboard (Original protections)
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'F12' ||
                (e.ctrlKey && e.shiftKey && e.key === 'I') ||
                (e.ctrlKey && e.key === 'U') ||
                (e.ctrlKey && e.key === 'S')) {
                e.preventDefault();
            }
        });

        // Auto-submit saat waktu habis (handled in updateCountdown)
    </script>
@endsection