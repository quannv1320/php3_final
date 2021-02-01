<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\View;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        $topPosts = Post::with('view')->get()->sortByDesc('view.view');
        return view('clients.homepage', compact('posts', 'categories', 'topPosts'));
    }


    public function showPost($id){
        $posts = Post::all();
        $categories = Category::all();
        $post = Post::find($id);

        return view('clients.post', compact('post', 'posts', 'categories'));
    }

    public function topNew()
    {
        $categories = Category::all();
        $posts = Post::with('view')->get()->sortByDesc('view.view');
        return view('clients.topNews', compact('posts', 'categories'));
    }


    // public function upView(Request $request){
    //     $view = View::find($request->id);
    //     $view->view += 1;
    //     $view->save();
    //     return response()->json($view);
    // }

    

}


