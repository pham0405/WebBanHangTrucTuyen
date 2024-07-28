<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Client routes


Route::prefix('/')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/sanpham', [HomepageController::class, 'products'])->name('product');
    Route::get('/baiviet', [HomepageController::class, 'blog'])->name('blog');
    Route::get('/lienhe', [HomepageController::class, 'contact'])->name('contact');
    Route::get('/chinhsach', [HomepageController::class, 'Orther'])->name('orther');
});

// Admin routes
Route::prefix('/admin')->group(function () {
    Route::get('/productsAdm', [AdminController::class, 'productsAdm'])->name('productsAdm');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/category', [AdminController::class, 'category'])->name('category');
    Route::get('/account', [AdminController::class, 'account'])->name('account');
    Route::get('/comment', [AdminController::class, 'comment'])->name('comment');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::get('/addProd', [AdminController::class, 'addProd'])->name('addProd');
    Route::get('/addCate', [AdminController::class, 'addCate'])->name('addCate');
    Route::get('/ordersDetail', [AdminController::class, 'ordersDetail'])->name('ordersDetail');
});

// Profile routes with middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';

// client


Route::resource('products', ProductController::class);
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

