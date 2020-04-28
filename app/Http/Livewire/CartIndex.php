<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use Livewire\Component;

class CartIndex extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = Cart::get();
    }

    public function render()
    {
        return view('livewire.cart-index');
    }

    public function removeItem($productID)
    {
        Cart::remove($productID);
        $this->cart = Cart::get();
        $this->emit('productRemove');
    }

    public function checkout()
    {
        Cart::clear();
        $this->emit('clearCart');
        $this->cart = Cart::get();
    }
}
