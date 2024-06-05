<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->orderByDesc('id')
            ->select(['title', 'slug', 'thumbnail', 'views', 'author', 'preview_text', 'created_at'])
            ->paginate(6);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->increment('views');

        return view('posts.show', compact('post'));
    }
}
