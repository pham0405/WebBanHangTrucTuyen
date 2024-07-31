<?php

namespace App\View\Components;

use App\Models\Cart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class CartSummary extends Component
{
    public $carts;
    /**
     * Create a new component instance.
     */
    public function __construct()
   
    {
        $user_id = Auth::id();
        $this->carts = Cart::with('product')->where('user_id', $user_id)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart-summary');
    }
}
