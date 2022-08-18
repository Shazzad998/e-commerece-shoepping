<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::where('status', 1)->get();
        $featured_products = Product::where('featured', 1)->where('status', 1)->paginate(10);
        $p_products = Product::where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $s_products = Product::where('onsale_price', '>', 0)->get()->take(8);

        $sale = Sale::find(1);
        return view('livewire.home-component',
                     compact(
                        'categories',
                        'featured_products',
                        'p_products',
                        'brands',
                        's_products',
                        'sale'
                    ));
    }
}
