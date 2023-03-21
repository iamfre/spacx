<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('created_at')->paginate(8);

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::query()->findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }
}
