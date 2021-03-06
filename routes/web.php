<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('post/{id}', [HomeController::class, 'showPost', 'main'])->name('client.post');

Route::get('topnew', [HomeController::class, 'topNew'])->name('client.topNew');

Route::get('post-cate/{id}', [HomeController::class, 'postCate'])->name('client.postCate');

