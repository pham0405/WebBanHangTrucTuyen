<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
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

        return view('layout.client.cart', compact('carts'));
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
                $cart->quantity = $quantity;
                $cart->total = $cart->quantity * $cart->product->price;
                $cart->save();
            } else {
                $cart->delete();
            }
        }

        return redirect()->route('cart.view');
    }
}
