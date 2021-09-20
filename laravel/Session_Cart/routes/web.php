<?php

use App\Http\Controllers\SessionController;
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
Route::get('session', [SessionController::class, 'index'])->name('session.index');
Route::get('session/create', [SessionController::class, 'create'])->name('session.create');
Route::post('session/create', [SessionController::class, 'store'])->name('session.store');
Route::get('session/delete/{id}', [SessionController::class, 'destroy'])->name('session.delete');
Route::get('session/edit/{id}', [SessionController::class, 'edit'])->name('session.edit');
Route::post('session/edit/{id}', [SessionController::class, 'update'])->name('session.update');