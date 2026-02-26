@extends('layouts.app2')
@section('pageTitle', $topic->title)
@section('title', 'Detail Topik Diskusi')
@section('content')
    <div class="max-w-5xl mx-auto">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('forum.siswa') }}"
                class="inline-flex items-center text-teal-600 hover:text-teal-800 dark:text-teal-400 dark:hover:text-teal-300 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Forum
            </a>
        </div>

        <!-- Topic Content -->
        <div class="bg-white dark:bg-gray-800/50 rounded-2xl border border-gray-200/50 dark:border-gray-700/50 shadow-xl overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 p-8 text-white">
                <div class="flex items-center gap-3 mb-4">
                    @if($topic->mapel)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/20 text-white">
                            {{ $topic->mapel->nama_mapel }}
                        </span>
                    @endif
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ $topic->status == 'active' ? 'bg-green-500 text-white' : 'bg-gray-500 text-white' }}">
                        {{ $topic->status == 'active' ? 'Aktif' : 'Ditutup' }}
                    </span>
                </div>
                <h1 class="text-3xl font-bold mb-4">{{ $topic->title }}</h1>
                <div class="flex items-center text-sm text-white/80">
                    <div class="flex items-center mr-4">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        {{ $topic->user->name ?? 'Unknown' }}
                    </div>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        {{ $topic->created_at->format('d M Y, H:i') }}
                    </div>
                </div>
            </div>

            <div class="p-8">
                <div class="prose dark:prose-invert max-w-none">
                    <p class="text-gray-700 dark:text-gray-300 whitespace-pre-wrap">{{ $topic->content }}</p>
                </div>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                <svg class="w-6 h-6 mr-3 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                Komentar (<span id="comment-count">{{ $topic->allComments->count() }}</span>)
            </h2>

            @if($topic->status == 'active')
                <div class="bg-white dark:bg-gray-800/50 rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 mb-8">
                    <form id="comment-form">
                        @csrf
                        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                        <div class="mb-4">
                            <label for="comment" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tulis Komentar</label>
                            <textarea name="content" id="comment-content" rows="3" required class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-teal-500 dark:bg-gray-700 dark:text-white" placeholder="Tulis komentar Anda..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-teal-600 to-cyan-600 text-white rounded-xl font-bold text-sm uppercase">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                Kirim Komentar
                            </button>
                        </div>
                    </form>
                </div>
            @else
                <div class="bg-gray-100 dark:bg-gray-800/50 rounded-xl p-4 mb-8 text-center">
                    <p class="text-gray-500 dark:text-gray-400">Topik ini sudah ditutup.</p>
                </div>
            @endif

            <div id="comments-container">
                @forelse ($topic->comments as $comment)
                    <div class="comment-item bg-white dark:bg-gray-800/50 rounded-2xl border border-gray-200/50 dark:border-gray-700/50 p-6 mb-4" data-comment-id="{{ $comment->id }}">
                        <div class="flex items-start">
                            @php
                                $profilePhoto = $comment->user->profile_photo ?? null;
                                $initial = substr($comment->user->name ?? 'U', 0, 1);
                            @endphp
                            @if($profilePhoto)
                                <img src="{{ $profilePhoto }}" alt="{{ $comment->user->name }}" class="w-10 h-10 rounded-full mr-4 object-cover">
                            @else
                                <div class="w-10 h-10 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold mr-4">{{ $initial }}</div>
                            @endif
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="font-semibold text-gray-900 dark:text-white">{{ $comment->user->name ?? 'Unknown' }}</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">{{ $comment->created_at->format('d M Y, H:i') }}</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-300">{{ $comment->content }}</p>

                                @if($topic->status == 'active')
                                    <button onclick="toggleReplyForm({{ $comment->id }})" class="mt-2 text-sm text-teal-600 hover:text-teal-800">Balas</button>
                                @endif

                                <div id="reply-form-{{ $comment->id }}" class="hidden mt-4 pl-4 border-l-2 border-teal-300">
                                    <form class="reply-form" data-parent-id="{{ $comment->id }}">
                                        @csrf
                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                        <textarea name="content" rows="2" required class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-sm reply-content" placeholder="Tulis balasan..."></textarea>
                                        <div class="flex gap-2 mt-2">
                                            <button type="submit" class="px-3 py-1 bg-teal-600 hover:bg-teal-700 text-white text-sm rounded-lg">Kirim</button>
                                            <button type="button" onclick="toggleReplyForm({{ $comment->id }})" class="px-3 py-1 bg-gray-300 text-gray-700 text-sm rounded-lg">Batal</button>
                                        </div>
                                    </form>
                                </div>

                                @forelse($comment->replies as $reply)
                                    <div class="mt-4 pl-4 border-l-2 border-gray-300 dark:border-gray-600">
                                        <div class="flex items-start">
                                            @php
                                                $replyProfilePhoto = $reply->user->profile_photo ?? null;
                                                $replyInitial = substr($reply->user->name ?? 'U', 0, 1);
                                            @endphp
                                            @if($replyProfilePhoto)
                                                <img src="{{ $replyProfilePhoto }}" alt="{{ $reply->user->name }}" class="w-8 h-8 rounded-full mr-3 object-cover">
                                            @else
                                                <div class="w-8 h-8 bg-gradient-to-br from-gray-400 to-gray-500 rounded-full flex items-center justify-center text-white font-bold mr-3 text-sm">{{ $replyInitial }}</div>
                                            @endif
                                            <div>
                                                <div class="flex items-center gap-2 mb-1">
                                                    <span class="font-semibold text-gray-900 dark:text-white text-sm">{{ $reply->user->name ?? 'Unknown' }}</span>
                                                    <span class="text-xs text-gray-500 dark:text-gray-400">{{ $reply->created_at->format('d M Y, H:i') }}</span>
                                                </div>
                                                <p class="text-gray-700 dark:text-gray-300 text-sm">{{ $reply->content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12 bg-gray-50 dark:bg-gray-800/30 rounded-2xl" id="no-comments">
                        <p class="text-gray-500 dark:text-gray-400">Belum ada komentar.</p>
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
