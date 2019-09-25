<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
// use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        //fetch all the post belongs to authenticate user
        $posts = Post::where('user_id', auth()->user()->id)->get();
        // $posts = Post::where('user_id', Auth::user()->id)->get();
        // $posts = auth()->user()->posts;

        //send the posts to views
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd(auth()->user()->phone);
        //
        // auth()->user()
        //      ->posts()
        //      ->create([
        //             'title' => $request->title,
        //             'body' => $request->body,
        //         ]);

        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return "Success";
    }
}
