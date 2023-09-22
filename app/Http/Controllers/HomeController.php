<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::all();
        $posts = Post::all();

        return view('home', ['comments' => $comments, 'posts' => $posts]);
    }
}
