<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController as ProductReviewController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('productdetails',[FrontendController::class,'productdetails']);


// Route::resource('products', ProductController::class);
// // Route::resource('orders',OrderController::class);

// Route::get('orders',[OrderController::class,'index'])->name('orders.get');

// Route::get('reviews',[ReviewController::class,'index']);