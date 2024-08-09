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

                                @foreach ($product_categories as $cate)
                                    <li data-filter=".strawberry">
                                        <a href="{{ route('products.byCategory', ['categoryId' => $cate->id]) }}">{{ $cate->name }}</a>


                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row product-lists">

                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 text-center strawberry">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="">
                                        <img src="{{ $product->image }}" class="imgthumbnail" alt="{{ $product->name }}">
                                    </a>
                                </div>
                                <a href="{{ route('products.detail', ['id' => $product->id]) }}">
                                    <h3 class="card-title pt-4 m-0">{{ $product->name }}</h3>
                                </a>
                                <h3 class="secondary-font text-primary">{{ $product->price }}</h3>
                                <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
