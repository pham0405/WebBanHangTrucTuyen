<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class account extends Controller
{
    public function account(){
        return view('layout.admin.account');
    }
}
