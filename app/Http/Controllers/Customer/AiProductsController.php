<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AiProductsController extends Controller
{
     public function setPrice(Request $request)
    {
       
        // دریافت نوع محصول از URL
        $productType = $request->route()->getName();
        
        // تعیین قیمت بر اساس نوع محصول
        switch($productType) {
            case 'product.go':
                $price = 150000; // قیمت اکانت Go
                $productName = 'ChatGpt Go اکانت';
                break;
            case 'product.plus':
                $price = 250000; // قیمت اکانت Plus
                $productName = 'ChatGpt Plus اکانت';
                break;
            case 'product.pro':
                $price = 350000; // قیمت اکانت Pro
                $productName = 'ChatGpt Pro اکانت';
                break;
            case 'product.gemini4':
                $price = 450000; // قیمت اکانت جمنای 4
                $productName = 'اکانت جمنای 4';
                break;
            default:
                abort(404);
        }
        
        // اینجا می‌تونید قیمت رو به صفحه بعد بفرستید یا پردازش کنید
        return view('product.show', compact('price', 'productName'));
    }

}
