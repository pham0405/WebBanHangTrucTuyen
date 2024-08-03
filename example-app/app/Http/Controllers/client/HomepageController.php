<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;


class HomepageController extends Controller
{
    // Hiển thị trang homepage
    public function index()
    {
       
        $products = cache()->remember('products', 60, function () {
            return Product::all();
        });

        return view('layout.client.homepage', ['products' => $products]);
    }

    // Hiển thị trang sản phẩm
    public function products()
    {
        // Caching dữ liệu sản phẩm để cải thiện hiệu suất
        $products = cache()->remember('products', 60, function () {
            return Product::all();
        });

        return view('layout.client.products', ['products' => $products]);
    }
    public function blog()
{
    $posts = cache()->remember('blog', 60, function () {
        return Post::all();
    });
    return view('layout.client.blog', ['blog' => $posts]);
}
public function showProduct($id)
{
    $product = Product::find($id);

    if (!$product) {
        abort(404);
    }
    $product_categories = Category::all();
    return view('layout.client.products-detail', ['product' => $product,
        'product_categories' => $product_categories]);
}


    // Hiển thị trang liên hệ
    public function contact()
    {

        return view('layout.client.contact');
       }
    


    public function gioithieu()
    {
        return view('layout.client.gioithieu');
    }
    public function cart()
    {

        return view('layout.client.cart');
    }


    // Hiển thị trang khác
    public function orther()
    {
        return view('layout.client.orther');
    }


    
    public function getCartItems()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();
    
        return response()->json($cartItems);
    }
}
