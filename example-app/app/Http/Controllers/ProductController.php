<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index(Request $request)
    // {
    //     $search = $request->input('query');
    //     $product_categories = Category::all();

    //     if ($search) {
    //         $products = Product::where('name', 'like', "%{$search}%")->get();
    //     } else {
    //         $products = Product::all();
    //     }

    //     return view('layout.client.products', [
    //         'products' => $products,
    //         'product_categories' => $product_categories
    //     ]);
    // }

    // public function show($id)
    // {
    //     $product = Product::find($id);

    //     if (!$product) {
    //         abort(404);
    //     }

    //     $product_categories = Category::all();
    //     $comments = $product->comments()->latest()->get(); 

    //     return view('layout.client.products-detail', [
    //         'product' => $product,
    //         'product_categories' => $product_categories,
    //         'comments' => $comments
    //     ]);
    // }

    // public function productsByCategory($categoryId)
    // {
    //     $category = Category::find($categoryId);

    //     if (!$category) {
    //         abort(404);
    //     }

    //     $products = $category->products;
    //     $product_categories = Category::all(); 

    //     return view('layout.client.products', [
    //         'products' => $products,
    //         'product_categories' => $product_categories
    //     ]);
    // }
}