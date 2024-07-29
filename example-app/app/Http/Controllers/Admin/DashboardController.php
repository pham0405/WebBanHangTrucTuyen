<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $totalProducts = $products->count();
        $totalQuantity = $products->sum('quantity');

        return view('layout.admin.dashboard', compact('totalProducts', 'totalQuantity'));
    }
}
