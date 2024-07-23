<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::where('name' , 1)
        ->orderBy('id', 'desc')
        ->get();
        return view('welcome',[
            'categoriesView'=> $categories,
            'dulieukhac' => 1,
            'dulieukhac1' => 1,
            'ord' => 1,
        ]);
    }
    public function products($id){
        $products = Product::where('category_id',$id)->get();
        return view('products',['products' => $products]);
        
    }
    //
}
