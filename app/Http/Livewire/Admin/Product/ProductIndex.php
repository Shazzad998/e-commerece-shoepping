<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Cviebrock\EloquentSluggable\Services\SlugService;


class ProductIndex extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search;
    public $paginate = 10;
    public $checked = [];

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $onsale_price;
    public $sku;
    public $featured =1;
    public $quantity;
    public $image;
    public $featured_image;
    public $images;
    public $category_id;
    public $brand_id;
    public $status = 1;
    public $size = [];

    public $old_image;
    public $old_featured_image;
    public $product_id;
    public $edit = false;


    public function render()
    {
        $categories = Category::all();
        $products = Product::with(['category','brand'])
                    ->search(trim($this->search))
                    ->paginate(2);
        $brands = Brand::where('status', 1)->get();            
        return view('livewire.admin.product.product-index', compact('products', 'categories', 'brands'))->layout('layouts.main');
    }



    public function getSlug()
    {
        $this->slug = SlugService::createSlug(Product::class, 'slug', $this->name);
    }

    public function showModal()
    {
        $this->dispatchBrowserEvent('show-form-modal');
    }

    public function closeModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('hide-form-modal');
    }


    public function store()
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['required', 'unique:products,slug'],
            'image' => ['required', 'mimes:png,svg'],
            'featured_image' => ['nullable', 'mimes:jpg,png,svg'],
            'short_description' => ['required', 'max:255'],
            'description' => ['nullable', 'max:255'],
            'regular_price' => ['required', 'numeric'],
            'onsale_price' => ['nullable', 'numeric'],
            'sku' => ['required', 'unique:products,sku'],
            'quantity' => ['required','numeric'],
            'images' => ['nullable', 'mimes:png,svg'],
            'category_id' => ['required', 'numeric'],
            'brand_id' => ['required', 'numeric'],
            'size' => ['required'],
        ]);


        $image_url = $this->image->store('products', 'public');
        if($this->featured_image)
        {
            $featured_image_url = $this->featured_image->store('products/featured', 'public');
        }
        else{
            $featured_image_url = $this->featured_image;
        }

        Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $image_url,
            'featured_image' => $featured_image_url,
            'status' => $this->status,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'regular_price' => $this->regular_price,
            'onsale_price' => ($this->onsale_price)? $this->onsale_price : NULL,
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'images' => $this->images,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'featured' =>$this->featured,
            'size' => implode(',', $this->size),

        ]);

        $this->closeModal();
        session()->flash('success', toast_success('Product Created Successfully')); 
    }


    public function edit($id)
    {
        $this->showModal();
        $this->edit = true;
        $this->product_id = $id;
        $product = Product::findOrFail($this->product_id);
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->old_image = $product->image;
        $this->old_featured_image = $product->featured_image;
        $this->status = $product->status;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->onsale_price = $product->onsale_price;
        $this->sku = $product->sku;
        $this->quantity = $product->quantity;
        $this->images = $product->images;
        $this->category_id = $product->category_id;
        $this->brand_id = $product->brand_id;
        $this->featured = $product->featured;
        $this->size = explode(',', $product->size);


    }

    public function update()
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['required', 'unique:products,slug,'.$this->product_id],
            'image' => ['nullable', 'mimes:png,svg'],
            'featured_image' => ['nullable', 'mimes:jpg,png,svg'],
            'short_description' => ['required', 'max:255'],
            'description' => ['nullable', 'max:255'],
            'regular_price' => ['required', 'numeric'],
            'onsale_price' => ['nullable', 'numeric'],
            'sku' => ['required', 'unique:products,sku,'.$this->product_id],
            'quantity' => ['required','numeric'],
            'images' => ['nullable', 'mimes:png,svg'],
            'category_id' => ['required', 'numeric'],
            'brand_id' => ['required', 'numeric'],
            'size' => ['required']
        ]);

        if($this->image){
            $image_url = $this->image->store('images', 'public');
            if (is_file('storage/'.$this->old_image))
            {
                unlink('storage/'.$this->old_image);
            }
        }else{
            $image_url = $this->old_image;
        }


        if($this->featured_image){
            $featured_image_url = $this->featured_image->store('products/featured', 'public');
            if (is_file('storage/'.$this->old_featured_image))
            {
                unlink('storage/'.$this->old_featured_image);
            }
        }else{
            $featured_image_url = $this->old_featured_image;
        }

        Product::findOrFail($this->product_id)->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $image_url,
            'featured_image' => $featured_image_url,
            'status' => $this->status,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'regular_price' => $this->regular_price,
            'onsale_price' => ($this->onsale_price)? $this->onsale_price : NULL,
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'images' => $this->images,
            'category_id' => $this->category_id,
            'brand_id' => $this->category_id,
            'featured' =>$this->featured,
            'size' => implode(',', $this->size)
        ]);

        $this->closeModal();
        session()->flash('success', toast_success('Product Updated Successfully')); 


    }




    public function deleteConfirm($id){
        $this->reset();
        $this->dispatchBrowserEvent('show-delete-modal');
        $this->product_id = $id;
    }

    public function destroy()
    {   
        $product = Product::findOrFail($this->product_id);

        $image = $product->image;
        $featured_image = $product->featured_image;
        $product->delete();
        if (is_file('storage/'.$image))
        {
            unlink('storage/'.$image);
        }
        if (is_file('storage/'.$featured_image))
        {
            unlink('storage/'.$featured_image);
        }

        $this->reset();
        $this->dispatchBrowserEvent('hide-delete-modal');
        session()->flash('success', toast_success('Product Deleted Successfully'));  
    }


    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function bulkDestroy()
    {
        $products = Product::whereKey($this->checked)->get();

        foreach ($products as $product)
        {
            $image = $product->image;
            $featured_image = $product->featured_image;
            $product->delete();
            if (is_file('storage/'.$image))
            {
                unlink('storage/'.$image);
            }
            if (is_file('storage/'.$featured_image))
            {
                unlink('storage/'.$featured_image);
            }
        }

        $this->checked = [];
        $this->dispatchBrowserEvent('hide-multiple-delete-modal');
        session()->flash('success', toast_success('Selected Products Deleted Successfully'));  

    }
}
