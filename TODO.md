# TODO - Implementasi Fitur Forum Diskusi

## Progres: [100%]

### 1. Database Migration ✓

- [x] Create forum_topics migration
- [x] Create forum_comments migration
- [x] Run migrations

### 2. Models ✓

- [x] Create ForumTopic model
- [x] Create ForumComment model

### 3. Controller ✓

- [x] Create ForumController
- [x] Add AJAX methods (commentAjax, getCommentsAjax)

### 4. Routes ✓

- [x] Add routes for guru (create, index, show)
- [x] Add routes for siswa (index, show, comment)
- [x] Add AJAX routes for real-time comments

### 5. Views - Guru ✓

- [x] Create guru/forum/index.blade.php (list & create topic)
- [x] Create guru/forum/create.blade.php (create topic form)
- [x] Create guru/forum/show.blade.php (detail topic & comments) - with AJAX + Polling

### 6. Views - Siswa ✓

- [x] Create siswa/forum/index.blade.php (list topics)
- [x] Create siswa/forum/show.blade.php (detail topic & comments) - with AJAX + Polling

### 7. Sidebar Update ✓

- [x] Add "Forum Diskusi" menu for Guru role
- [x] Add "Forum Diskusi" menu for Siswa role

### 8. Fitur Real-time (AJAX + Polling) ✓

- [x] Komentar langsung muncul tanpa refresh halaman untuk user yang sama
- [x] Polling setiap 5 detik untuk melihat komentar dari user lain
- [x] Notifikasi badge "Ada komentar baru!" saat ada komentar dari user lain
- [x] Update jumlah komentar secara real-time
- [x] Fitur balas komentar juga menggunakan AJAX

## Catatan:

- Mata pelajaran pada form buat topik menyesuaikan dengan jadwal mengajar guru
- Menggunakan polling untuk sinkronisasi antar-user (setiap 5 detik)
- User akan melihat badge notifikasi saat ada komentar baru dari user lain
