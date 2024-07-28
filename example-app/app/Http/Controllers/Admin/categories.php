<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class categories extends Controller
{
    public function category(){

        $categories = Category::all();
        return view('layout.admin.category', compact('categories'));
    }
}
