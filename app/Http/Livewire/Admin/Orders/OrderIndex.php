<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderIndex extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $checked = [];
    public function render()
    {
        $orders = Order::with('orderedItems', 'transaction')->paginate($this->paginate);
        return view('livewire.admin.orders.order-index', compact('orders'))->layout('layouts.main');
    }

    public function isChecked($id)
    {
        return in_array($id, $this->checked);
    }


}
