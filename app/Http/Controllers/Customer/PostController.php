<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->get()[0];

        return view('customer.posts.show', compact('post'));
    }

    public function chatAiPricing()
    {
        return view('customer.pricing.ai');
    }

     public function chatGemeniPricing()
    {
        return view('customer.pricing.gemeni');
    }

    public function chatGptPricing()
    {
        return view('customer.pricing.chatgpt');
    }
}
