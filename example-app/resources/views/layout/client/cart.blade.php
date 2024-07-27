@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Giỏ hàng</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <h1>Giỏ hàng của bạn</h1>

            @if (isset($cartItems) && count($cartItems) > 0)
                <ul class="list-group">
                    @foreach ($cartItems as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $item->name }} - {{ $item->quantity }}
                            <form action="{{ route('cartremove', $item->id) }}" method="POST" class="ml-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Giỏ hàng của bạn đang trống.</p>
            @endif

            <form action="{{ route('cartadd') }}" method="POST" class="mt-4">
                @csrf
                <div class="form-group">
                    <label for="name">Tên sản phẩm:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantity">Số lượng:</label>
                    <input type="number" name="quantity" id="quantity" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
            </form>
        </div>
    </body>

    </html>


@endsection
