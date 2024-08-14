<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
class CartController extends Controller
{
    public function getUser()
    {
        $users = User::all();
        return view('layout.client.cart', compact('users'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->back()->withErrors('Sản phẩm không tồn tại.');
        }
    
        $user_id = Auth::id();
    
        $cart = Cart::where('user_id', $user_id)
                    ->where('product_id', $id)
                    ->first();
    
        $price = $product->price;
        $total = $price; 
    
        if ($cart) {
            $cart->increment('quantity');
            $cart->total = $cart->quantity * $price;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $id,
                'quantity' => 1,
                'total' => $total
            ]);
        }
    
        return redirect()->route('cart.view');
    }

    public function viewCart()
    {
        $user_id = Auth::id();
        $carts = Cart::with('product')->where('user_id', $user_id)->get();
        $totalAmount = $carts->sum('total');
        $totalQuantity = $carts->sum('quantity');

        return view('layout.client.cart', compact('carts', 'totalAmount', 'totalQuantity'));
    }

    public function getCartCount()
    {
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->sum('quantity');
    
        return response()->json(['count' => $count]);
    }

    public function removeFromCart($id)
    {
        $cart = Cart::find($id);

        if ($cart && $cart->user_id == Auth::id()) {
            $cart->delete();
        }

        return redirect()->route('cart.view');
    }

    public function updateQuantity(Request $request, $id)
    {
        $cart = Cart::find($id);

        if ($cart && $cart->user_id == Auth::id()) {
            $quantity = $request->input('quantity');
            if ($quantity > 0) {
                $productPrice = $cart->product->price; 
                $cart->quantity = $quantity;
                $cart->total = $quantity * $productPrice;
                $cart->save();

              
                $cartTotal = Cart::where('user_id', Auth::id())->sum('total');
                $totalQuantity = Cart::where('user_id', Auth::id())->sum('quantity');

                return response()->json([
                    'success' => true,
                    'newQuantity' => $cart->quantity,
                    'newTotal' => number_format($cart->total, 2),
                    'cartTotal' => number_format($cartTotal, 2),
                    'totalQuantity' => $totalQuantity,
                ]);
            } else {
                $cart->delete();

                
                $cartTotal = Cart::where('user_id', Auth::id())->sum('total');
                $totalQuantity = Cart::where('user_id', Auth::id())->sum('quantity');

                return response()->json([
                    'success' => true,
                    'message' => 'Sản phẩm đã được xóa.',
                    'cartTotal' => number_format($cartTotal, 2),
                    'totalQuantity' => $totalQuantity,
                ]);
            }
        }

        return response()->json(['success' => false, 'message' => 'Cập nhật số lượng thất bại.']);
    }
    public function thanhtoan()
    {
        $user_id = Auth::id();
        $carts = Cart::with('product')->where('user_id', $user_id)->get();
        $totalAmount = $carts->sum('total');
        $totalQuantity = $carts->sum('quantity');

        return view('layout.client.checkout', compact('carts', 'totalAmount', 'totalQuantity'));
    }
}
