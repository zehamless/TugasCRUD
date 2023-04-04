<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/admin', [ProductController::class, 'adminIndex'])->name('admin.index');
    Route::resource('products', ProductController::class);
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::resource('categories', CategoryController::class);
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [CartController::class, 'updateCart'])->name('update.cart');
    Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.cart');
});

require __DIR__.'/auth.php';
