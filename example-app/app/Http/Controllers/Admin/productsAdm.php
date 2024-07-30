<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsAdm extends Controller
{
    public function productsAdm()
    {

        // Lấy tất cả các sản phẩm từ CSDL

        $products = Product::all();
        return view('layout.admin.products', compact('products'));
    }
}
