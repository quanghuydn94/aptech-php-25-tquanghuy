<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
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
    return view('Login/login');
});
Route::post('/', [LoginController::class, 'login'])->name('member.login');
Route::get('/login', function () {return view('Login/login');})->name('member.logout');

Route::get('register/index', [MemberController::class, 'index'])->name('member.index');
Route::get('register/create', [MemberController::class, 'create'])->name('member.create');
Route::post('register/create', [MemberController::class, 'store'])->name('member.store');
Route::get('register/active', function () {return view('Register/active');})->name('member.active');
Route::get('register/active', [MemberController::class, 'active'])->name('member.active');

Route::get('register/edit/{Id}', [MemberController::class, 'edit'])->name('member.edit');
Route::post('register/edit/{Id}', [MemberController::class, 'update'])->name('member.update');
Route::get('register/delete/{id}', [MemberController::class, 'destroy'])->name('member.delete');