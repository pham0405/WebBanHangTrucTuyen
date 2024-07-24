@extends('layout.master')
@section('contents')
@title('Sản Phẩm')
<div>
    <section id="clothing" class="my-5 overflow-hidden">
        <div class="container pb-5">
    
          <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
            <h2 class="display-3 fw-normal">Pet Clothing</h2>
            <div>
              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                shop now
                <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                  <use xlink:href="#arrow-right"></use>
                </svg></a>
            </div>
          </div>
    
          <div class="products-carousel swiper">
            <div class="swiper-wrapper">
    
              <div class="swiper-slide">
                <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                  New
                </div>
                <div class="card position-relative">
                  <a href="single-product.html"><img src="{{asset('assets/client/images/item1.jpg')}}" class="img-fluid rounded-4" alt="image"></a>
                  <div class="card-body p-0">
                    <a href="single-product.html">
                      <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                    </a>
    
                    <div class="card-text">
                      <span class="rating secondary-font">
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
    <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        5.0</span>
    
                      <h3 class="secondary-font text-primary">$18.00</h3>
    
                      <div class="d-flex flex-wrap mt-3">
                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                          <h5 class="text-uppercase m-0">Add to Cart</h5>
                        </a>
                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                          <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                        </a>
                      </div>
    
    
                    </div>
    
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                  New
                </div> -->
                <div class="card position-relative">
                  <a href="single-product.html"><img src="{{asset('assets/client/images/item2.jpg')}}" class="img-fluid rounded-4" alt="image"></a>
                  <div class="card-body p-0">
                    <a href="single-product.html">
                      <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                    </a>
    
                    <div class="card-text">
                      <span class="rating secondary-font">
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        5.0</span>
    
                      <h3 class="secondary-font text-primary">$18.00</h3>
    
                      <div class="d-flex flex-wrap mt-3">
                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                          <h5 class="text-uppercase m-0">Add to Cart</h5>
                        </a>
                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                          <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                        </a>
                      </div>
    
                    </div>
    
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                  -10%
                </div>
                <div class="card position-relative">
                  <a href="single-product.html"><img src="{{asset('assets/client/images/item3.jpg')}}" class="img-fluid rounded-4" alt="image"></a>
                  <div class="card-body p-0">
                    <a href="single-product.html">
                      <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                    </a>
    
                    <div class="card-text">
    <span class="rating secondary-font">
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        5.0</span>
    
                      <h3 class="secondary-font text-primary">$18.00</h3>
    
                      <div class="d-flex flex-wrap mt-3">
                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                          <h5 class="text-uppercase m-0">Add to Cart</h5>
                        </a>
                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                          <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                        </a>
                      </div>
    
    
                    </div>
    
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                  New
                </div> -->
                <div class="card position-relative">
                  <a href="single-product.html"><img src="{{asset('assets/client/images/item4.jpg')}}" class="img-fluid rounded-4" alt="image"></a>
                  <div class="card-body p-0">
                    <a href="single-product.html">
                      <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                    </a>
    
                    <div class="card-text">
                      <span class="rating secondary-font">
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        5.0</span>
    
                      <h3 class="secondary-font text-primary">$18.00</h3>
    
                      <div class="d-flex flex-wrap mt-3">
                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                          <h5 class="text-uppercase m-0">Add to Cart</h5>
                        </a>
                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                          <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                        </a>
                      </div>
    
    
                    </div>
    
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
    New
                </div> -->
                <div class="card position-relative">
                  <a href="single-product.html"><img src="{{asset('assets/client/images/item7.jpg')}}" class="img-fluid rounded-4" alt="image"></a>
                  <div class="card-body p-0">
                    <a href="single-product.html">
                      <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                    </a>
    
                    <div class="card-text">
                      <span class="rating secondary-font">
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        5.0</span>
    
                      <h3 class="secondary-font text-primary">$18.00</h3>
    
                      <div class="d-flex flex-wrap mt-3">
                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                          <h5 class="text-uppercase m-0">Add to Cart</h5>
                        </a>
                        <a href="#" class="btn-wishlist px-4 pt-3 ">
                          <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                        </a>
                      </div>
    
    
                    </div>
    
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                  New
                </div> -->
                <div class="card position-relative">
                  <a href="single-product.html"><img src="{{asset('assets/client/images/item8.jpg')}}" class="img-fluid rounded-4" alt="image"></a>
                  <div class="card-body p-0">
                    <a href="single-product.html">
                      <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                    </a>
    
                    <div class="card-text">
                      <span class="rating secondary-font">
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        5.0</span>
    
                      <h3 class="secondary-font text-primary">$18.00</h3>
    
                      <div class="d-flex flex-wrap mt-3">
                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                          <h5 class="text-uppercase m-0">Add to Cart</h5>
                        </a>
    <a href="#" class="btn-wishlist px-4 pt-3 ">
                          <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                        </a>
                      </div>
    
    
                    </div>
    
                  </div>
                </div>
              </div>
    
            </div>
          </div>
          <!-- / products-carousel -->
    
    
        </div>
      </section>
</div>
@endsection