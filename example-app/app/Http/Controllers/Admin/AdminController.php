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
    public function category(){

        $categories = Category::all();
        return view('layout.admin.category', compact('categories'));
    }
    public function account(){
        return view('layout.admin.account');
    }
    public function comment(Request $request){
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
