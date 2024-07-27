<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function showCart()
    {
        // Lấy tất cả các mục trong giỏ hàng
        $cartItems = Cart::all();

        // Truyền dữ liệu đến view
        return view('layout.client.cart', ['cartItems' => $cartItems]);
    }

    public function addToCart(Request $request)
    {
        // Thêm mục vào giỏ hàng
        $cartItem = new Cart;
        $cartItem->name = $request->name;
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return redirect('/cart');
    }

    public function removeFromCart($id)
    {
        // Xóa mục khỏi giỏ hàng
        $cartItem = Cart::find($id);
        $cartItem->delete();

        return redirect('/cart');
    }
}
