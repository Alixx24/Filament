<?php

use App\Http\Controllers\Customer\AiProductsController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\PostController;
use App\Http\Controllers\Customer\ProductController;
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

Route::get('/account-chatgpt', [ProductController::class, 'chatGpt'])->name('customer.pricing.chatgpt.index');
Route::get('/account-ai', [PostController::class, 'chatAiPricing'])->name('customer.pricing.ai.index');
Route::get('/account-gemini', [ProductController::class, 'chatGemeniPricing'])->name('customer.pricing.gemini.index');
Route::get('/account-claude', [ProductController::class, 'chatClaudePricing'])->name('customer.pricing.claude.index');
Route::get('/account-cursor', [ProductController::class, 'chatCursorPricing'])->name('customer.pricing.cursor.index');
Route::get('/account-spotify', [ProductController::class, 'spotifyPricing'])->name('customer.pricing.spotify.index');
Route::get('/account-tradingview', [ProductController::class, 'tradingViewPricing'])->name('customer.pricing.Tradingview.index');
Route::get('/account-linkedIn', [ProductController::class, 'linkedInPricing'])->name('customer.pricing.linkedIn.index');
Route::get('/account-canva', [ProductController::class, 'canvaPricing'])->name('customer.pricing.canva.index');


//ChatGpt
Route::get('/account-chatgpt/{slug}', [ProductController::class, 'chatGptDetail'])->name('customer.doc.chatgpt.detail');

//ChatGpt
Route::get('/account-canva/{slug}', [ProductController::class, 'canvaDetail'])->name('customer.doc.canva.detail');

//gemini
Route::get('/account-gemini/{slug}', [ProductController::class, 'geminiDetail'])->name('customer.doc.gemini.detail');

//claude
Route::get('/account-claude/{slug}', [ProductController::class, 'claudeDetail'])->name('customer.doc.claude.detail');

//claude
Route::get('/account-cursor/{slug}', [ProductController::class, 'cursorDetail'])->name('customer.doc.cursor.detail');

//claude
Route::get('/account-spotify/{slug}', [ProductController::class, 'spotifyDetail'])->name('customer.doc.spotify.detail');

//spotify
Route::get('/account-tradingView/{slug}', [ProductController::class, 'TradingViewDetail'])->name('customer.doc.tradingview.detail');

//spotify
Route::get('/account-linkedIn/{slug}', [ProductController::class, 'linkedInDetail'])->name('customer.doc.linkedIn.detail');


//ai products
// Route::get('/product/chatgpt-go', [AiProductsController::class, 'setPrice'])->name('product.go');
// Route::get('/product/chatgpt-plus', [AiProductsController::class, 'setPrice'])->name('product.plus');
// Route::get('/product/chatgpt-pro', [AiProductsController::class, 'setPrice'])->name('product.pro');
// Route::get('/product/gemini-4', [AiProductsController::class, 'setPrice'])->name('product.gemini4');

//pay
Route::post('/payment/{product}', [PaymentController::class, 'pay'])->name('payment.pay'); 
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