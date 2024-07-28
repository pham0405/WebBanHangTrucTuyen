<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\user;
class DashboardController extends Controller
{
    public function dashboard()
    {
        $productCount = Product::count();
        $cateCount = Category::count();
        $userCount = User::count();        // Truyền dữ liệu tới view
        return view('layout.admin.dashboard', compact('productCount', 'cateCount', 'userCount'));
        // Nếu muốn truyền thêm dữ liệu tới view, bạn có thể truyền vào đây
    }

}
