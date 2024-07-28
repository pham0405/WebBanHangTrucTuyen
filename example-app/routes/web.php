<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Product\CategoryController;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// client
Route::get('/',[HomepageController::class , 'index'])->name('homepage');
Route::get('/sanpham',[HomepageController::class , 'products'])->name('product');
Route::get('/baiviet',[HomepageController::class , 'blog'])->name('blog');
Route::get('/lienhe',[HomepageController::class , 'contact'])->name('contact');
Route::get('/khac',[HomepageController::class , 'Orther'])->name('orther');



// admin
Route::get('/admin',[AdminController::class , 'index'])->name('admin');
Route::get('/productsAdm',[AdminController::class , 'productsAdm'])->name('productsAdm');
Route::get('/dashboard',[AdminController::class , 'dashboard'])->name('dashboard');
Route::get('/category',[AdminController::class , 'category'])->name('category');
Route::get('/account',[AdminController::class , 'account'])->name('account');
Route::get('/comment',[AdminController::class , 'comment'])->name('comment');
Route::get('/orders',[AdminController::class , 'orders'])->name('orders');

Route::get('/addProd',[AdminController::class , 'addProd'])->name('addProd');
Route::get('/addCate',[AdminController::class , 'addCate'])->name('addCate');
Route::get('/ordersDetail',[AdminController::class , 'ordersDetail'])->name('ordersDetail');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

