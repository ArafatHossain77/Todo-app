<?php

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

Route::get('/index',[\App\Http\Controllers\TodoController::class,'index'])->name('index');
Route::post('/store', [\App\Http\Controllers\TodoController::class, 'store']) ->name('storeTodo');
Route::delete('/delete', [\App\Http\Controllers\TodoController::class, 'distroy']) ->name('deleteTodo');

