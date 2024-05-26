<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HistoricController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShowProducts;





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoriesController::class, 'index'])->name('category');
Route::get('/category/{id}', [CategoriesController::class, 'showCategory'])->name('category.show');
Route::get('/product/{id}', [ShowProducts::class, 'show'])->name('product.show');



Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/confirmation/{order}', [CheckoutController::class, 'confirm'])->name('checkout.confirm');


Route::get('/add-to-cart/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart')->middleware('auth');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/historic', [HistoricController::class, 'index'])->name('historic')->middleware('auth');

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
});



require __DIR__.'/auth.php';