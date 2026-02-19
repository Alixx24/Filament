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
        $products = Product::where(function ($query) {
            $query->where('name', 'LIKE', '%chatgpt%')
                ->orWhere->orWhere('name', 'LIKE', '%ChatGPT%');
        })
            ->where('status', 1)
            ->get();

        return view('customer.pricing.chatgpt', compact('products'));
    }

    public function chatGemeniPricing()
    {
        $products = Product::where('name', 'LIKE', '%Gemini%')
            ->where('status', 1)
            ->get();

        return view('customer.pricing.gemini', compact('products'));
    }

    public function chatGptDetail($slug)
    {
        $product = Product::where('slug', $slug)->get()[0];

        return view('customer.pricing.detail-gpt', compact('product'));
    }

    public function geminiDetail($slug)
    {
        $product = Product::where('slug', $slug)->get()[0];

        return view('customer.pricing.detail-gemini', compact('product'));
    }

    public function chatClaudePricing()
    {
        $products = Product::where(function ($query) {
            $query->where('name', 'LIKE', '%claude%')
                ->orWhere->orWhere('name', 'LIKE', '%claude%');
        })
            ->where('status', 1)
            ->get();

        return view('customer.pricing.claude', compact('products'));
    }

    public function claudeDetail($slug)
    {
        $product = Product::where('slug', $slug)->get()[0];

        return view('customer.pricing.detail-claude', compact('product'));
    }



    public function chatCursorPricing()
    {
        $products = Product::where(function ($query) {
            $query->where('name', 'LIKE', '%cursor%')
                ->orWhere->orWhere('name', 'LIKE', '%cursor%');
        })
            ->where('status', 1)
            ->get();

        return view('customer.pricing.cursor', compact('products'));
    }

    public function cursorDetail($slug)
    {
        $product = Product::where('slug', $slug)->get()[0];

        return view('customer.pricing.detail-cursor', compact('product'));
    }
}
