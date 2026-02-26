<?php

namespace App\Http\Controllers;

use Auth;
use App\ForumComment;
use App\ForumTopic;
use App\Mapel;
use App\Guru;
use App\Jadwal;
use App\Siswa;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource for guru (teacher).
     */
    public function indexGuru()
    {
        // Get guru by id_card directly
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();

        if ($guru) {
            // Get mapel from jadwal for this guru
            $mapelIds = Jadwal::where('guru_id', $guru->id)->distinct()->pluck('mapel_id');
            $mapel = Mapel::whereIn('id', $mapelIds)->get();
        } else {
            $mapel = collect([]);
        }

        // Get topics created by this guru or all topics
        $topics = ForumTopic::with(['user', 'mapel', 'comments'])
            ->latest()
            ->paginate(10);

        // Add profile photos to topic creators
        $topics->map(function ($topic) {
            if ($topic->user) {
                $topic->user->profile_photo = $this->getUserProfilePhoto($topic->user);
            }
            return $topic;
        });

        return view('guru.forum.index', compact('topics', 'mapel'));
    }

    /**
     * Display a listing of the resource for siswa (student).
     */
    public function indexSiswa()
    {
        $topics = ForumTopic::with(['user', 'mapel', 'comments'])
            ->where('status', 'active')
            ->latest()
            ->paginate(10);

        // Add profile photos to topic creators
        $topics->map(function ($topic) {
            if ($topic->user) {
                $topic->user->profile_photo = $this->getUserProfilePhoto($topic->user);
            }
            return $topic;
        });

        return view('siswa.forum.index', compact('topics'));
    }

    /**
     * Show the form for creating a new topic (guru only).
     */
    public function create()
    {
        // Get guru by id_card directly
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();

        if ($guru) {
            // Get mapel from jadwal for this guru
            $mapelIds = Jadwal::where('guru_id', $guru->id)->distinct()->pluck('mapel_id');
            $mapel = Mapel::whereIn('id', $mapelIds)->get();
        } else {
            $mapel = collect([]);
        }

        return view('guru.forum.create', compact('mapel'));
    }

    /**
     * Store a newly created topic in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'mapel_id' => 'nullable|exists:mapel,id'
        ]);

        ForumTopic::create([
            'title' => $request->title,
            'content' => $request->content,
            'mapel_id' => $request->mapel_id,
            'user_id' => Auth::user()->id,
            'status' => 'active'
        ]);

        return redirect()->route('forum.guru')->with('success', 'Topik diskusi berhasil dibuat!');
    }

    /**
     * Display the specified topic.
     */
    public function show($id)
    {
        $topic = ForumTopic::with(['user', 'mapel', 'comments.user', 'comments.replies.user'])
            ->findOrFail($id);

        // Add profile photos to topic comments
        $topic->comments->map(function ($comment) {
            if ($comment->user) {
                $comment->user->profile_photo = $this->getUserProfilePhoto($comment->user);
            }
            if ($comment->replies) {
                $comment->replies->map(function ($reply) {
                    if ($reply->user) {
                        $reply->user->profile_photo = $this->getUserProfilePhoto($reply->user);
                    }
                    return $reply;
                });
            }
            return $comment;
        });

        // Check if user is guru or siswa to determine view
        $role = Auth::user()->role;

        if ($role == 'Guru') {
            return view('guru.forum.show', compact('topic'));
        }

        return view('siswa.forum.show', compact('topic'));
    }

    /**
     * Add a comment to a topic.
     */
    public function comment(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string'
        ]);

        ForumComment::create([
            'content' => $request->content,
            'topic_id' => $id,
            'user_id' => Auth::user()->id,
            'parent_id' => $request->parent_id ?? null
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan!');
    }

    /**
     * Close a topic (guru only).
     */
    public function close($id)
    {
        $topic = ForumTopic::findOrFail($id);
        $topic->update(['status' => 'closed']);

        return redirect()->back()->with('success', 'Topik telah ditutup!');
    }

    /**
     * Reopen a topic (guru only).
     */
    public function reopen($id)
    {
        $topic = ForumTopic::findOrFail($id);
        $topic->update(['status' => 'active']);

        return redirect()->back()->with('success', 'Topik telah dibuka kembali!');
    }

    /**
     * Delete a topic (guru only).
     */
    public function destroy($id)
    {
        $topic = ForumTopic::findOrFail($id);
        $topic->delete();

        return redirect()->route('forum.guru')->with('success', 'Topik berhasil dihapus!');
    }

    /**
     * Delete a comment.
     */
    public function deleteComment($id)
    {
        $comment = ForumComment::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Komentar berhasil dihapus!');
    }

    /**
     * Add a comment via AJAX (without page refresh).
     */
    public function commentAjax(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string'
        ]);

        $comment = ForumComment::create([
            'content' => $request->content,
            'topic_id' => $id,
            'user_id' => Auth::user()->id,
            'parent_id' => $request->parent_id ?? null
        ]);

        // Load user with profile photo
        $comment->load('user');
        $profilePhoto = $this->getUserProfilePhoto($comment->user);

        return response()->json([
            'success' => true,
            'message' => 'Komentar berhasil ditambahkan!',
            'comment' => $comment,
            'profile_photo' => $profilePhoto
        ]);
    }

    /**
     * Get comments via AJAX.
     */
    public function getCommentsAjax($id)
    {
        $topic = ForumTopic::with(['comments.user', 'comments.replies.user'])
            ->findOrFail($id);

        // Add profile photos to comments
        $topic->comments->map(function ($comment) {
            if ($comment->user) {
                $comment->user->profile_photo = $this->getUserProfilePhoto($comment->user);
            }
            if ($comment->replies) {
                $comment->replies->map(function ($reply) {
                    if ($reply->user) {
                        $reply->user->profile_photo = $this->getUserProfilePhoto($reply->user);
                    }
                    return $reply;
                });
            }
            return $comment;
        });

        return response()->json([
            'success' => true,
            'comments' => $topic->comments,
            'total_comments' => $topic->allComments->count()
        ]);
    }

    /**
     * Get user profile photo URL
     */
    private function getUserProfilePhoto($user)
    {
        if (!$user) {
            return null;
        }

        $profilePhoto = null;

        // Check if user is Guru
        if ($user->role == 'Guru') {
            $guru = Guru::where('id_card', $user->id_card)->first();
            if ($guru && $guru->foto) {
                $profilePhoto = asset($guru->foto);
            }
        }
        // Check if user is Siswa
        elseif ($user->role == 'Siswa') {
            $siswa = Siswa::where('no_induk', $user->no_induk)->first();
            if ($siswa && $siswa->foto) {
                $profilePhoto = asset( $siswa->foto);
            }
        }

        return $profilePhoto;
    }
}
