<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
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
//User Routes
123
Route::get('/', [HomeController::class, 'index']);

/* Route::get('/', [HomeController::class, 'index']); */
/* Route::group(['namespace' => 'User'],function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/post', [PostController::class, 'index'])->name('post');
}); */


/* 
Route::group(['namespace' => 'Admin'],function () {
    Route::get('admin/home','HomeController@index')->name('admin/home');
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::resource('admin/category', 'CategoryController');
}); */

/* Route::get('admin/home','App\Http\Controllers\Admin\HomeController@index')->name('admin/home');
    Route::resource('admin/post', 'App\Http\Controllers\Admin\PostController');
    Route::resource('admin/tag', 'App\Http\Controllers\Admin\TagController');
    Route::resource('admin/category', 'App\Http\Controllers\Admin\CategoryController'); */

<<<<<<< HEAD
=======
Route::get('/', function () {
    return view('user/blog');
})->name('home');

Route::get('/post', function () {
    return view('user/post');
})->name('post');

>>>>>>> a9bde6d2a3aa8baf115e7b2b32932b8783a3cd3b
