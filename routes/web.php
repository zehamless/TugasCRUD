<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

Route::get('/', [CartController::class, 'cart']);
Route::get('/admin', [ProductController::class, 'adminIndex'])->name('admin.index');
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.cart');
