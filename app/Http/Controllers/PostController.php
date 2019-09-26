<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
// use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
        //fetch all the post belongs to authenticate user
        $posts = Post::where('user_id', auth()->user()->id)->get();
        // $posts = Post::where('user_id', Auth::user()->id)->get();
        // $posts = auth()->user()->posts;

        //send the posts to views
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        // fetch a post from database
        $post = Post::find($id);
        
        // return a view with the post
        return view('posts.show', ['post' => $post]);
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
        $request->validate([
            'title' => 'required|min:5',
            'body'  => 'required|min:20',
        ]);
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect('/post')->with('success', 'Successful add new post');
    }
}
