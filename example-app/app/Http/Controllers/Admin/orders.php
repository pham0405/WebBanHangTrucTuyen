<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class orders extends Controller
{
    public function orders(){
        return view('layout.admin.orders');
    }
}
