<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;

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
Route::get('shop', [ShopController::class, 'index']);
Route::get('product/{id}', [ShopController::class, 'details'])->name('product');
Route::get('checkout',[ShopController::class,'checkout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('login',[HomeController::class,'login'])->name('login');
