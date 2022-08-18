<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Component;
use Livewire\WithFileUploads;

class BrandEdit extends Component
{
    use WithFileUploads;

    public $brand_id;
    public $name;
    public $slug;
    public $image;
    public $status;
    public $old_image;

    public function mount(Brand $brand){
        $this->brand_id = $brand->id;
        $this->name = $brand->name;
        $this->slug= $brand->slug;
        $this->status= $brand->status;
        $this->old_image= $brand->image;
    }

    public function render()
    {
        return view('livewire.admin.brand.brand-edit')->layout('layouts.main');
    }



    
    public function getSlug()
    {
        $this->slug = SlugService::createSlug(Brand::class, 'slug', $this->name);
    }

    public function update()
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['required', 'unique:products,slug,'.$this->brand_id],
            'image' => ['nullable', 'mimes:png,svg'],

        ]);

        if($this->image){
            $image_url = $this->image->store('brands', 'public');
            if (is_file('storage/'.$this->old_image))
            {
                unlink('storage/'.$this->old_image);
            }
        }else{
            $image_url = $this->old_image;
        }


        Brand::findOrFail($this->brand_id)->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $image_url,
            'status' => $this->status,

        ]);

        $this->reset('image');
        $this->old_image = $image_url;
        session()->flash('success', toast_success('Brand Updated Successfully')); 


    }

}
