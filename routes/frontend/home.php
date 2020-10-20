<?php

use App\Http\Controllers\Adidas\Frontend\AdidasFrontController;

Route::get('/', [AdidasFrontController::class, 'index'])->name('index');
Route::get('checkout', [AdidasFrontController::class, 'checkout'])->name('checkout');
Route::get('shop', [AdidasFrontController::class, 'shop'])->name('shop');
Route::get('single', [AdidasFrontController::class, 'single'])->name('single');
