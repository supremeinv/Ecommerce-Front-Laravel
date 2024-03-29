<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index']);

//home page routes
Route::get('home', [HomeController::class, 'index']);

//shop pages routes
Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('category/{id}', [ShopController::class, 'category'])->name('category.shop');
Route::get('product/{id}', [ShopController::class, 'details'])->name('product');

Route::get('checkout',[CartController::class,'checkout'])->name('checkout');
Route::get('cart',[CartController::class,'index'])->name('cart');
Route::get('add-to-cart/{id}',[CartController::class,'addToCart'])->name('addToCart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');
Route::post('payment',[CartController::class,'payment'])->name('payment');
Route::post('paymentProcess',[CartController::class,'paymentProcess'])->name('payment.process');
Route::get('order-placed',[CartController::class,'orderPlaced'])->name('order.placed');

Route::get('checkout',[CheckoutController::class,'index'])->name('storeCheckout')->middleware('auth');

//auth routes
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//dropdown routes
Route::get('api/fetch-states', [DropdownController::class, 'fetchCountry']);
Route::post('api/fetch-states', [DropdownController::class, 'fetchState']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);

//account routes
Route::get('account',[AccountController::class,'index'])->middleware('auth');
Route::get('/dashboard',function(){
    dd(auth()->user());
//    return view('welcome');
})->middleware('auth');
