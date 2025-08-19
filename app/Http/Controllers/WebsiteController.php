<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    return view('shop');
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
    return view('product-details');
   }

}
