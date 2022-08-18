<div>
    <section class="bg-gray-200 py-8">
        <div class="max-w-6xl mx-auto py-10 md:py-20 px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
                
                <div wire:ignore class="rounded-sm">
                    <div class="slider_for h-96 bg-gray-300 shadow-lg rounded-sm overflow-hidden">
                        <div class="">
                            <div class="h-full flex items-center px-4">
                                <img class="w-full h-auto object-center object-cover" src="{{ asset('storage') }}/{{ $product->image }}" alt="">
                            </div>
                            
                        </div>

                        <div class="">
                            <div class="h-full flex items-center px-4">
                                <img class="w-full h-auto object-center object-cover" src="{{ asset('storage\products\7vYfQBd0HpFMsSfT2EHxdGaF22YP8sEPAVH7llLY.png') }}" alt="">
                            </div>
                            
                        </div>

                        <div class="">
                            <div class="h-full flex items-center px-4">
                                <img class="w-full h-auto object-center object-cover" src="{{ asset('storage\products\cz15q69vPK3BQMsILO0CDCXNtZndwu1bSVzvdUeI.png') }}" alt="">
                            </div>
                            
                        </div>
                        
                        <div class="">
                            <div class="h-full flex items-center px-4">
                                <img class="w-full h-auto object-center object-cover" src="{{ asset('storage\products\e3pt7SW7s6NvB4iBTUQEZGMuXGpugFwUks97VOuh.png') }}" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="slider_nav mt-8 h-24 flex">
                        <div class=" overflow-hidden rounded-sm mx-2 bg-gray-300 shadow-md">
                            <div class="h-full flex items-center px-2">
                                <img class="w-full object-cover object-center " src="{{ asset('storage') }}/{{ $product->image }}" alt="">
                            </div>
                            
                        </div>
                        <div class=" overflow-hidden rounded-sm mx-2 bg-gray-300 shadow-md">
                            <div class="h-full flex items-center px-2">
                                <img class="w-full object-cover object-center " src="{{ asset('storage\products\7vYfQBd0HpFMsSfT2EHxdGaF22YP8sEPAVH7llLY.png') }}" alt="">
                            </div>
                            
                        </div>
                        <div class=" overflow-hidden rounded-sm mx-2 bg-gray-300 shadow-md">
                            <div class="h-full flex items-center px-2">
                                <img class="w-full object-cover object-center " src="{{ asset('storage\products\cz15q69vPK3BQMsILO0CDCXNtZndwu1bSVzvdUeI.png') }}" alt="">
                            </div>
                            
                        </div>
                        <div class=" overflow-hidden rounded-sm mx-2 bg-gray-300 shadow-md">
                            <div class="h-full flex items-center px-2">
                                <img class="w-full object-cover object-center " src="{{ asset('storage\products\e3pt7SW7s6NvB4iBTUQEZGMuXGpugFwUks97VOuh.png') }}" alt="">
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
                <div class=" relative">
                    <div class="text-gray-800 mt-4 md:mt-0">
                        <div class="text-gray-700">
                            <span class="text-sm text-gray-500 tracking-widest uppercase">{{ $product->brand->name }}</span>
                        </div>
                        <div class="my-2">
                            <h1 class="text-3xl font-bold mb-1">{{ $product->name }}</h1>
                        </div>

                        <div class="flex my-4">
                            <span class="flex items-center">
                                <span class=" text-lg font-semibold mr-2">4.5</span>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-400"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                    </path>
                                </svg>
                                <span class="ml-3">(4 Reviews)</span>
                            </span>
                            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-800 text-gray-500 space-x-2">
                                <a>
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a>
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a>
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>

                        <div class="py-4">
                            <p>
                                {{-- {!! $product->short_description !!} --}}
                                Collaboratively administrate empowered markets via
                                        plug-and-play networks. Dynamically procrastinate B2C users
                                        after installed base benefits.
                            </p>
                        </div>


                        <div class="flex items-center py-4">
                            <div class="flex items-center">
                                <span class="mr-3 font-semibold">Size</span>
                                <div class="relative">
                                    <select
                                        class="rounded-sm border border-gray-700 focus:ring-2 focus:ring-gray-900 bg-transparent appearance-none py-2 focus:outline-none focus:border-gray-500 pl-3 pr-10">
                                        <option>SM</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                    <span
                                        class="absolute right-0 top-0 h-full w-10 text-center text-gray-800 pointer-events-none flex items-center justify-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center py-4 space-x-2">
                            <span> Quantity</span>
                            <div class="flex items-center space-x-2">
                                <button wire:click="decreaseQty" class="p-2 bg-gray-800 rounded-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M5 11h14v2H5z"></path></svg>
                                </button>
                                <span class="p-2 px-4 bg-gray-300 rounded-sm font-bold">{{ $qty }}</span>
                                <button wire:click="increaseQty" class="p-2 bg-gray-800 rounded-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
                                </button>
                            </div>
                        </div>

                        <div class=" sm:absolute bottom-0 inset-x-0 flex items-center py-6 mt-4 border-t-2 border-gray-800">

                            @if ($product->onsale_price > 0)
                            <span class="title-font font-bold text-2xl">$ {{ $product->onsale_price }}</span>
                            <span class="title-font font-bold text-xl line-through ml-4 text-gray-500">$ {{ $product->regular_price }}</span>
                            @else
                            <span class="title-font font-bold text-2xl">$ {{ $product->regular_price }}</span>
                            @endif
                            
                            
                            <button wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }} )"
                                class="flex ml-auto text-gray-100 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded-sm ">Buy Now</button>
                            <button
                                class="rounded-full w-10 h-10 bg-gray-800 p-0 border-0 inline-flex items-center justify-center text-gray-100 ml-4">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" mt-8 sm:mt-16">
                <div class="flex flex-wrap" id="tabs-id">
                    <div class="w-full">
                        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row gap-2">
                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="text-xs font-bold uppercase px-5 py-3 block leading-normal text-gray-800 border-b-2 border-gray-800 cursor-pointer" onclick="changeAtiveTab(event,'tab-description')">
                                <i class="fas fa-space-shuttle text-base mr-1"></i>  Description
                            </a>
                            </li>

                            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="text-xs font-bold uppercase px-5 py-3 block leading-normal border-gray-800 text-gray-800 cursor-pointer" onclick="changeAtiveTab(event,'tab-Reviews')">
                                <i class="fas fa-briefcase text-base mr-1"></i>  Reviews
                            </a>
                            </li>
                        </ul>
                        <div class="relative flex flex-col min-w-0 break-words bg-gray-300 w-full mb-6 shadow-md rounded">
                            <div class="px-4 py-5 flex-auto">
                            <div class="tab-content tab-space">
                                <div class="block" id="tab-description">
                                    <p>
                                        Collaboratively administrate empowered markets via
                                        plug-and-play networks. Dynamically procrastinate B2C users
                                        after installed base benefits.
                                        <br />
                                        <br />
                                        Dramatically visualize customer directed convergence
                                        without revolutionary ROI.
                                    </p>
                                </div>

                                <div class="hidden" id="tab-Reviews">
                                    <p>
                                        Efficiently unleash cross-media information without
                                        cross-media value. Quickly maximize timely deliverables for
                                        real-time schemas.
                                        <br />
                                        <br />
                                        Dramatically maintain clicks-and-mortar solutions
                                        without functional solutions.
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
</div>
