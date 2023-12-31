<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/add-product', [HomeController::class, 'addProduct'])->name('add');
Route::get('/product/{item}/edit', [HomeController::class, 'editProduct'])->name('edit');
Route::put('/product/{item}/update', [HomeController::class, 'updateProduct'])->name('update');
Route::delete('/product/{item}/delete', [HomeController::class, 'deleteProduct'])->name('delete');
