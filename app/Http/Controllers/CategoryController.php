<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('admin.cate.index', compact('categories'));
    }
    public function remove($id)
    {
        Category::destroy($id);
        return redirect(route('cate.index'));
    }
    public function add()
    {
        return view('admin.cate.add');
    }
    public function saveAdd(SaveCategoryRequest $request)
    {
        $model = new Category();
        $model->name = $request->name;
        $model->logo = $request->logo;
        $model->save();

        return redirect(route('cate.index'));   
    }
    public function edit($id)
    {
        $model = Category::find($id);
        if(!$model) return redirect(route('cate.index'));

        return view('admin.cate.edit', compact('model'));
    }
    public function saveEdit($id, SaveCategoryRequest $request)
    {
        $model = Category::find($id);
        $model->name = $request->name;
        $model->logo = $request->logo;
        $model->save();

        return redirect(route('cate.index'));   
    }
    

}