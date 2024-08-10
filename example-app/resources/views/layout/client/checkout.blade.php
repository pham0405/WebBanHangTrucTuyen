@extends('layout.master')
@section('contents')
    @title('thanh toán')

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
        </div>
        <div id="checkout">
            <h3 style="text-align: center; font-weight: 600; padding-bottom: 15px; color: var(--scondry--color);">
                Thêm Địa Chỉ Giao Hàng</h3>
            <form method="POST" action="{{ route('momo_payment') }}" >
                @csrf
                <div class="form-group">
                    <label for="">Tên: </label>
                    <input type="text" name="customer_name" class="form-control"
                        value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="">Email: </label>
                    <input type="email" name="customer_email" class="form-control"
                        value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại: </label>
                    <input type="text" name="customer_phone" class="form-control"
                        value="{{ Auth::user()->phone_number }}">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ nhận hàng: </label>
                    <input type="text" name="customer_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phương Thức Thanh Toán: </label>
                    <select name="payment" class="form-control">
                        <option value="">Vui Lòng Chọn Phương Thức Thanh Toán</option>
                        <option value="COD">Thanh Toán Khi Nhận Hàng</option>
                    </select>
                </div>
                <br>
                <input type="hidden" name="total_momo" value="{{ $totalAmount }}">
                <button type="submit" class="btn btn-primary">Thanh toán MOMO  </button>
            </form>
            <br>
            <!-- onePay Payment Form -->
            <form method="POST" action="{{route('vnpay_payment')}}">
                @csrf
                <input type="hidden" name="total_vnpay" value="{{ $totalAmount }}">
                <button type="submit" class="btn btn-primary">Thanh toán VNPAY</button>
            </form>
          
        </div>
       
        
    </section>
@endsection
