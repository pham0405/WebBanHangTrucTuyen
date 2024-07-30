<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //

    public function index(){
        return view('layout.client.homepage');
        
    }


    public function products(){
        $products = Product::All();
        return view('layout.client.products',compact('products'));
    }

    public function blog(){
        return view('layout.client.blog');
    }

    public function contact(){
        return view('layout.client.contact');
    }

    public function orther(){
        return view('layout.client.orther');
    }

}
