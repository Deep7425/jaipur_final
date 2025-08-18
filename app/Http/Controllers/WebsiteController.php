<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

   public function index(Request $request){

    return view('index');

   }

   public function shop(Request $request){
    return view('shop');
   }


}
