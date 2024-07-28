<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class comment extends Controller
{
    public function comment(){
        return view('layout.admin.comment');
    }
}
