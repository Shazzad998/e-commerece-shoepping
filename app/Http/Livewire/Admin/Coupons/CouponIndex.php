<?php

namespace App\Http\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class CouponIndex extends Component
{

    use WithPagination;

    public $search;
    public $paginate = 10;
    public $checked = [];
    public $coupon_id;

    public function render()
    {
        $coupons = Coupon::paginate($this->paginate);
        return view('livewire.admin.coupons.coupon-index', compact('coupons'))->layout('layouts.main');
    }


    public function deleteConfirm($id){
        $this->reset();
        $this->dispatchBrowserEvent('show-delete-modal');
        $this->coupon_id = $id;
    }

    public function destroy()
    {   
        Coupon::findOrFail($this->coupon_id)->delete();
        $this->reset();
        $this->dispatchBrowserEvent('hide-delete-modal');
        session()->flash('success', toast_success('Coupon Deleted Successfully'));  
    }


    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }

    public function bulkDestroy()
    {
        $coupons = Coupon::whereKey($this->checked)->get();

        foreach ($coupons as $coupon)
        {
            $coupon->delete();
        }
        $this->checked = [];
        $this->dispatchBrowserEvent('hide-multiple-delete-modal');
        session()->flash('success', toast_success('Selected coupons Deleted Successfully'));  

    }
}
