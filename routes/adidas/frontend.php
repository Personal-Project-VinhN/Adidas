<?php

use App\Http\Controllers\Adidas\Frontend\AdidasFrontController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::get('/', [AdidasFrontController::class, 'index'])->name('index');
Route::get('checkout', [AdidasFrontController::class, 'checkout'])->name('checkout');
Route::get('login', [AdidasFrontController::class, 'index'])->name('login');
Route::get('register', [AdidasFrontController::class, 'index'])->name('register');
Route::get('shop', [AdidasFrontController::class, 'shop'])->name('shop');
Route::get('single', [AdidasFrontController::class, 'single'])->name('single');

