<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Controller;

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', [WebsiteController::class, 'index'])->name('index');
 Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
 Route::get('/login', [WebsiteController::class, 'login'])->name('login');
 Route::get('/register', [WebsiteController::class, 'register'])->name('register');
 Route::get('/cart', [WebsiteController::class, 'cart'])->name('cart');
 Route::get('/wishlist', [WebsiteController::class, 'wishlist'])->name('wishlist');
 Route::get('/about', [WebsiteController::class, 'about'])->name('about');
 Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
 Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');
 Route::get('/my-account', [WebsiteController::class, 'myAccount'])->name('my-account');
 Route::get('/product-details', [WebsiteController::class, 'productDetails'])->name('product-details');
 Route::get('/product-list', [WebsiteController::class, 'productList'])->name('product-list');
