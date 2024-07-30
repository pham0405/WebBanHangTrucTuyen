<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;

// Client routes
Route::prefix('/')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/sanpham', [HomepageController::class, 'products'])->name('product');
    Route::get('/baiviet', [HomepageController::class, 'blog'])->name('blog');
    Route::get('/lienhe', [HomepageController::class, 'contact'])->name('contact');
    Route::post('/lienhe', [ContactController::class, 'contact'])->name('contact');

  


    Route::get('/gioithieu', [HomepageController::class, 'gioithieu'])->name('gioithieu');


    Route::get('/cart', [CartController::class, 'showCart'])->name('cartShow');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cartadd');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cartremove');
// gửi mail



});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
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

// Dashboard route with middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes with middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__ . '/auth.php';
