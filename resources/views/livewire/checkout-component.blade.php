<div>
    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 ">

            @if (Session::has('checkout'))
            <div class="grid grid-cols-3 gap-4">
                <div class=" col-span-2 bg-gray-300 rounded-sm">
                    <div class="px-8 py-10">
                        <div class="mb-16">
                            <h1 class="text-4xl mb-6">
                                Items in Cart
                            </h1>

                            <div class=" grid grid-cols-2 gap-3">

                                @foreach (Cart::instance('cart')->content() as $item)
                                <div class="flex items-center justify-between bg-gray-200 shadow-md rounded-sm px-4 py-2">
                                    <div>
                                        <img src="{{ asset('storage') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}" class="w-20">
                                    </div>
                                    <div>
                                        <h1 class="mb-2">{{ $item->model->name }}</h1>
                                        <div class="flex items-center justify-between text-sm">
                                            <div class="p-2 pl-0">
                                                <span>Size :</span> M
                                            </div>
                                            <div class=" border-l-2 border-r-2 border-gray-800 p-2">
                                                <span>Qty :</span> {{ $item->qty }}
                                            </div>
                                            <div class="p-2 pr-0">
                                                <span>Price :</span> $ {{ $item->subtotal }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                


                            </div>
                        </div>


                        <div>
                            <h1 class="text-4xl mb-6">
                                Billing Details
                            </h1>

                            <div class="grid grid-cols-2 gap-x-16 gap-y-8">
                                <div >
                                    <label for="firstname" class="py-1 inline-block">First Name</label>
                                    <input id="firstname" type="text" wire:model="firstname" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('firstname')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="lastname" class="py-1 inline-block">Last Name</label>
                                    <input id="lastname"  type="text" wire:model="lastname" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('lastname')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="email" class="py-1 inline-block">Email</label>
                                    <input id="email" type="text" wire:model="email" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('email')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="phone" class="py-1 inline-block">Phone</label>
                                    <input id="phone" type="text" wire:model="phone" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('phone')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label class="py-1 inline-block">Country</label>
                                    <input type="text" value="Bangladesh" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300" disabled>

                                </div>

                                <div >
                                    <label for="city" class="py-1 inline-block">City</label>
                                    <input id="city" type="text" wire:model="city" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('city')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="state" class="py-1 inline-block">State</label>
                                    <input id="state" type="text" wire:model="state" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('state')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="postal_code" class="py-1 inline-block">Zip Code</label>
                                    <input id="postal_code" type="text" wire:model="postal_code" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('postal_code')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class=" col-span-2">
                                    <label for="street" class="py-1 inline-block">Street Address</label>
                                    <textarea id="street" wire:model="street" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300"></textarea>
                                    @error('street')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                    
                                </div>


                                <div >
                                    <label for="shipping_to_different" class="py-1 inline-block">Ship to a different address</label>
                                    <input id="shipping_to_different" type="checkbox" wire:model="shipping_to_different">
                                </div>
                            </div>
                        </div>

                        @if ($shipping_to_different)
                        <div class="mt-8 md:mt-16">
                            <h1 class="text-3xl mb-6">
                                Shipping Details
                            </h1>

                            <div class="grid grid-cols-2 gap-x-16 gap-y-8">
                                <div >
                                    <label for="s_firstname" class="py-1 inline-block">First Name</label>
                                    <input id="s_firstname" type="text" wire:model="s_firstname" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('s_firstname')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="s_lastname" class="py-1 inline-block">Last Name</label>
                                    <input id="s_lastname"  type="text" wire:model="s_lastname" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('s_lastname')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="s_email" class="py-1 inline-block">Email</label>
                                    <input id="s_email" type="text" wire:model="s_email" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('s_email')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="s_phone" class="py-1 inline-block">Phone</label>
                                    <input id="s_phone" type="text" wire:model="s_phone" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('s_phone')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label class="py-1 inline-block">Country</label>
                                    <input type="text" value="Bangladesh" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300" disabled>

                                </div>

                                <div >
                                    <label for="s_city" class="py-1 inline-block">City</label>
                                    <input id="s_city" type="text" wire:model="s_city" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('s_city')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="s_state" class="py-1 inline-block">State</label>
                                    <input id="s_state" type="text" wire:model="s_state" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('s_state')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div >
                                    <label for="s_postal_code" class="py-1 inline-block">Zip Code</label>
                                    <input id="s_postal_code" type="text" wire:model="s_postal_code" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    @error('s_postal_code')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>

                                <div class=" col-span-2">
                                    <label for="s_street" class="py-1 inline-block">Street Address</label>
                                    <textarea id="s_street" wire:model="s_street" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300"></textarea>
                                    @error('s_street')
                                        <div class="flex justify-between items-center pt-1 text-red-700">
                                            <p class="text-xs">{{ $message }}</p>
                                        </div>
                                    @enderror
                                    
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class=" bg-gray-300 rounded-sm relative overflow-hidden">

                    <div class="px-4 pt-8">

                        <div class="">
                            <div class="mb-6">
                                <h1 class="text-2xl font-semibold">Order Summery</h1>
                            </div>
                            <div class=" font-medium space-y-2">
                                <div class="flex items-center justify-between">
                                    <h1>Subtotal</h1>
                                    <p>$ {{ Cart::instance('cart')->subtotal() }}</p>
                                </div>

                                <div class="flex items-center justify-between ">
                                    <h1>Coupon</h1>
                                    <p>- $ {{ session()->get('checkout')['discount'] }}</p>
                                </div>

                                <div class="flex items-center justify-between">
                                    <h1>Subtotal</h1>
                                    <p>$ {{ session()->get('checkout')['subtotal'] }}</p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <h1>Tax ({{ config('cart.tax') }}%)</h1>
                                    <p>$ {{ session()->get('checkout')['tax'] }}</p>
                                </div>
        
                                <div class="flex items-center justify-between text-lg pt-2 border-t border-gray-500">
                                    <h1>Total</h1>
                                    <p>$ {{ session('checkout')['total'] }}</p>
                                </div>
                            </div>
                        </div>

                        <div class=" mt-8 md:mt-16 pb-20">
                            <div class="mb-6">
                                <h1 class="text-2xl font-semibold">Payment Method</h1>
                            </div>

                            <div>
                                <h1 class="mb-2"> Select Payment Method</h1>
                                <div class="mb-12">
                                    <div class="relative inline-flex">
                                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                                        <select wire:model="payment_method" class="border border-gray-800 rounded-sm text-gray-600 h-10 pl-5 pr-10 bg-gray-300 hover:border-gray-400 focus:outline-none appearance-none">
                                          <option>Choose a payment method</option>
                                          <option value="cod">Cash on Delivery</option>
                                          <option value="card">Credit card</option>
                                          <option value="paypal">Paypal</option>
                                          <option value="mastercard">Master Card</option>
                                        </select>

                                        
                                      </div>
                                      @error('payment_method')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                </div>

                                @if ($payment_method == 'card')
                                <div class="space-y-12">
                                    <div >
                                        <label for="name_on_card" class="py-1 inline-block">Name on Card</label>
                                        <input type="text" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    </div>
            
                                    <div >
                                        <label for="name_on_card" class="py-1 inline-block">Card Number</label>
                                        <input type="text" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    </div>
            
                                    <div class="flex items-center justify-between">
                                        <div class="w-2/4">
                                            <label for="name_on_card" class="py-1 inline-block">Expiry Date</label>
                                            <input type="text" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                        </div>
            
                                        <div class="w-1/4">
                                            <label for="name_on_card" class="py-1 inline-block">CCV</label>
                                            <input type="text" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                        </div>
                                    </div>
            
                                </div>
                                @endif

                                @if ($payment_method == 'paypal')
                                <div class="space-y-12">
                                    <div >
                                        <label for="name_on_card" class="py-1 inline-block">Email</label>
                                        <input type="text" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    </div>
            
                                    <div >
                                        <label for="name_on_card" class="py-1 inline-block">Password</label>
                                        <input type="text" class="w-full appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                    </div>
                                </div>
                                @endif



                            </div>


                        </div>
                    </div>



                    <button class=" absolute inset-x-0 bottom-0 w-full py-3 text-center bg-gray-800 text-gray-100" wire:click.prevent="placeOrder">
                        Place Order
                    </button>

                </div>
            </div>
            @else
                No Items In Cart
            @endif

        </div>
    </section>    
</div>
