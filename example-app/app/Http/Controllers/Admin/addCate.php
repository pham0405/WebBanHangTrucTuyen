<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class addCate extends Controller
{
    public function addCate(){
        return view('layout.admin.addCate');
    }
}
