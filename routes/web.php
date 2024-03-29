<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\ColorController ;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);
Route::resource('products', ColorController::class);
Route::resource('products', CategoryController::class);
Route::resource('products', BrandController::class);