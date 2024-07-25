<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'description' => 'nullable|string',
            'address' => 'required|string',
            'total' => 'required|numeric',
            'status' => 'required|string',
            'date' => 'required|date',
            'payment_method' => 'required|string',
        ]);

        // Tạo đơn hàng mới
        $order = Order::create($request->all());

        return response()->json(['message' => 'Order placed successfully!', 'order' => $order]);
    }
}