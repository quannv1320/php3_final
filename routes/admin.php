<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return redirect(route('login'));
});
Route::view('/test', 'layouts.main');
//Login
Route::view('login', 'auth.login')->name('login');
Route::post('login', [LoginController::class, 'postLogin']);

Route::any('logout', function()
{
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

//Category
Route::prefix('category')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('cate.index');
        Route::get('/{id}/remove', [CategoryController::class, 'remove'])->name('cate.remove');
        Route::get('/add', [CategoryController::class, 'add'])->name('cate.add');
        Route::post('/add', [CategoryController::class, 'saveAdd']);
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('cate.edit');
        Route::post('/edit/{id}', [CategoryController::class, 'saveEdit']);

});

Route::prefix('post')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('{id}/remove', [PostController::class, 'remove'])->name('post.remove');
        Route::get('add', [PostController::class, 'add'])->name('post.add');
        Route::post('add', [PostController::class, 'saveAdd']);
        Route::get('edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::post('edit/{id}', [PostController::class, 'saveEdit']);


});


