<?php

namespace App\Http\Livewire;

use App\Product;
use App\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];

    public function render()
    {

        if ($this->search == null) {
            $result = Product::paginate(12);
        } else {
            $result = Product::where('name', 'like', '%' . $this->search . '%')->paginate(12);
        }

        return view('livewire.product-index', [
            'products' => $result
        ]);
    }

    public function addToCart(int $productID)
    {
        Cart::add(Product::where('id', $productID)->first());

        $this->emit('cartAdded');
    }
}
