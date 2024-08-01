<?php

use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/',[HomepageController::class , 'index'])->name('homepage');
Route::get('/sanpham',[HomepageController::class , 'products'])->name('product');
Route::get('/baiviet',[HomepageController::class , 'blog'])->name('blog');
Route::get('/lienhe',[HomepageController::class , 'contact'])->name('contact');
Route::get('/khac',[HomepageController::class , 'Orther'])->name('orther');



// admin
Route::get('/admin',[DashboardController::class , 'dashboard'])->name('admin');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/account',[AdminController::class , 'account'])->name('account');
Route::get('/comment',[AdminController::class , 'comment'])->name('comment');
Route::get('/orders',[AdminController::class , 'orders'])->name('orders');
Route::get('/ordersDetail',[AdminController::class , 'ordersDetail'])->name('ordersDetail');

<<<<<<< HEAD
//CategoryAdmin
Route::get('/category',[CategoryController::class , 'index'])->name('category');
Route::get('/category/create',[CategoryController::class , 'create'])->name('category.create');
Route::post('/category',[CategoryController::class , 'store'])->name('category.store');
Route::get('/category/{id}',[CategoryController::class , 'show'])->name('category.show');
Route::get('/category/{id}/edit',[CategoryController::class , 'edit'])->name('category.edit');
Route::put('/category/{id}',[CategoryController::class , 'update'])->name('category.update');
Route::delete('/category/{id}',[CategoryController::class , 'destroy'])->name('category.destroy');

//productsAdmin
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
=======
>>>>>>> e54e773269abd5fb17b8ae212ec676f9cc6f17a6


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
