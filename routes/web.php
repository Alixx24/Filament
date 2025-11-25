<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/post/khanuti-kayqi-dizayn-armenia', [HomeController::class, 'serviceStore'])->name('services.store');

Route::get('/post/{slug}', [PostController::class, 'show'])->name('customer.post.show');