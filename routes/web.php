<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('site.allproducts');
// });
Route::view('test', 'layouts.sitelayout');
// Route::view('test', 'site.sitelayout');

Route::get('product/{id}', [ProductController::class, 'openProductDetails'])->name('site.product');
Route::get('cart', [CartController::class, 'openCartPage'])->name('site.cart');
Route::get('checkout', [CheckoutController::class, 'openCheckoutPage'])->name('site.checkout');
Route::get('/', [ProductController::class, 'allproducts'])->name('site.allproducts');