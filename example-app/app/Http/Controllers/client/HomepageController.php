<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class HomepageController extends Controller
{
    public function index()
    {
        $products = cache()->remember('products', 60, function () {
            return Product::all();
        });

        return view('layout.client.homepage', ['products' => $products]);
    }

    public function products(Request $request)
    {
        $search = $request->input('query');
        $product_categories = Category::all();

        if ($search) {
            // Tìm kiếm sản phẩm theo tên
            $products = Product::where('name', 'like', "%{$search}%")->get();
        } else {
           
            $products = Product::all();
        }
        $product_categories = Category::all();

        return view('layout.client.products', [
            'products' => $products,
            'product_categories' => $product_categories
        ]);
    }

    // Hiển thị trang blog
    public function blog()
    {
        $posts = cache()->remember('blog', 60, function () {
            return Post::all();
        });
        return view('layout.client.blog', ['blog' => $posts]);
    }

    // Hiển thị chi tiết sản phẩm
    public function showProduct($id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            abort(404);
        }
    
        $product_categories = Category::all();
        $comments = $product->comments()->latest()->get(); // Fetch comments
    
        return view('layout.client.products-detail', [
            'product' => $product,
            'product_categories' => $product_categories,
            'comments' => $comments
        ]);
    }
    

    

    // Hiển thị trang liên hệ
    public function contact()
    {
        return view('layout.client.contact');
    }

    // Hiển thị trang khác
    public function orther()
    {
        return view('layout.client.orther');
    }

    // Lấy các mặt hàng trong giỏ hàng
    public function getCartItems()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        return response()->json($cartItems);
    }

    // Hiển thị sản phẩm theo danh mục
    public function productsByCategory($categoryId)
    {
        $category = Category::find($categoryId);
    
        if (!$category) {
            abort(404);
        }
    
        $products = $category->products;
        $product_categories = Category::all();
    
        return view('layout.client.products', [
            'products' => $products,
            'product_categories' => $product_categories
        ]);
    }


    public function addComment(Request $request, $productId)
{
    $request->validate([
        'content' => 'required|string|max:1000',
    ]);

    try {
        $comment = new Comment();
        $comment->product_id = $productId;
        $comment->user_id = Auth::id();
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->route('products.show', ['id' => $productId])
                         ->with('success', 'Bình luận đã được thêm thành công.');

    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
    }
}

    

    
   

   

    
}
