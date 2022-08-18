<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{

    public $haveCoupon;
    public $couponCode;


    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;


    public function render()
    {
        if(session()->has('coupon'))
        {
            if(Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value'] )
            {
                session()->forget('coupon');
            }
            else{
                $this->calculate_discount();
            }
        }

        $this->setAmountForCheckout();
        return view('livewire.cart-component');
    }

    public function increaseQTY($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function decreaseQTY($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
        
    }

    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        session()->flash('success', toast_success('Product removed from cart')); 
        $this->emitTo('cart-count-component', 'refreshComponent');
    }


    public function applyCoupon()
    {
        $coupon = Coupon::where('code', $this->couponCode)->where('status', 1)->first();

        if($coupon){
            if($coupon->expiry_date >= Carbon::today())
            {
                if(Cart::instance('cart')->subtotal() >= $coupon->cart_value )
                {
                    session()->put('coupon', [
                        'code' => $coupon->code,
                        'type' => $coupon->type,
                        'value' => $coupon->value,
                        'cart_value' => $coupon->cart_value,


                    ]);
                }
                else{
                    session()->flash('coupon_error', 'Condition does not match');
                    return;
                }
            }else{

                session()->flash('coupon_error', 'Coupon Expired');
                return;
            }

            
        }
        else{
            session()->flash('coupon_error', 'Invalid Coupon code');
            return;
        }
    }


    public function calculate_discount()
    {
        if(session()->has('coupon'))
        {
            if(session()->get('coupon')['type'] == 'fixed')
            {
                $this->discount = session()->get('coupon')['value'];
            }
            else{
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value'])/100;
            }

            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->taxAfterDiscount = ($this->subtotalAfterDiscount * config('cart.tax'))/100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfterDiscount;
        }
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
    }

    public function setAmountForCheckout()
    {
        if(session()->has('coupon'))
        {
            session()->put('checkout', [
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount,

            ]);
        }else{
            session()->put('checkout', [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total(),

            ]);
        }

    }


}
