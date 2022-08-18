<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderedItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CheckoutComponent extends Component
{


    public $payment_method;
    public $shipping_to_different;

    public $firstname;
    public $lastname;
    public $phone;
    public $email;
    public $street;
    public $city;
    public $state;
    public $postal_code;


    public $s_firstname;
    public $s_lastname;
    public $s_phone;
    public $s_email;
    public $s_street;
    public $s_city;
    public $s_state;
    public $s_postal_code;

    public $address_id;

    public $orderPlaced;

    public function mount()
    {
        $address = Address::with('user')->where('user_id',Auth::user()->id)->first();
        $this->email = Auth::user()->email;

        if($address){
            
            $this->address_id = $address->id;
            $this->firstname = $address->firstname;
            $this->lastname = $address->lastname;
            $this->phone = $address->phone;
            $this->street = $address->street;
            $this->city = $address->city;
            $this->state = $address->state;
            $this->postal_code = $address->postal_code;
        }
        


    }


    public function placeOrder()
    {
        $this->validate([
            'firstname' => ['required','string'],
            'lastname' => ['required','string'],
            'phone' => ['required'],
            'email' => ['required'],
            'street' => ['required','string'],
            'city' => ['required','string'],
            'state' => ['required','string'],
            'postal_code' => ['required','numeric'],
            'payment_method' => ['required']
            
        ]);


        DB::transaction(function () {
            
            $order = new Order();

            $order->user_id = Auth::user()->id;
            $order->subtotal = session()->get('checkout')['subtotal'];
            $order->discount = session()->get('checkout')['discount'];
            $order->tax = session()->get('checkout')['tax'];
            $order->total = session()->get('checkout')['total'];
            $order->firstname = $this->firstname;
            $order->lastname = $this->lastname;
            $order->phone = $this->phone;
            $order->email = $this->email;
            $order->street = $this->street;
            $order->city = $this->city;
            $order->state = $this->state;
            $order->postal_code = $this->postal_code;
            $order->status = 'ordered';
            $order->shipping_to_different = $this->shipping_to_different ? 1:0;
            $order->save();
    
    
    
            foreach(Cart::instance('cart')->content() as $item)
            {
                $orderedItem = new OrderedItem();
                $orderedItem->product_id = $item->id;
                $orderedItem->order_id = $order->id;
                $orderedItem->price = $item->price;
                $orderedItem->quantity = $item->qty;
                $orderedItem->save();
            }
    
            if($this->shipping_to_different)
            {
                $this->validate([
                    's_firstname' => ['required','string'],
                    's_lastname' => ['required','string'],
                    's_phone' => ['required'],
                    's_email' => ['required'],
                    's_street' => ['required','string'],
                    's_city' => ['required','string'],
                    's_state' => ['required','string'],
                    's_postal_code' => ['required','numeric'],
    
                    
                ]);
    
                $shipping = new Shipping();
                $shipping->order_id = $order->id;
                $shipping->firstname = $this->s_firstname;
                $shipping->lastname = $this->s_lastname;
                $shipping->phone = $this->s_phone;
                $shipping->email = $this->s_email;
                $shipping->street = $this->s_street;
                $shipping->city = $this->s_city;
                $shipping->state = $this->s_state;
                $shipping->postal_code = $this->s_postal_code;
                $shipping->save();
    
            }
    
    
            if($this->payment_method == 'cod')
            {
                $transaction = new Transaction();
                $transaction->user_id = Auth::user()->id;
                $transaction->order_id = $order->id;
                $transaction->payment_method = $this->payment_method;
                $transaction->status = 'pending';
                $transaction->save();
            }
    
            Cart::instance('cart')->destroy();
            session()->forget('checkout');
            $this->orderPlaced = 1;

        });

        


    }


    public function verifyForCheckout()
    {
        if($this->orderPlaced)
        {
            return redirect()->route('thankyou');
        }
        elseif(!session()->has('checkout'))
        {
            return redirect()->route('cart');
        }
    }

    
    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.checkout-component');
    }
}
