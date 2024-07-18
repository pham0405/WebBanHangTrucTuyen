<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Product\CategoryController;
use App\Http\Controllers\Admin\HomepageController;
Route::get('/',[HomepageController::class , 'index']);

