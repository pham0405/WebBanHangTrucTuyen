@extends('layout.master')

@section('contents')
@title('Chi tiết sản phẩm')

<div class="container md-9">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $product->image }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-4">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">{{ $product->description }}</p>
            <p class="lead">Price: ${{ $product->price }}</p>
            <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>            
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back to Products</a>
        </div>
        <div class=" col-md-3">
            <h4>Categories</h4>
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
</div>
@endsection
