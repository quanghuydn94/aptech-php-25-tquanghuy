<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/cart', [ProductController::class, 'cart'])->name('product.Cart');
Route::get('product/cart/{Id}', [ProductController::class, 'addCart'])->name('product.addCart');
Route::get('product/delete/{Id}', [SessionController::class, 'destroy'])->name('product.delete');