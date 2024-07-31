<div>
    <div class="offcanvas-body">
        <div class="order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
                <span class=" cart-count badge bg-primary rounded-circle pt-2"></span>
            </h4>
            <ul class="list-group mb-3">
                @foreach($carts as $cart)
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">{{ $cart->product->name }}</h6>
                        <small class="text-body-secondary">{{ $cart->quantity }} x ${{ $cart->product->price }}</small>
                    </div>
                    <span class="text-body-secondary">${{ $cart->total }}</span>
                </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <span class="fw-bold">Total</span>
                    <strong>${{ $carts->sum('total') }}</strong>
                </li>
            </ul>
    
            <a href="{{ route('cart.view') }}" class="w-100 btn btn-primary btn-lg">View Cart</a>
        </div>
    </div>
    
</div>