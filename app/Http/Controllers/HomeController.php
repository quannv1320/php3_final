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

        $postttt = rsort($posts);
        return view('clients.homepage', compact('posts', 'categories', 'postttt'));
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
        return view('clients.topNews', compact('categories'));
    }


    public function upView(Request $request){
        $view = View::find($request->id);
        $view->view += 1;
        $view->save();
        return response()->json($view);
    }

}


