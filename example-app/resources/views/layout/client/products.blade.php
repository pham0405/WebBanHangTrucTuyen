@extends('layout.master')
@section('contents')
    @title('Sản Phẩm')
    <div class="row">
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-filters">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                @foreach ($product_categories as $cate)
                                    <li data-filter=".category-{{ $cate->id }}">{{ $cate->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row product-lists">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 text-center category-{{ $product->category_id }}">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="{{ route('products.detail', ['id' => $product->id]) }}">
                                        <img src="{{ $product->image }}" class="img-thumbnail" alt="{{ $product->name }}">
                                    </a>
                                </div>
                                <a href="{{ route('products.detail', ['id' => $product->id]) }}">
                                    <h3 class="card-title pt-4 m-0">{{ $product->name }}</h3>
                                </a>
                                <h3 class="secondary-font text-primary">{{ number_format($product->price, 0, ',', '.') }} ₫</h3>
                                <a href="{{ route('cart.add', ['id' => $product->id]) }}" class="cart-btn">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
