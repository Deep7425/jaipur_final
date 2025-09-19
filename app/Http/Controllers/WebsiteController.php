<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
// use App\Models\Brand;

class WebsiteController extends Controller
{
    public function login(Request $request){
        return view('login');
    }

    public function register(Request $request){
        return view('register');
    }

    public function index(Request $request){
        return view('index');
    }

    public function shop(Request $request){
        $data = Product::where('thumbnail_status', 'show')->get();
        return view('shop', compact('data'));
    }

    public function cart(Request $request){
        return view('cart');
    }

    public function wishlist(Request $request){
        return view('wishlist');
    }

    public function about(Request $request){
        return view('about');
    }

    public function contact(Request $request){
        return view('contact');
    }

    public function checkout(Request $request){
        return view('checkout');
    }

    public function myAccount(Request $request){
        return view('my-account');
    }

    public function productDetails(Request $request){
        $id = base64_decode($request->id);
        $data = Product::with('category')->where('is_active', '1')->where('id', $id)->first();
        $relatedProducts = Product::with('category')->where('is_active', '1')->get();
        return view('details', compact('data' , 'relatedProducts'));
    }

    public function productList(Request $request){
        return view('product-list');
    }
}
