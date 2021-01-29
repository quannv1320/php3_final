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
        return view('clients.main', compact('posts', 'categories'));
    }


    public function showPost($id){
        $post = Post::find($id);

        return view('clients.post', compact('post'));
    }
}
