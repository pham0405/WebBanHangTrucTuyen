<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{

    //

    public function index(){
        return view('layout.admin.dashboard');
        

    }
        public function dashboard(){
        return view('layout.admin.dashboard');
    }
    
    public function account()
    {
        return view('layout.admin.account');
    }
    public function comment(Request $request)
    {
        return view('layout.admin.comment');
    }
   
    public function addProd()
    {
        return view('layout.admin.addProd');
    }
    
   
}
