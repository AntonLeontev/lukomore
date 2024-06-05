<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->orderByDesc(request('sort', 'id'))
            ->select(['title', 'slug', 'thumbnail', 'views', 'author', 'preview_text', 'created_at'])
            ->paginate(6);

        if (request()->ajax()) {
            return response()->json($posts);
        }

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->increment('views');

        return view('posts.show', compact('post'));
    }
}
