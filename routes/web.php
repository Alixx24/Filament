<?php

use App\Http\Controllers\Customer\AiProductsController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\PostController;
use App\Http\Controllers\Panel\PaymentController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/services/khanuti-kayqi-dizayn-armenia', [HomeController::class, 'serviceStore'])->name('services.store');

Route::get('/post/{slug}', [PostController::class, 'show'])->name('customer.post.show');

Route::get('/اکانت-chatgpt', [PostController::class, 'chatGptPricing'])->name('customer.pricing.chatgpt.index');
Route::get('/اکانت-ai', [PostController::class, 'chatAiPricing'])->name('customer.pricing.ai.index');
Route::get('/اکانت-gemeni', [PostController::class, 'chatGemeniPricing'])->name('customer.pricing.gemeni.index');

//ai products
Route::get('/product/chatgpt-go', [AiProductsController::class, 'setPrice'])->name('product.go');
Route::get('/product/chatgpt-plus', [AiProductsController::class, 'setPrice'])->name('product.plus');
Route::get('/product/chatgpt-pro', [AiProductsController::class, 'setPrice'])->name('product.pro');
Route::get('/product/gemini-4', [AiProductsController::class, 'setPrice'])->name('product.gemini4');


//pay
Route::get('/payment', [PaymentController::class, 'pay'])->name('payment.pay'); 
Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback'); 
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success'); 
Route::get('/payment/failed', [PaymentController::class, 'failed'])->name('payment.failed'); 

//user

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');

Route::get('login/github', function () {

    return Socialite::driver('github')->redirect();
});
//github

Route::get('login/github/callback', [AuthController::class, 'githubCallBack'])->name('login.callBack.github');

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', [AuthController::class, 'gmailCallBack'])->name('login.callBack.gmail');


Route::prefix('/user/dashboard')->middleware('auth')->group(function () {
    Route::get('/{id}', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/analysis/{linkId}/{id}', [DashboardController::class, 'analysis'])->name('dashboard.analysis.link.index');
    Route::post('/store', [DashboardController::class, 'store'])->name('dashboard.request.store');
    Route::delete('/analysis/delete/{linkId}/{id}', [DashboardController::class, 'delete'])->name('dashboard.request.delete');
    Route::post('/update-status/{id}', [DashboardController::class, 'updateStatus']);
});