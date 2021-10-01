<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth/login');
});

Auth::routes();

Route::post('/logout', [HomeController::class , 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
/* CRUD User by Admin*/
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('/register', [EmployeeController::class , 'create'])->name('employee.create');
Route::post('/register', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/edit/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');

/* CRUD Category by Admin*/
Route::get('/category', [CategoriesController::class , 'index'])->name('category');
Route::get('/category-create', [CategoriesController::class, 'create'])->name('category.create');
Route::post('/category-create', [CategoriesController::class , 'store'])->name('category.store');
Route::get('/category-edit/{id}', [CategoriesController::class , 'edit'])->name('category.edit');
Route::post('/category-edit/{id}', [CategoriesController::class, 'update'])->name('category.update');
Route::get('/category-delete/{id}', [CategoriesController::class, 'destroy'])->name('category.delete');

/* CRUD Product by Admin*/
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product-create', [ProductController::class, 'store'])->name('product.store');
Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product-edit/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product-delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');






