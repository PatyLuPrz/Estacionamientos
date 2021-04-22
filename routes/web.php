<?php

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

Route::get('autos', [AutoController::class, 'index'])->name('autos');

Route::get('autos/create', [AutoController::class, 'create'])->name('autos.create');

Route::post('autos', [AutoController::class, 'store'])->name('autos.store');

Route::get('autos/{auto}', [AutoController::class, 'show'])->name('autos.show');

Route::get('autos/{auto}/edit', [AutoController::class, 'edit'])->name('autos.edit');

Route::put('autos/{auto}', [AutoController::class, 'update'])->name('autos.update');

