<?php

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
// User page
Route::prefix('user')->group(function() {
    Route::get('/home', function() {
        return '<h1>Home page</h1>';
    });
    Route::get('/all-product', function() {
        return '<h1>All product</h1>';
    });
    Route::get('/product-details', function() {
        return '<h1>Product Details</h1>';
    });
    Route::get('/about-page', function() {
        return '<h1>About page</h1>';
    });
    Route::get('/login-page', function() {
        return '<h1>Login page</h1>';
    });
    Route::get('/logout-page', function () {
        return '<h1>Log out page</h1>';
    });
});

//Admin page
Route::prefix('admin')->group(function() {
    Route::get('/dashboard', function(){
        return '<h1>Dashboard page</h1>';
    });

    Route::get('/cate/all-cate', function(){
        return "<h1>All Category page</h1>";
    });
    Route::get('/cate/insert-cate', function(){
        return "<h1>Insert Category page</h1>";
    });
    Route::get('/cate/update-cate', function(){
        return "<h1>Update Category page</h1>";
    });
    Route::get('/cate/dalete-cate', function(){
        return "<h1>Delete Category page</h1>";
    });

    Route::get('/product-manage/all-product', function() {
        return '<h1>All product page</h1>';
    });
    Route::get('/product-manage/insert-product', function(){
        return '<h1>Insert product page </h1>';
    });
    Route::get('/product-manage/update-product', function(){
        return '<h1>Update product page';
    });
    Route::get('/product-manage/delete-product', function(){
        return '<h1>Delete product page';
    });
    
});