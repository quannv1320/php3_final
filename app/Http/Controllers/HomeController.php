<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('clients.homepage', compact('posts', 'categories'));
    }

    public function showPost()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('clients.post', compact('posts', 'categories'));
    }
}
