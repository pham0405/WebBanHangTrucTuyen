<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $products = Product::where('name', 'like', "%{$search}%")->get();
        } else {
            $products = Product::all();
        }

        return view('layout.client.products', [
            'products' => $products,
            'product_categories' => $product_categories
        ]);
    }

    public function showProduct($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        $product_categories = Category::all();
        $comments = $product->comments()->latest()->get();
        $similar_products = Product::where('category_id', $product->category_id)
                                    ->where('id', '!=', $product->id)
                                    ->limit(4)
                                    ->get();

        return view('layout.client.products-detail', [
            'product' => $product,
            'product_categories' => $product_categories,
            'comments' => $comments,
            'similar_products' => $similar_products
        ]);
    }

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

            return redirect()->route('products.detail', ['id' => $productId])
                             ->with('success', 'Comment added successfully.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }

    public function getCartItems()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();

        return response()->json($cartItems);
    }

    public function thanhtoan()
    {
        $user_id = Auth::id();
        $carts = Cart::with('product')->where('user_id', $user_id)->get();
        $totalAmount = $carts->sum('total');
        $totalQuantity = $carts->sum('quantity');

        return view('layout.client.checkout', compact('carts', 'totalAmount', 'totalQuantity'));
    }

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
}
