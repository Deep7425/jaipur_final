<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

// Website Routes
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

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('dashboard');
    
    // Products
    Route::get('/products', [AdminHomeController::class, 'products'])->name('products');
    Route::get('/products/create', [AdminHomeController::class, 'addProduct'])->name('products.create');
    
    // Brands
    Route::get('/brands', [AdminHomeController::class, 'brands'])->name('brands');
    Route::get('/brands/create', [AdminHomeController::class, 'addBrand'])->name('brands.create');
    
    // Categories
    Route::get('/categories', [AdminHomeController::class, 'categories'])->name('categories');
    Route::get('/categories/create', [AdminHomeController::class, 'addCategory'])->name('categories.create');
    
    // Orders
    Route::get('/orders', [AdminHomeController::class, 'orders'])->name('orders');
    Route::get('/orders/{id}', [AdminHomeController::class, 'orderDetails'])->name('orders.details');
    Route::get('/order-tracking', [AdminHomeController::class, 'orderTracking'])->name('order-tracking');
    
    // Slider
    Route::get('/slider', [AdminHomeController::class, 'slider'])->name('slider');
    Route::get('/slider/create', [AdminHomeController::class, 'addSlide'])->name('slider.create');
    
    // Other Admin Pages
    Route::get('/coupons', [AdminHomeController::class, 'coupons'])->name('coupons');
    Route::get('/users', [AdminHomeController::class, 'users'])->name('users');
    Route::get('/settings', [AdminHomeController::class, 'settings'])->name('settings');
});
