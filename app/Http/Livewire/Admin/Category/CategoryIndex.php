<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryIndex extends Component
{
    use WithPagination;
    use WithFileUploads;


    public $search;
    public $name;
    public $slug;
    public $image;
    public $status = 1;
    public $old_image;
    public $category_id;
    public $edit = false;



    public function render()
    {

        $categories = Category::with('products')->paginate(10);
        return view('livewire.admin.category.category-index', compact('categories'))->layout('layouts.main');
    }

    public function getSlug()
    {
        $this->slug = SlugService::createSlug(Category::class, 'slug', ($this->name)? $this->name : '');
    }

    public function showModal()
    {
        $this->reset();
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
            'name' => ['required', 'unique:categories,name'],
            'slug' => ['required', 'unique:categories,slug'],
            'image' => ['required', 'mimes:png,svg', 'max:1024'],
        ]);

        $image_url = $this->image->store('categories', 'public');

        Category::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $image_url,
            'status' => $this->status,

        ]);

        $this->closeModal();
        session()->flash('success', toast_success('Category Created Successfully')); 
    }


    public function edit($id)
    {
        $this->showModal();
        $this->edit = true;
        $this->category_id = $id;
        $category = Category::findOrFail($this->category_id);
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->old_image = $category->image;
        $this->status = $category->status;


    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'unique:categories,name,'.$this->category_id],
            'slug' => ['required', 'unique:categories,slug,'.$this->category_id],
            'image' => ['nullable', 'mimes:png,svg', 'max:1024']
        ]);

        if($this->image){
            $image_url = $this->image->store('categories', 'public');
            if (is_file('storage/'.$this->old_image))
            {
                unlink('storage/'.$this->old_image);
            }
        }else{
            $image_url = $this->old_image;
        }

        Category::findOrFail($this->category_id)->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $image_url,
            'status' => $this->status,
        ]);

        $this->closeModal();
        session()->flash('success', toast_success('Category Updated Successfully')); 


    }




    public function deleteConfirm($id){
        $this->reset();
        $this->dispatchBrowserEvent('show-delete-modal');
        $this->category_id = $id;
    }

    public function destroy()
    {   
        $category = Category::findOrFail($this->category_id);

        $this->old_image = $category->image;
        $category->delete();
        if (is_file('storage/'.$this->old_image))
        {
            unlink('storage/'.$this->old_image);
        }

        $this->reset();
        $this->dispatchBrowserEvent('hide-delete-modal');
        session()->flash('success', toast_success('Category Deleted Successfully'));  
    }


}
