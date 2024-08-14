@extends('layout.master')

@section('contents')
@title('Chi tiết sản phẩm')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container md-9">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $product->image }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-4">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">{{ $product->description }}</p>
            <p class="lead">{{ number_format($product->price)}}VNĐ</p>
            <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
            </form>            
            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Quay về trang sản phẩm</a>
        </div>
        <div class=" col-md-3">
            <h4>Danh Mục</h4>
            <ul class="list-unstyled fruite-categorie">
                @foreach($product_categories as $cate)
                <li>
                    <div class="d-flex justify-content-between fruite-name">
                        <a href="#"><i class="fas fa-apple-alt me-2"></i>{{$cate->name}}</a>
                        <span>(3)</span>
                    </div>
                </li>
               
               
               @endforeach
               
            </ul>
        </div>
    </div>
    <div class="products-carousel swiper mt-5">
        <h1>Sản phẩm tương tự</h1>
        <div class="swiper-wrapper">
            @foreach ($similar_products as $similar_product)
                <div class="swiper-slide">
                    <div class="card position-relative">

                        <a href="{{ route('products.detail', ['id' => $similar_product->id]) }}">
                            <img src="{{ $similar_product->image }}" class="img-thumbnail" alt="{{ $similar_product->name }}">
                        </a>

                        <div class="card-body p-0">
                            <a href="{{ route('products.detail', ['id' => $similar_product->id]) }}">
                                <h5 class="card-title pt-2">{{ $similar_product->name }}</h5>
                            </a>
                            <div class="card-text">
                                <span class="rating secondary-font">
                                    <iconify-icon icon="clarity:star-solid"
                                        class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid"
                                        class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid"
                                        class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid"
                                        class="text-primary"></iconify-icon>
                                    <iconify-icon icon="clarity:star-solid"
                                        class="text-primary"></iconify-icon>
                                    5.0
                                </span>
                                <h3 class="secondary-font text-primary">{{ number_format($similar_product->price) }} VNĐ</h3>
                                <div class="d-flex flex-wrap mt-3">
                                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <h5 class="text-uppercase m-0">Thêm vào giỏ hàng</h5>
                                    </a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="comments-section mt-4">
        <h3>Bình luận</h3>
        <ul id="comments-list" class="list-unstyled">
            @foreach ($comments as $comment)
                <li>
                    <strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}
                    
                </li>
            @endforeach
        </ul>

        <!-- Form gửi bình luận -->
        <form action="{{ route('comments.add', ['productId' => $product->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" rows="3" placeholder="Viết bình luận..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Gửi bình luận</button>
        </form>
                    
    </div>
</div>
@endsection
