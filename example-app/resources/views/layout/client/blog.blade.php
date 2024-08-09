@extends('layout.master')
@section('contents')
    @title('Sản Phẩm')
    <div class="row">

        <div class="product-section mt-150 mb-150">
            <div class="container">
            
                <div class="row product-lists">

                    @foreach ($blog as $post)
                        <div class="col-lg-4 col-md-6 text-center strawberry">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="">
                                        <img src="{{ $post->image }}" class="imgthumbnail" alt="{{ $post->name }}">
                                    </a>
                                </div>
                                
                                    <h3 class="card-title pt-4 m-0">{{ $post->name }}</h3>
                             
                                <h3 class="secondary-font text-primary">{{ $post->title }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
