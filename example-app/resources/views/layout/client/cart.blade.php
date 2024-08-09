@extends('layout.master')

@section('contents')
@title('Giỏ hàng')

<div class="container md-9">
    <div class="row">
        <h1>Giỏ hàng của bạn</h1>
        
        @if($carts->isEmpty())
            <p>Giỏ hàng của bạn đang trống.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carts as $cart)
                    <tr id="cart-item-{{ $cart->id }}">
                        <td><img src="{{ $cart->product->image }}" class="img-fluid" alt="{{ $cart->product->name }}" style="width: 100px;"></td>
                        <td>{{ $cart->product->name }}</td>
                        <td>
                            <button class="btn btn-sm btn-secondary decrease-quantity" data-id="{{ $cart->id }}">-</button>
                            <span class="quantity">{{ $cart->quantity }}</span>
                            <button class="btn btn-sm btn-secondary increase-quantity" data-id="{{ $cart->id }}">+</button>
                        </td>
                        <td>${{ $cart->product->price }}</td>
                        <td class="total">${{ $cart->total }}</td> <!-- Thêm class "total" để dễ dàng cập nhật bằng JavaScript -->
                        <td>
                            <form action="{{ route('cart.remove', $cart->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="" class="btn btn-primary">Thanh toán</a>
        @endif
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Xử lý khi nhấn nút giảm số lượng
    $('.decrease-quantity').click(function(event) {
        event.preventDefault();
        var cartId = $(this).data('id');
        var quantityElem = $(this).siblings('.quantity');
        var currentQuantity = parseInt(quantityElem.text());

        if (currentQuantity > 1) { // Đảm bảo số lượng không giảm xuống dưới 1
            $.ajax({
                url: '{{ route('cart.update', ':id') }}'.replace(':id', cartId),
                method: 'PATCH',
                data: {
                    _token: '{{ csrf_token() }}',
                    quantity: currentQuantity - 1
                },
                success: function(response) {
                    if (response.success) {
                        quantityElem.text(response.newQuantity);
                        $('#cart-item-' + cartId + ' .total').text('$' + response.newTotal);
                    } else {
                        console.error('Cập nhật số lượng thất bại:', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Lỗi AJAX:', status, error);
                }
            });
        }
    });

    // Xử lý khi nhấn nút tăng số lượng
    $('.increase-quantity').click(function(event) {
        event.preventDefault();
        var cartId = $(this).data('id');
        var quantityElem = $(this).siblings('.quantity');
        var currentQuantity = parseInt(quantityElem.text());

        $.ajax({
            url: '{{ route('cart.update', ':id') }}'.replace(':id', cartId),
            method: 'PATCH',
            data: {
                _token: '{{ csrf_token() }}',
                quantity: currentQuantity + 1
            },
            success: function(response) {
                if (response.success) {
                    quantityElem.text(response.newQuantity);
                    $('#cart-item-' + cartId + ' .total').text('$' + response.newTotal);
                } else {
                    console.error('Cập nhật số lượng thất bại:', response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Lỗi AJAX:', status, error);
            }
        });
    });
});
</script>





