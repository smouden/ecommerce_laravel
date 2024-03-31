<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('products', ProductController::class);

    // Vous pouvez ajouter d'autres routes administratives ici
});

//Route::resource('categories', CategoryController::class);
//Route::resource('products', BrandController::class);