<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyOrdersComponent extends Component
{

    use WithPagination;

    public function render()
    {
        $my_orders = Order::where('user_id', Auth::user()->id)->paginate(2);
        return view('livewire.my-orders-component', compact('my_orders'));
    }
}
