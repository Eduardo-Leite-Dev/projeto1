<?php

use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;



Route::get('/', [IndexController::class, 'index']);
Route::get('/product',[ProductController::class, 'show']);

Route::get('/admin/product', [AdminProductController::class, 'index']);
Route::get('/admin/product/edit', [AdminProductController::class, 'edit']);

