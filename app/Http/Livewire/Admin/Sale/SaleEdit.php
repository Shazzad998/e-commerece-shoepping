<?php

namespace App\Http\Livewire\Admin\Sale;

use App\Models\Sale;
use Livewire\Component;

class SaleEdit extends Component
{

    public $sale_date;
    public $status;


    public function mount()
    {
        $sale = Sale::find(1);
        $this->sale_date = $sale->sale_date;
        $this->status = $sale->status;

    }


    public function update()
    {
        Sale::find(1)->update([
            'sale_date' => $this->sale_date,
            'status' => $this->status
        ]);

        session()->flash('success', toast_success('Sales Updated Successfully')); 
    }
    public function render()
    {
        return view('livewire.admin.sale.sale-edit')->layout('layouts.main');
    }
}
