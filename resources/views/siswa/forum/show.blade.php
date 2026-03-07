@extends('layouts.app2')
@section('pageTitle', $topic->title)
@section('title', 'Detail Topik Diskusi')
@section('content')
    <div class="max-w-5xl mx-auto">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('forum.siswa') }}"
                class="group inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:border-blue-200 dark:hover:border-blue-800 hover:shadow-md transition-all duration-200">
                <svg class="w-4 h-4 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="font-medium text-sm">Kembali ke Forum</span>
            </a>
        </div>

        <!-- Topic Content -->
        <div class="bg-white dark:bg-gray-800 rounded-3xl border border-gray-100 dark:border-gray-700 shadow-xl overflow-hidden mb-8 relative">
            <!-- Decorative blobs -->
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-gradient-to-br from-blue-400/20 to-indigo-600/20 blur-3xl rounded-full pointer-events-none"></div>

            <!-- Topic Hero -->
            <div class="relative z-10 p-7 sm:p-9 border-b border-gray-100 dark:border-gray-700">
                <div class="flex flex-wrap items-center gap-2 mb-5">
                    @if($topic->mapel)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 border border-blue-100 dark:border-blue-800">
                            <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            {{ $topic->mapel->nama_mapel }}
                        </span>
                    @endif
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ $topic->status == 'active' ? 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-300 border border-emerald-100 dark:border-emerald-800' : 'bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400 border border-gray-200 dark:border-gray-600' }}">
                        @if($topic->status == 'active') <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5 animate-pulse"></span> @endif
                        {{ $topic->status == 'active' ? 'Aktif' : 'Ditutup' }}
                    </span>
                </div>

                <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-5 tracking-tight leading-tight">{{ $topic->title }}</h1>

                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm text-gray-500 dark:text-gray-400">
                    <div class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center mr-2 text-blue-600 font-bold text-sm">
                            {{ strtoupper(substr($topic->user->name ?? 'U', 0, 1)) }}
                        </div>
                        <span class="font-medium text-gray-700 dark:text-gray-300">{{ $topic->user->name ?? 'Unknown' }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        {{ $topic->created_at->format('d M Y, H:i') }}
                    </div>
                </div>
            </div>

            <!-- Topic Body -->
            <div class="relative z-10 p-7 sm:p-9">
                <div class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-gray-300 leading-relaxed whitespace-pre-wrap">
                    {{ $topic->content }}
                </div>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="mb-8">
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white flex items-center">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-900/50 text-blue-600 flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    Diskusi
                </h2>
                <span class="bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 text-sm font-bold px-3 py-1.5 rounded-full border border-blue-100 dark:border-blue-800">
                    <span id="comment-count">{{ $topic->allComments->count() }}</span> Komentar
                </span>
            </div>

            @if($topic->status == 'active')
                <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-200 dark:border-gray-700 p-6 mb-7 shadow-md">
                    <h3 class="text-sm font-bold text-gray-700 dark:text-gray-300 mb-4 uppercase tracking-wider">Tulis Komentar</h3>
                    <form id="comment-form">
                        @csrf
                        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                        <div class="mb-4">
                            <textarea name="content" id="comment-content" rows="3" required
                                class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:text-white text-gray-900 transition-colors resize-none"
                                placeholder="Bagikan pendapat atau pertanyaan Anda..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white rounded-xl font-semibold text-sm shadow-md shadow-blue-500/20 hover:shadow-blue-500/40 transition-all duration-200 transform hover:-translate-y-0.5">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                Kirim Komentar
                            </button>
                        </div>
                    </form>
                </div>
            @else
                <div class="bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-xl p-4 mb-7 flex items-center">
                    <svg class="w-5 h-5 text-amber-600 dark:text-amber-400 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <p class="text-amber-700 dark:text-amber-300 font-medium text-sm">Topik ini sudah ditutup oleh guru. Komentar baru tidak dapat ditambahkan.</p>
                </div>
            @endif

            <div id="comments-container" class="space-y-4">
                @forelse ($topic->comments as $comment)
                    <div class="comment-item bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 p-5 shadow-sm hover:shadow-md transition-shadow duration-200" data-comment-id="{{ $comment->id }}">
                        <div class="flex items-start gap-4">
                            @php
                                $profilePhoto = $comment->user->profile_photo ?? null;
                                $initial = strtoupper(substr($comment->user->name ?? 'U', 0, 1));
                            @endphp
                            @if($profilePhoto)
                                <img src="{{ $profilePhoto }}" alt="{{ $comment->user->name }}" class="w-10 h-10 rounded-full object-cover shrink-0 shadow-sm">
                            @else
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold shrink-0 shadow-sm">{{ $initial }}</div>
                            @endif
                            <div class="flex-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2 mb-2">
                                    <span class="font-semibold text-gray-900 dark:text-white text-sm">{{ $comment->user->name ?? 'Unknown' }}</span>
                                    <span class="text-xs text-gray-400 dark:text-gray-500">{{ $comment->created_at->format('d M Y, H:i') }}</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">{{ $comment->content }}</p>

                                @if($topic->status == 'active')
                                    <button onclick="toggleReplyForm({{ $comment->id }})" class="mt-3 inline-flex items-center text-xs font-semibold text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 transition-colors">
                                        <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path></svg>
                                        Balas
                                    </button>
                                @endif

                                <div id="reply-form-{{ $comment->id }}" class="hidden mt-4 pl-4 border-l-2 border-blue-200 dark:border-blue-800">
                                    <form class="reply-form" data-parent-id="{{ $comment->id }}">
                                        @csrf
                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                        <textarea name="content" rows="2" required
                                            class="w-full px-3 py-2.5 bg-gray-50 dark:bg-gray-700/50 border border-gray-200 dark:border-gray-600 rounded-xl text-sm reply-content focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:text-white resize-none"
                                            placeholder="Tulis balasan..."></textarea>
                                        <div class="flex gap-2 mt-2.5">
                                            <button type="submit" class="px-4 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors">Kirim</button>
                                            <button type="button" onclick="toggleReplyForm({{ $comment->id }})" class="px-4 py-1.5 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:bg-gray-200 text-xs font-semibold rounded-lg transition-colors">Batal</button>
                                        </div>
                                    </form>
                                </div>

                                @forelse($comment->replies as $reply)
                                    <div class="mt-3 pl-4 border-l-2 border-gray-200 dark:border-gray-600 pt-3">
                                        <div class="flex items-start gap-3">
                                            @php
                                                $replyProfilePhoto = $reply->user->profile_photo ?? null;
                                                $replyInitial = strtoupper(substr($reply->user->name ?? 'U', 0, 1));
                                            @endphp
                                            @if($replyProfilePhoto)
                                                <img src="{{ $replyProfilePhoto }}" alt="{{ $reply->user->name }}" class="w-7 h-7 rounded-full object-cover shrink-0">
                                            @else
                                                <div class="w-7 h-7 bg-gray-200 dark:bg-gray-600 text-gray-600 dark:text-gray-300 rounded-full flex items-center justify-center font-bold shrink-0 text-xs">{{ $replyInitial }}</div>
                                            @endif
                                            <div>
                                                <div class="flex flex-wrap items-center gap-1.5 mb-1">
                                                    <span class="font-semibold text-gray-900 dark:text-white text-xs">{{ $reply->user->name ?? 'Unknown' }}</span>
                                                    <span class="text-xs text-gray-400">{{ $reply->created_at->format('d M Y, H:i') }}</span>
                                                </div>
                                                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $reply->content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-16 bg-gray-50 dark:bg-gray-800/30 rounded-2xl border border-gray-200/50 dark:border-gray-700/50" id="no-comments">
                        <div class="w-16 h-16 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        </div>
                        <p class="font-semibold text-gray-600 dark:text-gray-300 mb-1">Belum ada komentar</p>
                        <p class="text-sm text-gray-400 dark:text-gray-500">Jadilah yang pertama berkomentar!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        let lastCommentCount = {{ $topic->allComments->count() }};
        const topicId = {{ $topic->id }};
        let lastKnownComments = {};

        @forelse ($topic->comments as $comment)
            lastKnownComments[{{ $comment->id }}] = {{ $comment->replies->count() }};
        @empty
        @endforelse

        function toggleReplyForm(commentId) {
            document.getElementById('reply-form-' + commentId).classList.toggle('hidden');
        }

        function getProfilePhotoHtml(user) {
            if (user && user.profile_photo) {
                return `<img src="${user.profile_photo}" alt="${user.name}" class="w-10 h-10 rounded-full mr-4 object-cover">`;
            }
            const initial = user ? user.name.charAt(0) : 'U';
            return `<div class="w-10 h-10 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold mr-4">${initial}</div>`;
        }

        function getReplyProfilePhotoHtml(user) {
            if (user && user.profile_photo) {
                return `<img src="${user.profile_photo}" alt="${user.name}" class="w-8 h-8 rounded-full mr-3 object-cover">`;
            }
            const initial = user ? user.name.charAt(0) : 'U';
            return `<div class="w-8 h-8 bg-gradient-to-br from-gray-400 to-gray-500 rounded-full flex items-center justify-center text-white font-bold mr-3 text-sm">${initial}</div>`;
        }

        function loadComments(forceRefresh = false) {
            fetch(`/forum/${topicId}/comments/ajax`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        updateCommentsUI(data.comments, data.total_comments, forceRefresh);
                    }
                })
                .catch(error => console.error('Error loading comments:', error));
        }

        function updateCommentsUI(comments, totalCount, forceRefresh = false) {
            const container = document.getElementById('comments-container');
            const countEl = document.getElementById('comment-count');
            
            countEl.textContent = totalCount;
            
            let hasNewReplies = false;
            comments.forEach(comment => {
                if (lastKnownComments[comment.id] !== undefined) {
                    const currentReplies = comment.replies ? comment.replies.length : 0;
                    if (currentReplies > lastKnownComments[comment.id]) {
                        hasNewReplies = true;
                        lastKnownComments[comment.id] = currentReplies;
                    }
                } else {
                    lastKnownComments[comment.id] = comment.replies ? comment.replies.length : 0;
                    hasNewReplies = true;
                }
            });

            if (forceRefresh || hasNewReplies || totalCount !== lastCommentCount || comments.length !== container.querySelectorAll('.comment-item').length) {
                let html = '';
                
                if (comments.length === 0) {
                    html = '<div class="text-center py-12 bg-gray-50 dark:bg-gray-800/30 rounded-2xl" id="no-comments"><p class="text-gray-500 dark:text-gray-400">Belum ada komentar.</p></div>';
                } else {
                    comments.forEach(comment => {
                        const name = comment.user ? comment.user.name : 'Unknown';
                        const time = new Date(comment.created_at).toLocaleString('id-ID');
                        const isReply = comment.parent_id !== null;
                        
                        if (isReply) return;
                        
                        let repliesHtml = '';
                        if (comment.replies && comment.replies.length > 0) {
                            comment.replies.forEach(reply => {
                                const replyName = reply.user ? reply.user.name : 'Unknown';
                                const replyTime = new Date(reply.created_at).toLocaleString('id-ID');
                                repliesHtml += `
                                    <div class="mt-4 pl-4 border-l-2 border-gray-300 dark:border-gray-600">
                                        <div class="flex items-start">
                                            ${getReplyProfilePhotoHtml(reply.user)}
                                            <div>
                                                <div class="flex items-center gap-2 mb-1">
                                                    <span class="font-semibold text-gray-900 dark:text-white text-sm">${replyName}</span>
                                                    <span class="text-xs text-gray-500">${replyTime}</span>
                                                </div>
                                                <p class="text-gray-700 dark:text-gray-300 text-sm">${reply.content}</p>
                                            </div>
                                        </div>
                                    </div>
                                `;
                            });
                        }

                        const replyButton = {{ $topic->status == 'active' }} ? `<button onclick="toggleReplyForm(${comment.id})" class="mt-2 text-sm text-teal-600 hover:text-teal-800">Balas</button>` : '';
                        const replyForm = {{ $topic->status == 'active' }} ? `
                            <div id="reply-form-${comment.id}" class="hidden mt-4 pl-4 border-l-2 border-teal-300">
                                <form class="reply-form" data-parent-id="${comment.id}">
                                    @csrf
                                    <input type="hidden" name="parent_id" value="${comment.id}">
                                    <textarea name="content" rows="2" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-sm reply-content" placeholder="Tulis balasan..."></textarea>
                                    <div class="flex gap-2 mt-2">
                                        <button type="submit" class="px-3 py-1 bg-teal-600 text-white text-sm rounded-lg">Kirim</button>
                                        <button type="button" onclick="toggleReplyForm(${comment.id})" class="px-3 py-1 bg-gray-300 text-gray-700 text-sm rounded-lg">Batal</button>
                                    </div>
                                </form>
                            </div>
                        ` : '';

                        html += `
                            <div class="comment-item bg-white dark:bg-gray-800/50 rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 mb-4" data-comment-id="${comment.id}">
                                <div class="flex items-start">
                                    ${getProfilePhotoHtml(comment.user)}
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2 mb-1">
                                            <span class="font-semibold text-gray-900 dark:text-white">${name}</span>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">${time}</span>
                                        </div>
                                        <p class="text-gray-700 dark:text-gray-300">${comment.content}</p>
                                        ${replyButton}
                                        ${replyForm}
                                        ${repliesHtml}
                                    </div>
                                </div>
                            </div>
                        `;
                        
                        lastKnownComments[comment.id] = comment.replies ? comment.replies.length : 0;
                    });
                }
                
                container.innerHTML = html;
                attachReplyFormListeners();
            }
            
            lastCommentCount = totalCount;
        }

        function attachReplyFormListeners() {
            document.querySelectorAll('.reply-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const content = this.querySelector('.reply-content').value;
                    const parentId = this.dataset.parentId;
                    
                    if (!content.trim()) {
                        alert('Balasan tidak boleh kosong!');
                        return;
                    }

                    fetch(`/forum/${topicId}/comment/ajax`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ content: content, parent_id: parentId })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            this.querySelector('.reply-content').value = '';
                            toggleReplyForm(parentId);
                            loadComments(true);
                            lastCommentCount++;
                            document.getElementById('comment-count').textContent = lastCommentCount;
                            showToast(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan.');
                    });
                });
            });
        }

        document.getElementById('comment-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const content = document.getElementById('comment-content').value;
            
            if (!content.trim()) {
                alert('Komentar tidak boleh kosong!');
                return;
            }

            fetch(`/forum/${topicId}/comment/ajax`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ content: content })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('comment-content').value = '';
                    loadComments(true);
                    lastCommentCount++;
                    document.getElementById('comment-count').textContent = lastCommentCount;
                    showToast(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan.');
            });
        });

        setInterval(() => loadComments(false), 5000);

        attachReplyFormListeners();

        function showToast(message) {
            const toast = document.createElement('div');
            toast.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
            toast.textContent = message;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        }
    </script>
@endsection
