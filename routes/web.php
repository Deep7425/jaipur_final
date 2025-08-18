<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', [WebsiteController::class, 'index'])->name('index');
 Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
