<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Har bir post bilan birga commentlarni ham yuklab olamiz
        $posts = Post::with('comments')->get();
        return view('posts.index', compact('posts'));
    }
}
