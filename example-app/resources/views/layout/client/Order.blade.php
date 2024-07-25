@extends('layout.master')
@section('contents')
@title('Khác')
<div>
    <form action="/orders" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="1"> <!-- ID của sản phẩm -->
        <input type="hidden" name="user_id" value="1"> <!-- ID của người dùng -->
        <input type="text" name="description" placeholder="Description">
        <input type="text" name="address" placeholder="Address" required>
        <input type="number" name="total" step="0.01" placeholder="Total" required>
        <input type="text" name="status" placeholder="Status" required>
        <input type="date" name="date" placeholder="Date" required>
        <input type="text" name="payment_method" placeholder="Payment Method" required>
        <button type="submit">Place Order</button>
    </form>
</div>
@endsection
