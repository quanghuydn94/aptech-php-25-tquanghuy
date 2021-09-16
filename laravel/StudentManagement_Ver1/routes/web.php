<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\StudentController;
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

/*Route Batch Management */
Route::get('batch', [BatchController::class, 'index'])->name('batch.index');
Route::get('batch/create', [BatchController::class, 'create'])->name('batch.create');
Route::post('batch/create', [BatchController::class, 'store'])->name('batch.store');
Route::get('batch/delete/{id}', [BatchController::class, 'destroy'])->name('batch.delete');
Route::get('batch/edit/{id}', [BatchController::class, 'edit'])->name('batch.edit');
Route::post('batch/edit/{id}', [BatchController::class, 'update'])->name('batch.update');

/*Route Student Management */
Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('student/create', [StudentController::class, 'store'])->name('student.store');
Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('student/edit/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');