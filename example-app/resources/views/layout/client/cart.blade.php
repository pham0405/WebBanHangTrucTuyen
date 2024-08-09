@extends('layout.master')

@section('contents')
    @title('Giỏ hàng')

    <div class="container md-9">
        <div class="row">
            <h1>Giỏ hàng của bạn</h1>

            @if ($carts->isEmpty())
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
                        @foreach ($carts as $cart)
                            <tr>
                                <td><img src="{{ $cart->product->image }}" class="img-fluid" alt="{{ $cart->product->name }}"
                                        style="width: 100px;"></td>
                                <td>{{ $cart->product->name }}</td>
                                <td>
                                    <form action="{{ route('cart.update', $cart->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ $cart->quantity - 1 }}">
                                        <button type="submit" class="btn btn-sm btn-secondary">-</button>
                                    </form>
                                    {{ $cart->quantity }}
                                    <form action="{{ route('cart.update', $cart->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ $cart->quantity + 1 }}">
                                        <button type="submit" class="btn btn-sm btn-secondary">+</button>
                                    </form>
                                </td>
                                <td>${{ $cart->product->price }}</td>
                                <td>${{ $cart->total }}</td>
                                <td>
                                    <form action="{{ route('cart.remove', $cart->id) }}" method="POST">
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
                        <tr>
                            <td>Tổng Giỏ Hàng</td>
                            <td>{{ number_format($totalAmount, 2) }} VNĐ</td>
                        </tr>
                        <tr>
                            <td>Tổng Số Lượng Sản Phẩm</td>
                            <td>{{ $totalQuantity }} Sản Phẩm</td>
                        </tr>
                        <tr>
                            <td>Phí Vận Chuyển</td>
                            <td>Miễn Phí</td>
                        </tr>
                        <tr>
                            <td><strong>Tổng Tiền Cần Thanh Toán</strong></td>
                            <td><strong>{{ number_format($totalAmount, 2) }} VNĐ</strong></td>
                       
                        </tr>
                   
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
