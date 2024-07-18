<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/client',[HomepageController::class , 'index']);

Route::get('/admin',[AdminController::class , 'indexAdmin']);

