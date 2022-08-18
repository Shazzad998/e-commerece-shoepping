<div>
    <a href="#" class="py-3 relative hover:text-gray-600 transition duration-300">
        <i class='bx bxs-heart'></i>

        @if (Cart::instance('wishlist')->count() > 0)
            <span class=" absolute left-1 -top-1 w-5 h-5 flex items-center justify-center text-xs bg-red-600 text-gray-100 rounded-full ">{{ Cart::instance('wishlist')->count() }}</span>
        @endif
    </a>
</div>
