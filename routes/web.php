<?php

use App\Http\Controllers\AutoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cortes',[App\Http\Controllers\CorteController::class,'index'])->name('cortes.index');

Route::get('/cortes/{corte}',[App\Http\Controllers\CorteController::class,'show'])->name('cortes.show');

Route::get('/cortes/{corte}/edit',[App\Http\Controllers\CorteController::class,'edit'])->name('cortes.edit');

Route::put('/cortes/{corte}',[App\Http\Controllers\CorteController::class,'update'])->name('cortes.update');

Route::get('/registros',[App\Http\Controllers\RegistroController::class,'index'])->name('registros.index');

Route::get('/registros/{registro}',[App\Http\Controllers\RegistroController::class,'show'])->name('registros.show');

Route::get('/registros/{registro}/edit',[App\Http\Controllers\RegistroController::class,'index'])->name('registros.edit');

Route::put('/registros/{registro}',[App\Http\Controllers\RegistroController::class,'update'])->name('registros.update');
