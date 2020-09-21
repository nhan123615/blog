<?php

use Illuminate\Support\Facades\Route;
/* User route */
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PostController;

/* Admin route */
use App\Http\Controllers\Admin\HomeAdminController;



//User Routes

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/post', [PostController::class, 'index'])->name('post');



/* Admin routes */

    Route::get('admin/home', [HomeAdminController::class, 'index'])->name('admin/home');

    //User routes
    Route::resource('admin/user', 'App\Http\Controllers\Admin\UserController');
    // Post routes
    Route::resource('admin/post', 'App\Http\Controllers\Admin\PostController');
    // Tag routes
    Route::resource('admin/tag', 'App\Http\Controllers\Admin\TagController');
    //Category routes
    Route::resource('admin/category', 'App\Http\Controllers\Admin\CategoryController');
