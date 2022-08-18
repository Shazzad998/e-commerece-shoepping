<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Component;
use Livewire\WithFileUploads;

class BrandCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;
    public $status = 1;


    public function render()
    {
        return view('livewire.admin.brand.brand-create')->layout('layouts.main');
    }


    public function getSlug()
    {
        $this->slug = SlugService::createSlug(Brand::class, 'slug', $this->name);
    }

    public function store()
    {
        $this->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['required', 'unique:brands,slug'],
            'image' => ['required', 'mimes:png,svg'],

        ]);

        $image_url = $this->image->store('brands', 'public');

        Brand::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $image_url,
            'status' => $this->status,


        ]);
        $this->reset();
        session()->flash('success', toast_success('Brand Created Successfully')); 
    }
}
