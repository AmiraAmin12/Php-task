<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/posts', [PostController ::class, 'index']);

Route::get('/posts/show/{id}', [PostController ::class, 'show']);

Route::get('/posts/create', [PostController ::class, 'create']);

Route::post('/posts/store', [PostController ::class, 'store']);

Route::get('/posts/edit/{id}', [PostController ::class, 'edit']);

Route::post('/posts/update/{id}', [PostController ::class, 'update']);

Route::post('/posts/destroy/{id}', [PostController ::class, 'destroy']);

