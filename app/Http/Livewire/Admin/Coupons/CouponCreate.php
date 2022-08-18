<?php

namespace App\Http\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Component;

class CouponCreate extends Component
{

    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;
    public $status = 1;


    public function render()
    {
        return view('livewire.admin.coupons.coupon-create')->layout('layouts.main');
    }

    public function store()
    {
        $this->validate([
            'code' => ['required','string','max:255','unique:coupons,code'],
            'type' => ['required'],
            'value' => ['required'],
            'cart_value' => ['required'],
            'expiry_date' => ['required'],

        ]);


        Coupon::create([
            'code' => $this->code,
            'type' => $this->type,
            'value' => $this->value,
            'cart_value' => $this->cart_value,
            'expiry_date' => $this->expiry_date,
            'status' => $this->status,


        ]);
        $this->reset();
        session()->flash('success', toast_success('Coupon Created Successfully')); 
    }
}
