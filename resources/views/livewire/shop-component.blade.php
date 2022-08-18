<div>


    <section class="bg-gray-200">

        <div class="max-w-6xl mx-auto py-10  px-4">
            <div class=" mb-4 text-center">
                <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2 uppercase">
                    Shop</h1>
            </div>

                
                <div class="flex relative">
                    <div class="filter-menu hidden absolute md:relative z-10 md:block w-64 bg-gray-300 mr-4 text-gray-800 rounded-sm shadow-lg">
    
                        <div class="flex items-center justify-between mx-2 px-1 mt-4  border-b-2 border-gray-900">
                            <h1 class="text-2xl font-bold">Filters</h1>
                            <i class='bx bx-filter text-2xl'></i>
                        </div>
    
                        <div class="mt-6 px-4">
                            <div class="mb-3">
                                <h1 class="text-lg font-semibold">Categories</h1>
                            </div>
    
                            <div>
                                <ul class="px-1">
                                    @foreach ($categories as $category)
                                        <li class="flex items-center">
                                            <input class="rounded-md" type="checkbox" value="{{ $category->id }}" id="category_{{ $category->id }}" wire:model="s_categories">
                                            <label for="category_{{ $category->id }}" class="ml-2">{{ $category->name }}</label>
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="price_range mt-6">
                            <div class="px-4 mb-3">
                                <h1 class="text-lg font-semibold">Price Range</h1>
                            </div>
                            <div class="flex items-center justify-between px-4">
                                $<input type="number" class="w-12 p-1 border-gray-300 rounded-md appearance-none" wire:model.lazy="min_price">
                                <span class="text-4xl">-</span>
                                $<input type="text" class="w-12 p-1 border-gray-300 rounded-md" wire:model.lazy="max_price">
                            </div>
    
                        </div>
    
                        <div class="mt-6 px-4">
                            <div class="mb-3">
                                <h1 class="text-lg font-semibold">Sizes</h1>
                            </div>
    
                            <div>
                                <ul class="flex justify-between px-1">
                                    <li class="flex items-center">
                                        <input class="rounded-md" type="checkbox" id="S" value="S" wire:model="s_sizes">
                                        <label for="S" class="ml-1">S</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input class="rounded-md" type="checkbox" id="M" value="M" wire:model="s_sizes">
                                        <label for="M" class="ml-1">M</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input class="rounded-md" type="checkbox" id="L" value="L" wire:model="s_sizes">
                                        <label for="L" class="ml-1">L</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input class="rounded-md" type="checkbox" id="XL" value="XL" wire:model="s_sizes">
                                        <label for="XL" class="ml-1">XL</label>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
    
    
                        <div class="my-6 px-4">
                            <div class="mb-3">
                                <h1 class="text-lg font-semibold">Brands</h1>
                            </div>
    
                            <div>
                                <ul class="px-1">
                                    @foreach ($brands as $brand)
                                    <li class="flex items-center">
                                        <input class="rounded-md" value="{{ $brand->id }}" type="checkbox" id="{{ $brand->slug }}" wire:model="s_brands">
                                        <label for="{{ $brand->slug }}" class="ml-1">{{ $brand->name }}</label>
                                    </li>
                                    @endforeach
    
                                </ul>
                            </div>
                        </div>
    
    
                    </div>
    
    
                    <div class="w-full mx-auto">
                        <div class="w-full md:flex items-center justify-center space-y-2 md:justify-between mb-4">
                            <div class="md:hidden">
                                <button class="filter-btn">Filter</button>
                            </div>
                            <div class="flex items-center">
                                <h1 class="text-md font-semibold mr-2">Sort By</h1>
                                <select class="border-none rounded-sm p-1 px-2 shadow-sm" name="" id="">
                                    <option value="">Popularity</option>
                                    <option value="">Price High to Low</option>
                                    <option value="">Price Low to high</option>
                                    <option value="">Newest</option>
                                </select>
                            </div>
    
    
                            <div>
                                <input class="border-none rounded-sm shadow-sm" wire:model.debounce.500="search" type="text" placeholder="Search.....">
                            </div>
                        </div>
                            <div class="grid xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 xs:gap-x-4 md:gap-x-0 gap-y-6 lg:gap-y-8 pt-6 lg:pt-4">
                            @foreach ($products as $product)
                            {{-- <a href="{{ route('product.detail', $product->id) }}" class="h-auto bg-gray-200 rounded-md overflow-hidden shadow-xl transition-all duration-300 transform-all hover:scale-105">
                                <div class="relative h-40 xs:h-56 w-full">
                                    <div class="absolute left-0 w-full h-full bg-gradient-to-b from-gray-100 to-gray-200">
                                        <span class="mt-2 text-gray-100 text-xs sm:text-sm bg-gray-700 inline-block p-1 px-3 rounded-r-sm">New</span>
                                    </div>
                                    <div class="absolute right-0 w-1/2 h-full bg-gradient-to-b from-gray-400 to-gray-200">
                                        <span class="mt-2 inline-block float-right p-1 px-3 text-gray-800"><i class='bx bxs-star'></i> 4.5</span>
                                    </div>
                                    
                                    <div class="absolute bottom-0 pb-4">
                                        <div class="absolute bottom-2 h-4 w-full overflow-hidden filter blur-sm">
                                            <div class="w-16 h-16 rounded-tr-full rounded-bl-full -rotate-45 filter blur-md bg-gray-400 mx-auto -mt-4"></div>
                                        </div>
                                        <img class="w-4/5 -rotate-12 mx-auto"  src="{{ asset('storage') }}/{{ $product->image }}" alt="">
                                        
                                    </div>
                                </div>
    
                                <div class="relative text-gray-900 space-y-1 p-3 h-auto bg-gray-200 mt-2">
                                    <h1 class="tracking-widest font-extrabold text-sm">{{ $product->name }}</h1>
                                    <h2 class="text-lg font-bold text-gray-600">$ {{ $product->regular_price }}</h2>
                                    <div class="flex items-center space-x-4 pt-4">
                                        <button class="px-2 text-xs md:text-lg md:px-6 py-1 border transition duration-300 border-gray-700 hover:bg-gray-700 hover:text-gray-100">Add to cart</button>
                                        <span class=" cursor-pointer"><i class='bx bxs-heart text-2xl transition duration-300 hover:text-gray-600'></i></span>
                                    </div>
                                </div>
                            </a> --}}
                            <div class="w-full px-4">
                                    <div class=" w-full pt-20 lg:pt-10">
                                        <a href="{{ route('product.detail', $product->id) }}" class="bg-gray-300 text-gray-900 block rounded-sm shadow-lg pt-20 lg:pt-10">
                                            <div class="relative">
                                                <div class="absolute bottom-0 inset-x-0">
                                                    <div class="flex items-center justify-center max-w-xs px-8 mx-auto">
                                                        <img class=" -rotate-12" src="{{ asset('storage') }}/{{ $product->image }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="pb-10 px-4">
                                                <div class="flex items-center justify-between">
                                                    <span class="text-xs uppercase font-light tracking-wider">{{ $product->brand->name }}</span>
                                                    <div class="flex items-center space-x-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                        <span class=" font-semibold">4.4</span>
                                                    </div>
                                                </div>
                                                <div class="my-1">
                                                    <h1 class="text-xl sm:text-lg font-bold  text-gray-800">{{ $product->name }}</h1>
                                                </div>
                                                <div class="pb-16 lg:pb-14">
                                                    <h2 class="text-xl font-bold text-gray-600">$ {{ $product->regular_price }}</h2>
                                                </div>
                                            </div>
                
                
                                            <div class="relative">
                                                <div class="absolute bottom-8 left-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                
                                                <button wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})"
                                                    class="flex w-1/2  bg-gray-800 text-gray-100 py-3 items-center justify-center rounded-sm shadow-lg absolute bottom-6 -right-3 md:-right-4">
                                                    <span class="flex items-center justify-center space-x-2 px-2">
                                                        <span class=" text-xs font-medium tracking-wide">Buy</span>
                
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                clip-rule="evenodd" />
                
                                                    </span>
                                                </button>
                                            </div>
                
                                        </a>
                                    </div>
                
                            </div>
                            @endforeach
                            
                        </div>
    
                    </div>
                </div>

        </div>

    </section>

    @if (session('success'))
    {!! session('success') !!}
    @endif

    @if (session('error'))
    {!! session('error') !!}
    @endif
</div>
