<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\client\HomepageController;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\ContactController;

// Client routes


Route::prefix('/')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/sanpham', [HomepageController::class, 'products'])->name('product');
    Route::get('/baiviet', [HomepageController::class, 'blog'])->name('blog');
    Route::get('/lienhe', [HomepageController::class, 'contact'])->name('contact');
    Route::get('/chinhsach', [HomepageController::class, 'Orther'])->name('orther');
    Route::get('/product/{id}', [HomepageController::class, 'showProduct'])->name('products.detail');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->middleware('auth')->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::get('/cart/items', [HomepageController::class, 'getCartItems'])->name('cart.items');
    Route::get('/cart/count', [CartController::class, 'getCartCount']);
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::patch('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');
    Route::get('/gioithieu', [HomepageController::class, 'gioithieu'])->name('gioithieu');



    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('/payment', [PaymentController::class, 'pay'])->name('payment.pay');
    Route::get('/payment/return', [PaymentController::class, 'return'])->name('payment.return');


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
require __DIR__ . '/auth.php';

// client


Route::resource('products', ProductController::class);

Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
