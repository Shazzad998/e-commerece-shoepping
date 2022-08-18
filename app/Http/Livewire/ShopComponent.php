<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;

    public $min_price = 0;
    public $max_price = 1000;
    public $s_categories = [];
    public $sort_by;
    public $search;
    public $s_brands = [];
    public $s_sizes = [];



    public function render()
    {
        $products = Product::where('regular_price', '>=', $this->min_price)
                            ->where('regular_price', '<=', $this->max_price)
                            ->when($this->s_categories , function($query){
                                $query->whereIn('category_id' , $this->s_categories);
                            })
                            ->when($this->s_brands , function($query){
                                $query->whereIn('brand_id' , $this->s_brands);
                            })
                            ->search(trim($this->search))
                            ->paginate(12);

        $categories = Category::all();
        $brands = Brand::all();
        return view('livewire.shop-component', compact('categories', 'products', 'brands'));
    }


    public function store($product_id, $product_name, $product_price )
    {
        Cart::instance('cart')->add($product_id, $product_name, 1 , $product_price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success', toast_success('Product added to cart')); 
    }
}
