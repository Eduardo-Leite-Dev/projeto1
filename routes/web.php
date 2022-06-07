<?php

use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/product/{product}',[ProductController::class, 'show'])->name('product');

Route::get('/admin/product', [AdminProductController::class, 'index'])->name('admin.product');
Route::get('/admin/product/edit', [AdminProductController::class, 'edit'])->name('admin.product.edit');

