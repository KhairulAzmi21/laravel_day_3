<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $name = $request->name;

        // $user = User::where('name', $name)->first();
        // fetch all posts ;
        $posts = Post::paginate(4);

        // return a view to home.blade.php with data $posts
        return view('home', ['posts' => $posts]);
    }
}
