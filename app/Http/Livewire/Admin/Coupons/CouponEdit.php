<?php

namespace App\Http\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Component;

class CouponEdit extends Component
{

    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;
    public $status = 1;

    public $coupon_id;

    public function mount(Coupon $coupon)
    {   
        
        $this->coupon_id = $coupon->id;
        $this->code = $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->expiry_date = $coupon->expiry_date;
        $this->status = $coupon->status;

    }

    public function render()
    {
        return view('livewire.admin.coupons.coupon-edit')->layout('layouts.main');
    }


    public function update()
    {
        $this->validate([
            'code' => ['required','string','max:255','unique:coupons,code,'.$this->coupon_id],
            'type' => ['required'],
            'value' => ['required'],
            'cart_value' => ['required'],
            'expiry_date' => ['required'],

        ]);


        Coupon::find($this->coupon_id)->update([
            'code' => $this->code,
            'type' => $this->type,
            'value' => $this->value,
            'cart_value' => $this->cart_value,
            'expiry_date' => $this->expiry_date,
            'status' => $this->status,


        ]);
        session()->flash('success', toast_success('Coupon Updated Successfully')); 


    }
}
