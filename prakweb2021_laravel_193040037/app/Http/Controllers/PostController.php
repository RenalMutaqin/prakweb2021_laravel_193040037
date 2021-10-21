<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => \App\Models\Post ::all()
            "posts" => \App\Models\Post ::latest()->get()
        ]);
    }

    public function show(\App\Models\Post $post)
    {
        return view('post',[
            "title" => "single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}