<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/post/{slug}', [PostController::class, 'show'])->name('customer.post.show');