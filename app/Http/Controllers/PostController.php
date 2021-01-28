<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();
        $posts->load('Category');
        return view('admin.post.index', compact('posts'));
    }

    public function remove($id)
    {
        Post::destroy($id);
        return redirect(route('post.index'));
    }

    public function add()
    {
        $posts = Post::with('category')->get();
        $categories = Category::all();
        return view('admin.post.add', compact('categories'));
    }
    public function saveAdd(Request $request)
    {
        // return $request;

        $model = new Post();
        $model->title = $request->title;
        $model->cate_id = $request->cate_id;
        $model->content = $request->content;
        $model->image = $request->image;
        $model->short_desc = $request->short_desc;
        $model->author = $request->author;
        $model->save();

        return redirect(route('post.index'));
    }

    public function edit($id)
    {
        $model = Post::find($id);
        $categories = Category::all();
        if(!$model) return redirect(route('post.index'));
        return view('admin.post.edit', compact('model', 'categories'));
    }
    public function saveEdit($id, Request $request)
    {
        $model = Post::find($id);
        $model->title = $request->title;
        $model->cate_id = $request->cate_id;
        $model->content = $request->content;
        $model->image = $request->image;
        $model->short_desc = $request->short_desc;
        $model->author = $request->author;
        $model->save();

        return redirect(route('post.index'));
    }
}
