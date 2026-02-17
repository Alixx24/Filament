<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        dd('index');
    }

    public function chatGpt()
    {
        $products = Product::where(function($query) {
            $query->where('name', 'LIKE', '%chatgpt%')
            ->orWhere->orWhere('name', 'LIKE', '%ChatGPT%');
        })
       ->where('status',1)
            ->get();

        return view('customer.pricing.chatgpt', compact('products'));
    }

    public function chatGptDetail($slug)
    {
        $product = Product::where('slug', $slug)->get()[0];

        return view('customer.pricing.detail-gpt', compact('product'));
    }
}
