<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            $productPrice = $cart->product->price; // Lấy giá sản phẩm từ mối quan hệ
            $cart->quantity = $quantity;
            $cart->total = $quantity * $productPrice; // Tính toán tổng tiền
            $cart->save();

            return response()->json([
                'success' => true,
                'newQuantity' => $cart->quantity,
                'newTotal' => $cart->total
            ]);
        } else {
            $cart->delete();
            return response()->json(['success' => true, 'message' => 'Sản phẩm đã được xóa.']);
        }
    }

    return response()->json(['success' => false, 'message' => 'Cập nhật số lượng thất bại.']);
}



    // public function updateQuantity(Request $request, $id)
    // {
    //     $cart = Cart::find($id);

    //     if ($cart && $cart->user_id == Auth::id()) {
    //         $quantity = $request->input('quantity');
    //         if ($quantity > 0) {
    //             $cart->quantity = $quantity;
    //             $cart->total = $cart->quantity * $cart->product->price;
    //             $cart->save();
    //         } else {
    //             $cart->delete();
    //         }
    //     }

    //     return redirect()->route('cart.view');
    // }
    
   
}
