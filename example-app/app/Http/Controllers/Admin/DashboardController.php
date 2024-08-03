<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $productCount = Product::count();
        $cateCount = Category::count();
        $userCount = User::count();
        $products = Product::orderBy('view', 'desc')->take(5)->get();
        return view('layout.admin.dashboard',
        [
            'productCount' => $productCount,
            'cateCount' => $cateCount,
            'userCount' => $userCount,
            'products' => $products,
         //   'comments' => $comments,
        ]
        );
    }




}
