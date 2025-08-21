<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('admin.index');
    }

    public function products(Request $request){
        return view('admin.products');
    }

    public function addProduct(Request $request){
        return view('admin.add-product');
    }

    public function brands(Request $request){
        return view('admin.brands');
    }

    public function addBrand(Request $request){
        return view('admin.add-brand');
    }

    public function categories(Request $request){
        return view('admin.categories');
    }

    public function addCategory(Request $request){
        return view('admin.add-category');
    }

    public function orders(Request $request){
        return view('admin.orders');
    }

    public function orderDetails(Request $request, $id){
        return view('admin.order-details', compact('id'));
    }

    public function orderTracking(Request $request){
        return view('admin.order-tracking');
    }

    public function slider(Request $request){
        return view('admin.slider');
    }

    public function addSlide(Request $request){
        return view('admin.add-slide');
    }

    public function coupons(Request $request){
        return view('admin.coupons');
    }

    public function users(Request $request){
        return view('admin.users');
    }

    public function settings(Request $request){
        return view('admin.settings');
    }
}
