<div>
    <!-- component -->

    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 ">
            @if (Cart::instance('cart')->count() > 0)
                <div>
                    <div class="p-4">
                        <h1 class="text-3xl font-semibold">
                            Items in cart
                        </h1>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-6 gap-x-4">
                        <div class=" space-y-4 bg-gray-300 px-4 xs:px-6 sm:px-8 pt-4 pb-16 lg:col-span-2">
                            <div class=" hidden text-gray-600 sm:flex items-center justify-between space-x-2">
                                <div class=" w-40">Product Name</div>
                                <div>Quantity</div>
                                <div>Price</div>
                                <div>Total</div>
                            </div>
        
                            @foreach (Cart::instance('cart')->content() as $item)
                                <div class="flex items-center justify-between space-x-2 py-2 border-b border-gray-400">
                                
                                    <div class="flex items-center space-x-2 xs:space-x-4">
                                        <div class="w-16 h-14 xs:w-20 xs:h-16 flex items-center rounded-md overflow-hidden px-2 bg-gray-400 ">
                                            <img class="w-full h-auto object-cover object-center" src="{{ asset('storage') }}/{{ $item->model->image }}" alt="{{ $item->model->name }}">
                                        </div>
                                        <div>
                                            <h1 class="text-md xs:text-lg xs:font-medium inline-block mb-2">{{ $item->model->name }}</h1>
                                            <a href="" wire:click.prevent="destroy('{{ $item->rowId }}')" class="hidden sm:block text-red-700 text-sm">Delete</a>
                                            <p class=" sm:hidden text-sm xs:text-md text-gray-600">$ {{ $item->model->regular_price }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <button class=" px-2 py-1 bg-gray-400 rounded-sm" wire:click="decreaseQTY('{{ $item->rowId }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                                            </svg>
                                            
                                        </button>
                                        <span class=" px-3 py-1 bg-gray-300 rounded-sm" >{{ $item->qty }}</span>
                                        <button class=" px-2 py-1 bg-gray-400 rounded-sm" wire:click="increaseQTY('{{ $item->rowId }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class=" sm:p-2 sm:hidden">
                                        <button wire:click.prevent="destroy('{{ $item->rowId }}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        </button>
                                    </div>
        
                                    <div class="hidden sm:block">
                                        <p class="text-md font-medium">$ {{ $item->model->regular_price }}</p>
                                    </div>
        
                                    <div class="hidden sm:block">
                                        <p class=" text-md font-medium">$ {{ $item->subtotal }}</p>
                                    </div>
        
                
                                </div>
                            @endforeach
        
                            @if (!Session::has('coupon'))
                                <div class="py-6">
                                    <h1 class="text-2xl font-medium py-2">Have a Coupon?</h1>
                                    <div class="flex items-center space-x-3">
                                        <input id="haveCoupon" wire:model="haveCoupon" type="checkbox"> <label for="haveCoupon">I have a coupon</label>
                                    </div>

                                    @if ($haveCoupon)
                                    <div class="flex items-end space-x-6 mt-6">
                                        <div class="">
                                            <label class="py-1 block">Coupon code</label>
                                            <input type="text" wire:model="couponCode" class="appearance-none outline-none border-0 border-b-2 border-gray-800 bg-gray-300">
                                            @if (Session::has('coupon_error'))
                                            <p class="text-red-700 text-xs">{{ Session::get('coupon_error') }}</p>
                                            @endif
                                            
                                        </div>
                                        <button class="px-4 py-2 bg-gray-800 text-gray-100 rounded-sm" wire:click.prevent="applyCoupon">Apply Coupon</button>
                                    </div>

                                    @endif
                                    
                                </div>
                            @endif
                            
        
                        </div>
        
                        <div class=" px-4 xs:px-6 sm:px-8 md:mx-24 md:rounded-sm lg:mx-0 bg-gray-300  py-8">
                            <div class="mb-6">
                                <h1 class="text-2xl font-semibold">Order Summery</h1>
                            </div>
                            <div class=" font-medium space-y-2 text-gray-800">
                                <div class="flex items-center justify-between">
                                    <h1>Subtotal</h1>
                                    <p>$ {{ Cart::instance('cart')->subtotal() }}</p>
                                </div>

                                @if (Session::has('coupon'))
                                    <div class="flex items-center justify-between ">
                                        <h1>Coupon <span class="text-xs text-red-700 cursor-pointer ml-2" wire:click.prevent="removeCoupon">Remove</span></h1>
                                        <p>- $ {{ $discount }}</p>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <h1>Tax ({{ config('cart.tax') }}%)</h1>
                                        <p>$ {{ number_format($taxAfterDiscount, 2)  }}</p>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <h1>Subtotal with discount</h1>
                                        <p>$ {{ number_format($subtotalAfterDiscount, 2) }}</p>
                                    </div>
            
                                    <div class="flex items-center justify-between text-lg pt-2 border-t border-gray-500">
                                        <h1>Total</h1>
                                        <p>$ {{ $totalAfterDiscount }}</p>
                                    </div>
                                @else
                                    <div class="flex items-center justify-between">
                                        <h1>Tax (5%)</h1>
                                        <p>$ {{ Cart::instance('cart')->tax() }}</p>
                                    </div>
            
                                    <div class="flex items-center justify-between text-lg pt-2 border-t border-gray-500">
                                        <h1>Total</h1>
                                        <p>$ {{ Cart::instance('cart')->total() }}</p>
                                    </div>
                                @endif

        
                                <div class="pt-20 ">
                                    <a href="{{ route('checkout') }}" class="w-full py-2 bg-gray-800 text-sm font-normal text-gray-100 flex justify-center items-center tracking-widest">
                                        Checkout
                                    </a>
                                </div>
        
                            </div>
        
                        </div>
        
                    </div>
                </div>
            @else
                <div>
                    <h1 class="text-4xl font-semibold ">Cart is Empty</h1>
                </div>
            @endif


        </div>
    </section>

    @if (session('success'))
    {!! session('success') !!}
    @endif

    @if (session('error'))
    {!! session('error') !!}
    @endif

</div>
