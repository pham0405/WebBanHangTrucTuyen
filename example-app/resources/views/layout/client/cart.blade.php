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
                        <td>{{ number_format($cart->product->price) }} VNĐ</td>
                        <td class="total">{{ number_format($cart->total) }}VNĐ</td> 
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
           
        @endif
    
            <section id="cart-add" class="section-p1">
                <div id="subtotal">
                    <h3 style="text-align: center; font-weight: 600; padding-bottom: 15px; color: var(--scondry--color);">
                        Tổng Đơn Hàng</h3>

                    <table>
                        @foreach($carts as $cart)
                        <tr>
                            <td>Tổng Giỏ Hàng</td>
                            <td>{{ number_format($cart->total, 3) }} VNĐ</td>
                        </tr>
                        <tr>
                            <td>Tổng Số Lượng Sản Phẩm</td>
                            <td>{{ $cart->quantity }} Sản Phẩm</td>
                        </tr>
                        <tr>
                            <td>Phí Vận Chuyển</td>
                            <td>Miễn Phí</td>
                        </tr>
                        <tr>
                            <td><strong>Tổng Tiền Cần Thanh Toán</strong></td>
                            <td><strong>{{ number_format($cart->total) }} VNĐ</strong></td>
                       
                        </tr>
                   @endforeach
                    </table>
                    <form action="{{route('checkout')}}" method="POST">
                        @csrf
                        <input type="hidden" name="name" value="">
                    <button type="submit" class="btn btn-primary">Thanh toán   </button>
                    </form>
                
                </div>
               
               
                
            </section>
        </div>

    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    function updateCartSummary(response) {
        
        $('#subtotal table tr:nth-child(1) td:last-child').text(response.cartTotal + ' VNĐ');
        $('#subtotal table tr:nth-child(2) td:last-child').text(response.totalQuantity + ' Sản Phẩm');
        $('#subtotal table tr:nth-child(4) td:last-child strong').text(response.cartTotal + ' VNĐ');
    }

    $('.decrease-quantity').click(function(event) {
        event.preventDefault();
        var cartId = $(this).data('id');
        var quantityElem = $(this).siblings('.quantity');
        var currentQuantity = parseInt(quantityElem.text());

        if (currentQuantity > 1) { 
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
                        $('#cart-item-' + cartId + ' .total').text(response.newTotal + ' VNĐ');
                        updateCartSummary(response);
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
                    $('#cart-item-' + cartId + ' .total').text(response.newTotal + ' VNĐ');
                    updateCartSummary(response);
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