<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //

    public function index(){
        return view('layout.client.homepage');
        
    }


    public function products(){
        
        return view('layout.client.products');
    }

    public function blog(){
        return view('layout.client.blog');
    }

    public function contact(){
        return view('layout.client.contact');
    }

    public function order(){ 

    $orders = Order::all(); 
    


        return view('layout.client.order');
    }

}
