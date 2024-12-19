<?php

namespace App\Http\Controllers;

use pagination;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('home', ['posts' => $posts]);
    }

    public function view($slug){
        $post = Post::where('slug', $slug)->first();
        return view('view',['post' => $post]);
    }
}
