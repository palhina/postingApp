<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        // Userモデルのインスタンス（ここではAuth::user()）に対してposts()メソッドが使えるようになった理由は、5章でUserモデルとPostモデルのリレーションシップを設定したからです
        $posts = Auth::user()->posts()->orderBy('created_at','desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
