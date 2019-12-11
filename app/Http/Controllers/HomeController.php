<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        return view('welcome', ['posts' => $posts]); 
    }
}
