<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\ProductController as ClientProductController;
use App\Http\Controllers\ContactController;

// Client routes


Route::prefix('/')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/sanpham', [HomepageController::class, 'products'])->name('product');
    Route::get('/baiviet', [HomepageController::class, 'blog'])->name('blog');
    Route::get('/lienhe', [HomepageController::class, 'contact'])->name('contact');
    Route::get('/chinhsach', [HomepageController::class, 'Orther'])->name('orther');
    Route::get('/product/{id}', [HomepageController::class, 'showProduct'])-> name('products.detail');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->middleware('auth')->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::get('/cart/items', [HomepageController::class, 'getCartItems'])->name('cart.items');
    Route::get('/cart/count', [CartController::class, 'getCartCount']);
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::patch('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');
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


// Route::resource('products', ClientProductController::class);

// Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// admin
Route::get('/admin',[DashboardController::class , 'dashboard'])->name('admin');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/account',[AdminController::class , 'account'])->name('account');
Route::get('/comment',[AdminController::class , 'comment'])->name('comment');
Route::get('/orders',[AdminController::class , 'orders'])->name('orders');
Route::get('/ordersDetail',[AdminController::class , 'ordersDetail'])->name('ordersDetail');

//CategoryAdmin
Route::get('/category',[CategoryController::class , 'index'])->name('category');
Route::get('/category/create',[CategoryController::class , 'create'])->name('category.create');
Route::post('/category',[CategoryController::class , 'store'])->name('category.store');
Route::get('/category/{id}',[CategoryController::class , 'show'])->name('category.show');
Route::get('/category/{id}/edit',[CategoryController::class , 'edit'])->name('category.edit');
Route::put('/category/{id}',[CategoryController::class , 'update'])->name('category.update');
Route::delete('/category/{id}',[CategoryController::class , 'destroy'])->name('category.destroy');

//productsAdmin
Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
Route::post('/products', [AdminProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [AdminProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [AdminProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');

