<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('api/products', [ProductController::class,'index']);
Route::get('api/products/{id}', [ProductController::class,'show']);
Route::post('api/products', [ProductController::class,'store']);
Route::put('api/products/{id}', [ProductController::class,'update']);
Route::delete('api/products/{id}', [ProductController::class,'destroy']);
