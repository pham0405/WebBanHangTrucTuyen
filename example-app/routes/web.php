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

Route::get('/admin',[AdminController::class , 'indexAdmin'])->name('indexAdmin');