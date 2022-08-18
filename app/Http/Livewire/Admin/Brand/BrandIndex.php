<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class BrandIndex extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $checked = [];
    public $brand_id;

    public function render()
    {
        $brands = Brand::paginate($this->paginate);
        return view('livewire.admin.brand.brand-index', compact('brands'))->layout('layouts.main');
    }


    public function deleteConfirm($id){
        $this->reset();
        $this->dispatchBrowserEvent('show-delete-modal');
        $this->brand_id = $id;
    }

    public function destroy()
    {   
        $brand = Brand::findOrFail($this->brand_id);

        $image = $brand->image;
        $brand->delete();
        if (is_file('storage/'.$image))
        {
            unlink('storage/'.$image);
        }

        $this->reset();
        $this->dispatchBrowserEvent('hide-delete-modal');
        session()->flash('success', toast_success('Brand Deleted Successfully'));  
    }


    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function bulkDestroy()
    {
        $brands = Brand::whereKey($this->checked)->get();

        foreach ($brands as $brand)
        {
            $image = $brand->image;
            $brand->delete();
            if (is_file('storage/'.$image))
            {
                unlink('storage/'.$image);
            }
        }

        $this->checked = [];
        $this->dispatchBrowserEvent('hide-multiple-delete-modal');
        session()->flash('success', toast_success('Selected Brands Deleted Successfully'));  

    }
}
