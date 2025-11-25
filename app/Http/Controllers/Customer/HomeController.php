<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('customer.home', compact('posts'));
  }

  public function serviceStore()
  {
    return view('customer.posts.store-design');
  }

  public function about()
  {
    return view('customer.about');
  }

  public function contact()
  {
    dd(2);
  }
  public function services()
  {
    dd('3');
  }
}
