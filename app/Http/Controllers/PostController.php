<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->paginate(8);

        return view('posts.index', ['posts' => $posts]);
    }

    public function show()
    {
        //
    }
}
