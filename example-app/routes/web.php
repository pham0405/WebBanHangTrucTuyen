<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\Admin\AdminController;



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





