<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductDetailComponent extends Component
{

    public $qty = 1;

    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.product-detail-component');
    }

    public function increaseQty()
    {
        if($this->qty < $this->product->quantity)
        {
            $this->qty = $this->qty+1;
        } 
    }

    public function decreaseQty()
    {
        if($this->qty > 1)
        {
            $this->qty = $this->qty-1;
        } 
    }


    public function store($product_id, $product_name, $product_price )
    {
        Cart::instance('cart')->add($product_id, $product_name, $this->qty , $product_price)->associate('App\Models\Product');
        session()->flash('success', toast_success('Product added to cart')); 
        return redirect()->route('cart');
    }
}
