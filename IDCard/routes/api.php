<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IDcardController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/test',[IDcardController::class,'store']);
Route::post('/testDemo',[IDcardController::class,'attendance']);
Route::post('/course',[IDcardController::class,'course']);
Route::get('/showall',[IDcardController::class,'retrive']);
Route::get('/single/{id}',[IDcardController::class,'onerecord']);