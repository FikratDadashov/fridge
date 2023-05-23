<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', [AdminController::class, 'index']);
Route::get('/product', [AdminController::class, 'create']);
Route::post('/product', [AdminController::class, 'store']);
Route::get('/product/{id}', [AdminController::class, 'edit']);
Route::put('/product/{id}', [AdminController::class, 'update']);
Route::delete('/product/{id}', [AdminController::class, 'destroy']);
