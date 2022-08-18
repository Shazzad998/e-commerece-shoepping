<div>
    <a href="{{ route('cart') }}" class="py-3 relative hover:text-gray-600 transition duration-300">
        <i class='bx bxs-cart-alt relative'></i>

        @if (Cart::instance('cart')->count() > 0)
        <span class=" absolute left-1 -top-1 w-5 h-5 flex items-center justify-center text-xs bg-red-600 text-gray-100 rounded-full ">{{ Cart::instance('cart')->count() }}</span>
        @endif
        
        
    </a>
</div>
