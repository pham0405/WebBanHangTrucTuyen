<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ordersDetail extends Controller
{
    public function ordersDetail(){
        return view('layout.admin.ordersDetail');
    }
}
