<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class,'create'])->name('create');
Route::get('/students', [StudentController::class,'index'])->name('displayData');    
Route::post('/student/store', [StudentController::class,'store'])->name('display');
Route::get('/student/{id}/show', [StudentController::class,'show'])->name('show');
Route::get('/student/{id}/edit', [StudentController::class,'edit'])->name('edit');
Route::post('/student/{id}/update', [StudentController::class,'update'])->name('update');
Route::get('/student/{id}/delete', [StudentController::class,'destroy'])->name('delete');   
