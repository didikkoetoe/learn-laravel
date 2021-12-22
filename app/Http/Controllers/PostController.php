<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog',
            'blogs' => Post::all()
        ]);
    }

    public function show(string $slug)
    {
        return view('blog', [
            'title' => 'Blog',
            'post' => Post::find($slug)
        ]);
    }
}
