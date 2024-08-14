@extends('layout.master')
@section('contents')
    @title('Trang Chủ')
    <div>
        <div>
            <section id="banner" style="background: #F9F3EC;">
                <div class="container">
                    <div class="swiper main-swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide py-5">
                                <div class="row banner-content align-items-center">
                                    <div class="img-wrapper col-md-5">
                                        <img src="{{ asset('assets/client/images/banner-img.png') }}" class="img-fluid">
                                    </div>
                                    <div class="content-wrapper col-md-7 p-5 mb-5">
                                        <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off
                                        </div>
                                        <h2 class="banner-title display-1 fw-normal">Best destination for <span
                                                class="text-primary">your
                                                pets</span>
                                        </h2>
                                        <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                            shop now
                                            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                                <use xlink:href="#arrow-right"></use>
                                            </svg></a>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide py-5">
                                <div class="row banner-content align-items-center">
                                    <div class="img-wrapper col-md-5">
                                        <img src="{{ asset('assets/client/images/banner-img3.png') }}" class="img-fluid">
                                    </div>
                                    <div class="content-wrapper col-md-7 p-5 mb-5">
                                        <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off
                                        </div>
                                        <h2 class="banner-title display-1 fw-normal">Best destination for <span
                                                class="text-primary">your
                                                pets</span>
                                        </h2>
                                        <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                            shop now
                                            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                                <use xlink:href="#arrow-right"></use>
                                            </svg></a>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide py-5">
                                <div class="row banner-content align-items-center">
                                    <div class="img-wrapper col-md-5">
                                        <img src="{{ asset('assets/client/images/banner-img4.png') }}" class="img-fluid">
                                    </div>
                                    <div class="content-wrapper col-md-7 p-5 mb-5">
                                        <div class="secondary-font text-primary text-uppercase mb-4">Save 10 - 20 % off
                                        </div>
                                        <h2 class="banner-title display-1 fw-normal">Best destination for <span
                                                class="text-primary">your
                                                pets</span>
                                        </h2>
                                        <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                            shop now
                                            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                                <use xlink:href="#arrow-right"></use>
                                            </svg></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="swiper-pagination mb-5"></div>
                    </div>
                </div>
            </section>

            <section id="categories">
                <div class="container my-3 py-5">
                    <div class="row my-5">
                        <div class="col text-center">
                            <a href="#" class="categories-item">
                                <iconify-icon class="category-icon" icon="ph:bowl-food"></iconify-icon>
                                <h5>Foodies</h5>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="#" class="categories-item">
                                <iconify-icon class="category-icon" icon="ph:bird"></iconify-icon>
                                <h5>Bird Shop</h5>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="#" class="categories-item">
                                <iconify-icon class="category-icon" icon="ph:dog"></iconify-icon>
                                <h5>Dog Shop</h5>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="#" class="categories-item">
                                <iconify-icon class="category-icon" icon="ph:fish"></iconify-icon>
                                <h5>Fish Shop</h5>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="#" class="categories-item">
                                <iconify-icon class="category-icon" icon="ph:cat"></iconify-icon>
                                <h5>Cat Shop</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="clothing" class="my-5 overflow-hidden">
                <div class="container pb-5">

                    <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
                        <h2 class="display-3 fw-normal">Pet Clothing</h2>
                        <div>
                            <a href="{{route('product')}}" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                shop now
                                <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                    <use xlink:href="#arrow-right"></use>
                                </svg></a>
                        </div>
                    </div>
                    <div class="products-carousel swiper">
                        <div class="swiper-wrapper">
                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <div class="card position-relative">

                                        <a href="{{ route('products.detail', ['id' => $product->id]) }}">
                                            <img src="{{ $product->image }}" class="imgthumbnail"
                                                alt="{{ $product->name }}">
                                        </a>

                                        <div class="card-body p-0">
                                            <a href="{{ route('products.detail', ['id' => $product->id]) }}">
                                                <h3 class="card-title pt-4 m-0">{{ $product->name }}</h3>
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
                                                <h3 class="secondary-font text-primary">{{ number_format($product->price) }} VNĐ</h3>
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
            </section>



            <section id="banner-2" class="my-3" style="background: #F9F3EC;">
                <div class="container">
                    <div class="row flex-row-reverse banner-content align-items-center">
                        <div class="img-wrapper col-12 col-md-6">
                            <img src="{{ asset('assets/client/images/banner-img2.png') }}" class="img-fluid">
                        </div>
                        <div class="content-wrapper col-12 offset-md-1 col-md-5 p-5">
                            <div class="secondary-font text-primary text-uppercase mb-3 fs-4">Upto 40% off</div>
                            <h2 class="banner-title display-1 fw-normal">Clearance sale !!!
                            </h2>
                            <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                shop now
                                <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                    <use xlink:href="#arrow-right"></use>
                                </svg></a>
                        </div>

                    </div>
                </div>
            </section>
            <section id="clothing" class="my-5 overflow-hidden">
                <div class="container pb-5">

                    <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
                        <h2 class="display-3 fw-normal">Pet Selling</h2>
                        <div>
                            <a href="{{route('product')}}" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                                shop now
                                <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                    <use xlink:href="#arrow-right"></use>
                                </svg></a>
                        </div>
                    </div>
                    <div class="products-carousel swiper">
                        <div class="swiper-wrapper">
                            @foreach ($products as $product)
                                <div class="swiper-slide">
                                    <div class="card position-relative">

                                        <a href="{{ route('products.detail', ['id' => $product->id]) }}">
                                            <img src="{{ $product->image }}" class="imgthumbnail"
                                                alt="{{ $product->name }}">
                                        </a>

                                        <div class="card-body p-0">
                                            <a href="{{ route('products.detail', ['id' => $product->id]) }}">
                                                <h3 class="card-title pt-4 m-0">{{ $product->name }}</h3>
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
                                                <h3 class="secondary-font text-primary">{{ number_format($product->price) }} VNĐ</h3>
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
            </section>

            <section id="register" style="background: url('images/background-img.png') no-repeat;">
                <div class="container ">
                    <div class="row my-5 py-5">
                        <div class="offset-md-3 col-md-6 my-5 ">
                            <h2 class="display-3 fw-normal text-center">Get 20% Off on <span class="text-primary">first
                                    Purchase</span>
                            </h2>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        id="email" placeholder="Enter Your Email Address">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="email"
                                        id="password1" placeholder="Create Password">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="email"
                                        id="password2" placeholder="Repeat Password">
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-dark btn-lg rounded-1">Register it now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            

          

        </div>
    </div>
@endsection
