<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\StudentController;

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

// Route::get('batch', function () {
//     return view('Student/index');
// });
// Batch Management

Route::get('batch',[BatchController::class, 'index']);
Route::get('batch/create',[BatchController::class, 'create']);
Route::post('batch/create',[BatchController::class, 'store']);
Route::get('batch/edit/{Id}',[BatchController::class, 'edit']);
Route::post('batch/edit/{Id}',[BatchController::class, 'update']);
Route::get('batch/delete/{Id}',[BatchController::class, 'destroy']);

// Student Management

 Route::get('student',[StudentController::class, 'index']);
 Route::get('student/create',[StudentController::class, 'create']);
 Route::post('student/create',[StudentController::class, 'store']);
 Route::get('student/edit/{id}',[StudentController::class, 'edit']);
 Route::post('student/edit/{id}',[StudentController::class, 'update']);
 Route::get('student/delete/{id}',[StudentController::class, 'destroy']);

 
