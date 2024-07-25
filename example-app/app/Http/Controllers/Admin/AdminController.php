<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){
        return view('layout.admin.dashboard');

    }
    public function productsAdm(){
        return view('layout.admin.products');
    }
    public function dashboard(){
        return view('layout.admin.dashboard');
    }
    public function category(){
        return view('layout.admin.category');
    }
    public function account(){
        return view('layout.admin.account');
    }
    public function comment(){
        return view('layout.admin.comment');
    }
    public function orders(){
        return view('layout.admin.orders');
    }
    public function addProd(){
        return view('layout.admin.addProd');
    }
    public function addCate(){
        return view('layout.admin.addCate');
    }
    public function ordersDetail(){
        return view('layout.admin.ordersDetail');
    }
}
