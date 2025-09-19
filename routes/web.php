<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ProductController;

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
Route::get('/product-details/{id}', [WebsiteController::class, 'productDetails'])->name('product-details');
Route::get('/product-list', [WebsiteController::class, 'productList'])->name('product-list');

// Admin Authentication Routes (Public)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
});

// Admin Protected Routes
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Products - Using Resource Controller with explicit names
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Additional product routes
    Route::post('/products/{product}/toggle-thumbnail', [ProductController::class, 'toggleThumbnailStatus'])->name('products.toggle-thumbnail');
    Route::post('/products/{product}/toggle-featured', [ProductController::class, 'toggleFeatured'])->name('products.toggle-featured');
    Route::post('/products/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');

    // Brands
    Route::get('/brands', [AdminHomeController::class, 'brands'])->name('brands');
    Route::get('/brands/create', [AdminHomeController::class, 'addBrand'])->name('brands.create');

    // Categories
    Route::get('/categories', [AdminHomeController::class, 'categories'])->name('categories');
    Route::get('/categories/create', [AdminHomeController::class, 'addCategory'])->name('categories.create');
    Route::post('/categories', [AdminHomeController::class, 'storeCategory'])->name('categories.store');

    // Orders
    Route::get('/orders', [AdminHomeController::class, 'orders'])->name('orders');
    Route::get('/orders/{id}', [AdminHomeController::class, 'orderDetails'])->name('orders.details');
    Route::get('/order-tracking', [AdminHomeController::class, 'orderTracking'])->name('order-tracking');

    // Slider - Using Resource Controller
    Route::resource('slider', SliderController::class);
    Route::post('/slider/update-order', [SliderController::class, 'updateOrder'])->name('slider.update-order');
    Route::post('/slider/{slider}/toggle-status', [SliderController::class, 'toggleStatus'])->name('slider.toggle-status');

    // Other Admin Pages
    Route::get('/coupons', [AdminHomeController::class, 'coupons'])->name('coupons');
    Route::get('/users', [AdminHomeController::class, 'users'])->name('users');
    Route::get('/settings', [AdminHomeController::class, 'settings'])->name('settings');
});
