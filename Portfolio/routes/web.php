<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portfolio;

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

Route::get('/', [Portfolio::class ,'home'] );
Route::get('/home', [Portfolio::class ,'home']  );
Route::get('/Work', [Portfolio::class ,'work']  );
Route::get('/Contact',[Portfolio::class ,'contact']  );
Route::get('/About',  [Portfolio::class ,'about']  );
Route::get('/Skills', [Portfolio::class ,'skill']  );