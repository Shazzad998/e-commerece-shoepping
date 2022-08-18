<div>
    <!-- ---header section---- -->
    <header class="bg-gray-200">
        <div
            class="max-w-6xl mx-auto grid grid-cols-1 grid-rows-2 sm:grid-cols-2 sm:grid-rows-1  py-8 md:py-16 md:pt-36 px-4 sm:px-8 lg:px-2">
            <div class="">
                <div class="relative sm:float-right">
                    <div class="relative sm:w-72 h-56 lg:w-96 lg:h-80">
                        <div
                            class="w-56 h-56 lg:w-80 lg:h-80 absolute left-1/2 -ml-28 lg:-ml-40 bg-gray-800 rounded-full shadow-2xl">
                        </div>
                        <img class="absolute w-72 h-auto lg:w-96 left-1/2 top-6 -ml-36 lg:-ml-48 transform -rotate-12 animate-wiggle"
                            src="{{ asset('storage/header/imghome.png') }}" alt="">
                    </div>

                </div>


            </div>
            <div class="sm:col-start-1 sm:row-start-1 mt-6 text-gray-900 lg:my-8">
                <h1 class="text-5xl lg:text-6xl font-semibold lg:font-medium">Yeezy Boost <br> SPLY-350</h1>
                <p class="mt-3 lg:mt-4 lg:text-lg font-medium">Explore the new collection of sneakers</p>
                <a href=""
                    class="inline-block bg-gray-900 text-gray-100  uppercase tracking-wider rounded-sm  font-semibold transition hover:bg-gray-800 py-3 px-7 mt-5 lg:mt-16">Explore
                    Now</a>
            </div>
        </div>
    </header>


    <!-- ----- Browse by category section----- -->
    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 px-2 ">
            <div class="w-full py-3 overflow-hidden">
                <div class="my-4">
                    <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2 uppercase mr-2">
                        Browse by category</h1>
                    <select name="" id="" class="bg-gray-800 py-1 px-2 text-gray-100 text-xs rounded-sm">
                        <option value="">All Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="swiper-container mySwiper h-20 md:h-24 lg:h-28 bg-gray-300 overflow-visible rounded-sm shadow-md">
                    <div class="swiper-wrapper">
                        @foreach ($categories as $category)
                            <a href=""
                            class="swiper-slide text-md pt-2 flex flex-col items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110"> 
                                <img class="w-10 h-10 mb-1" src="{{ asset('storage') }}/{{ $category->image }}" alt="">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>




    <!-- -------featured section--------- -->
    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 md:py-20 px-2">
            <div>
                <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2 uppercase">
                    Featured Products</h1>
            </div>

            <div>
                <!-- -------featured products---- -->
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4   gap-3 p-4 lg:py-4 lg:px-0 ">

                    @foreach ($featured_products as $featured_product)
                        <a href="" class="product bg-red-400 relative h-96 text-gray-100 overflow-hidden rounded-sm shadow-lg">
                            <img class="h-full w-full object-center object-cover transition duration-500"
                                src="{{ asset('storage') }}/{{ $featured_product->featured_image }}" alt="">
                            <div
                                class="product-hover absolute inset-0 bg-gray-900 bg-opacity-80 p-5 opacity-0 transition duration-300">
                                <div class="flex justify-between items-center text-xl">
                                    <div><i class='bx bx-star'></i> 4.7</div>
                                    <div class="flex items-center text-2xl">
                                        <i class='bx bx-heart p-2'></i>
                                        <i class='bx bx-cart-alt p-2'></i>
                                    </div>
                                </div>

                                <div class="font-medium absolute bottom-8">
                                    <span class="text-3xl">$ {{ $featured_product->onsale_price }}</span>
                                    <span class="text-xl ml-4 line-through text-gray-400">
                                        $ {{ $featured_product->regular_price }}
                                    </span>
                                    <button
                                        class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    

                    
                </div>
                <!-- -------end featured products---- -->

                <!-- ------featured pagination--------- -->
                <div class="sm:flex sm:justify-between px-4 lg:px-0">


                    <div class="flex items-center space-x-2">
                        <a href=""
                            class="border-2 bg-gray-900 text-gray-100 border-gray-900 w-10 h-10 flex items-center justify-center text-lg  hover:bg-gray-300 hover:text-gray-900 transition"><i
                                class='bx bx-caret-left'></i></a>

                        <a href=""
                            class="border-2 bg-gray-900 text-gray-100 border-gray-900 w-10 h-10 flex items-center justify-center text-lg  hover:bg-gray-300 hover:text-gray-900 transition">1</a>

                        <a href=""
                            class="border-2 bg-gray-900 text-gray-100 border-gray-900 w-10 h-10 flex items-center justify-center text-lg  hover:bg-gray-300 hover:text-gray-900 transition">2</a>

                        <a href=""
                            class="border-2 bg-gray-900 text-gray-100 border-gray-900 w-10 h-10 flex items-center justify-center text-lg  hover:bg-gray-300 hover:text-gray-900 transition">3</a>

                        <a href=""
                            class="border-2 bg-gray-900 text-gray-100 border-gray-900 w-10 h-10 flex items-center justify-center text-lg  hover:bg-gray-300 hover:text-gray-900 transition"><i
                                class='bx bx-caret-right'></i></a>
                    </div>

                    <div class="mt-3 sm:mt-0">
                        <a href=""
                            class="border-2 border-gray-900 h-10 px-5 flex items-center justify-center text-md font-medium hover:bg-gray-900 hover:text-gray-100 transition">All
                            Products</a>
                    </div>

                </div>

                <!-- ------ end featured pagination--------- -->
            </div>

            <div>

            </div>
        </div>
    </section>




    <!-- ----------Pricing section---------- -->
    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 px-2 sm:px-6 lg:px-3">
            <div
                class="bg-gray-800 p-3 my-8 rounded-sm shadow-lg sm:px-6 md:px-8 md:relative sm:h-72 sm:mb-52 md:mb-44 lg:mb-40">
                <h1 class="text-gray-100 text-2xl sm:text-3xl md:text-4xl font-semibold mt-4 sm:mt-10">Stay in trend
                    with <br class="sm:hidden">
                    Shoeping</h1>

                <div
                    class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 lg:gap-10 my-10 lg:px-24 md:absolute md:top-20 md:left-0 md:px-8">
                    <div
                        class="bg-gray-300 text-gray-800 text-center p-6 rounded-sm block cursor-pointer transition-all duration-300   hover:bg-gray-700 transform hover:-translate-y-0.5 hover:translate-x-0.5 hover:text-gray-100 shadow-md">
                        <div class="text-6xl mb-2"><i class='bx bxs-hot'></i></div>
                        <h1 class="text-3xl sm:text-xl font-bold mb-3">Latest Style</h1>
                        <p class="mb-8 sm:text-sm sm:mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Nesciunt quae corporis eum assumenda asperiores dolorum reiciendis vitae.
                        </p>
                        <a href="#"
                            class="flex items-center w-max font-medium sm:text-sm  mb-3 transition duration-300 transform hover:translate-x-1">
                            Read More <i class='bx bxs-right-arrow-alt ml-2'></i>
                        </a>
                    </div>
                    <div
                        class="bg-gray-300 text-gray-800 text-center p-6 rounded-sm block cursor-pointer transition-all duration-300   hover:bg-gray-700 transform hover:-translate-y-0.5 hover:translate-x-0.5 hover:text-gray-100 shadow-md">
                        <div class="text-6xl mb-2"><i class='bx bxs-hot'></i></div>
                        <h1 class="text-3xl sm:text-xl font-bold mb-3">Latest Style</h1>
                        <p class="mb-8 sm:text-sm sm:mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Nesciunt quae corporis eum assumenda asperiores dolorum reiciendis vitae.
                        </p>
                        <a href="#"
                            class="flex items-center w-max font-medium sm:text-sm  mb-3 transition duration-300 transform hover:translate-x-1">
                            Read More <i class='bx bxs-right-arrow-alt ml-2'></i>
                        </a>
                    </div>

                    <div
                        class="bg-gray-300 text-gray-800 text-center p-6 rounded-sm block cursor-pointer transition-all duration-300   hover:bg-gray-700 transform hover:-translate-y-0.5 hover:translate-x-0.5 hover:text-gray-100 shadow-md">
                        <div class="text-6xl mb-2"><i class='bx bxs-hot'></i></div>
                        <h1 class="text-3xl sm:text-xl font-bold mb-3">Latest Style</h1>
                        <p class="mb-8 sm:text-sm sm:mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Nesciunt quae corporis eum assumenda asperiores dolorum reiciendis vitae.
                        </p>
                        <a href="#"
                            class="flex items-center w-max font-medium sm:text-sm  mb-3 transition duration-300 transform hover:translate-x-1">
                            Read More <i class='bx bxs-right-arrow-alt ml-2'></i>
                        </a>
                    </div>

                </div>

                {{-- <div class="sm:flex flex-wrap justify-center items-center text-center gap-8">
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-gray-700 mt-6  shadow-lg rounded-sm dark:bg-gray-800">
                        <div class="flex-shrink-0">
                            <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-sm bg-gray-100 text-gray-800">
                                <svg width="20" height="20" fill="currentColor" class="h-6 w-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-xl text-gray-100 font-semibold dark:text-gray-100 py-4">
                            Website Design
                        </h3>
                        <p class="text-md  text-gray-50 dark:text-gray-300 py-4">
                            Encompassing today’s website design technology to integrated and build solutions relevant to your business.
                        </p>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 mt-6 sm:mt-16 md:mt-20 lg:mt-24 bg-gray-700 shadow-lg rounded-sm dark:bg-gray-800">
                        <div class="flex-shrink-0">
                            <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-sm bg-gray-100 text-gray-800">
                                <svg width="20" height="20" fill="currentColor" class="h-6 w-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-xl text-gray-100 font-semibold dark:text-gray-100 py-4">
                            Branding
                        </h3>
                        <p class="text-md text-gray-50 dark:text-gray-300 py-4">
                            Share relevant, engaging, and inspirational brand messages to create a connection with your audience.
                        </p>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 mt-6  px-4 py-4 bg-gray-700 shadow-lg rounded-sm dark:bg-gray-800">
                        <div class="flex-shrink-0">
                            <div class="flex items-center mx-auto justify-center h-12 w-12 rounded-sm bg-gray-100 text-gray-800">
                                <svg width="20" height="20" fill="currentColor" class="h-6 w-6" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl sm:text-xl text-gray-100 font-semibold dark:text-gray-100 py-4">
                            SEO Marketing
                        </h3>
                        <p class="text-md  text-gray-50 dark:text-gray-300 py-4">
                            Let us help you level up your search engine game, explore our solutions for digital marketing for your business.
                        </p>
                    </div>
                </div>
                 --}}



            </div>

        </div>
    </section>



    <!-- -----Popular Products------- -->

    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 md:py-20 px-3 sm:px-6 lg:px-3 overflow-hidden">
            <div class="">
                <div>
                    <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2 uppercase">
                        Popular
                        Products</h1>
                </div>
                <div class="swiper-container product_card_swiper">
                    <div class="swiper-wrapper h-auto py-8">
                        @foreach ($p_products as $p_product)
                            <div
                            class="swiper-slide w-[400px] sm:w-[520px] rounded-sm overflow-hidden">

                                <div class="w-[400px] h-[300px] sm:w-[520px] sm:h-[340px] relative">
                                    <div class="h-[300px] w-52  sm:h-[340px] sm:w-64 bg-gray-600 rounded-sm absolute p-4 bg-opacity-50 overflow-hidden shadow-lg">
                                        <div class="w-[340px] -ml-16 sm:-ml-12 ">
                                            <div class=" -rotate-90 bg-gray-400 flex justify-center w-full h-full overflow-hidden relative">
                                                <span class=" z-30 absolute text-[8rem] tracking-[-0.095em] font-black  font-serif inline-block gray-100space-nowrap opacity-20">{{ $p_product->brand->name }}</span>
                                            </div>
                                        </div>
                                        <div class="absolute z-20 h-full flex items-center top-0 px-4 sm:px-0 ">
                                            <img class="-rotate-12" src="{{ asset('storage') }}/{{ $p_product->image }}" alt="">
                                        </div>
                                    </div>
                                    <div
                                        class="w-80 h-64 sm:w-96 sm:h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-32 sm:-mt-36 z-10 grid grid-cols-3 shadow-lg">
                                        <div class="col-start-2 col-span-2 ml-4 py-6 sm:py-9 px-2">
                                            <div class="my-2">
                                                <h1 class="text-xl sm:text-3xl font-light mb-2">{{ $p_product->name }}</h1>
                                                <p class="text-lg sm:text-2xl font-semibold">$ {{ $p_product->regular_price }}</p>
                                            </div>
                                            <div class="flex my-2">
                                                <div class="pr-2 sm:pr-4 border-r-2 border-gray-600 ">
                                                    <h1 class="text-xs sm:text-md font-semibold mb-1">Size</h1>
                                                    <ul class="flex text-xs sm:space-x-1 font-semibold">
                                                        <li
                                                            class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                            S
                                                        </li>
                                                        <li
                                                            class="border-2 border-gray-600 rounded-full w-6 h-6 p-1 flex justify-center items-center">
                                                            M
                                                        </li>
                                                        <li
                                                            class=" rounded-full w-6 h-6 p-1 flex justify-center items-center">
                                                            L
                                                        </li>
                                                        <li
                                                            class="rounded-full w-6 h-6 p-1 flex justify-center items-center">
                                                            XL
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="px-4">
                                                    <h1 class="text-xs sm:text-md font-semibold mb-1">Rating</h1>
                                                    <span class="text-md sm:text-lg font-bold text-gray-100"><i
                                                            class='bx bxs-star text-gray-600'></i>
                                                        4.7</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center my-4">
                                                <a class="inline-block px-6 sm:px-7 py-2 border border-gray-600 text-sm font-medium transition hover:bg-gray-600 hover:text-gray-800"
                                                    href="">Add to cart</a>
                                                <a class="text-3xl ml-3 text-gray-600" href=""><i
                                                        class='bx bxs-heart'></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        @endforeach
                    </div>
                    <div class="swiper-pagination text-gray-800"></div>
                </div>

                <div class="flex justify-end mt-3">
                    <div>
                        <a href="#"
                            class="py-2 px-7 border-2 border-gray-900 font-medium hover:bg-gray-900 hover:text-gray-100 transition duration-200">View
                            All</a>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- -----On Sale Products Products------- -->


    @if ($s_products->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
    <section class="bg-gradient bg-gray-200 dark:bg-gray-800 py-8 md:py-16 md:pb-0">
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-3">
            <div class="flex items-center flex-col md:flex-row bg-gray-700 rounded-sm">
                <div class="w-full px-8 py-10 mb-5 md:mb-0 text-center md:text-left ">
                    <h6 class="uppercase font-semibold text-xs md:text-base text-gray-100 dark:text-gray-100 mb-16">
                        All Up For Grabs
                    </h6>
                    <h3 class="font-bold font-heading text-2xl md:text-5xl text-gray-100 mb-10">
                        Enjoy Up to 50% OFF!
                    </h3>
                </div>
                <div class="w-full md:w-auto px-5">
                    <div class="flex justify-center text-gray-100 text-center mb-6 md:mb-0">
                        <input type="hidden" id="sale_expire_date" value="{{ $sale->sale_date }}">
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span class=" tracking-widest" id="_day" >
                                    00
                                </span>
                 
                            </div>
                            <div class="opacity-75 text-xs mt-3 uppercase">
                                Day
                            </div>
                        </div>
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span class=" tracking-widest" id="_hour" >
                                    00
                                </span>
                            </div>
                            <div class=" opacity-75 text-xs mt-3 uppercase">
                                Hour
                            </div>
                        </div>
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span class=" tracking-widest" id="_min" >
                                    00
                                </span>
                            </div>
                            <div class=" opacity-75 text-xs mt-3 uppercase">
                                Min
                            </div>
                        </div>
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span class=" tracking-widest" id="_sec" >
                                    00
                                </span>
                            </div>
                            <div class=" opacity-75 text-xs mt-3 uppercase">
                                Second
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 md:py-10 px-3 sm:px-6 lg:px-3 overflow-hidden">
            <div class="">
                <div class="swiper-container product_card_swiper">
                    <div class="swiper-wrapper h-auto py-8">
                        @foreach ($s_products as $s_product)
                            <div
                            class="swiper-slide w-[400px] sm:w-[520px] rounded-sm overflow-hidden">

                                <div class="w-[400px] h-[300px] sm:w-[520px] sm:h-[340px] relative">
                                    <div class="h-[300px] w-52  sm:h-[340px] sm:w-64 bg-gray-600 rounded-sm absolute p-4 bg-opacity-50 overflow-hidden shadow-lg">
                                        <div class="w-[340px] -ml-16 sm:-ml-12 ">
                                            <div class=" -rotate-90 bg-gray-400 flex justify-center w-full h-full overflow-hidden relative">
                                                <span class=" z-30 absolute text-[8rem] tracking-[-0.095em] font-black  font-serif inline-block gray-100space-nowrap opacity-20">{{ $s_product->brand->name }}</span>
                                            </div>
                                        </div>
                                        <div class="absolute z-20 h-full flex items-center top-0 px-4 sm:px-0 ">
                                            <img class="-rotate-12" src="{{ asset('storage') }}/{{ $s_product->image }}" alt="">
                                        </div>
                                    </div>
                                    <div
                                        class="w-80 h-64 sm:w-96 sm:h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-32 sm:-mt-36 z-10 grid grid-cols-3 shadow-lg">
                                        <div class="col-start-2 col-span-2 ml-4 py-6 sm:py-9 px-2">
                                            <div class="my-2">
                                                <h1 class="text-xl sm:text-3xl font-light mb-2">{{ $s_product->name }}</h1>
                                                <p class="text-lg sm:text-2xl font-semibold">$ {{ $s_product->onsale_price }}</p>
                                            </div>
                                            <div class="flex my-2">
                                                <div class="pr-2 sm:pr-4 border-r-2 border-gray-600 ">
                                                    <h1 class="text-xs sm:text-md font-semibold mb-1">Size</h1>
                                                    <ul class="flex text-xs sm:space-x-1 font-semibold">
                                                        <li
                                                            class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                            S
                                                        </li>
                                                        <li
                                                            class="border-2 border-gray-600 rounded-full w-6 h-6 p-1 flex justify-center items-center">
                                                            M
                                                        </li>
                                                        <li
                                                            class=" rounded-full w-6 h-6 p-1 flex justify-center items-center">
                                                            L
                                                        </li>
                                                        <li
                                                            class="rounded-full w-6 h-6 p-1 flex justify-center items-center">
                                                            XL
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="px-4">
                                                    <h1 class="text-xs sm:text-md font-semibold mb-1">Rating</h1>
                                                    <span class="text-md sm:text-lg font-bold text-gray-100"><i
                                                            class='bx bxs-star text-gray-600'></i>
                                                        4.7</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center my-4">
                                                <a class="inline-block px-6 sm:px-7 py-2 border border-gray-600 text-sm font-medium transition hover:bg-gray-600 hover:text-gray-800"
                                                    href="{{ route('product.detail', $s_product->id) }}">Add to cart</a>
                                                <a class="text-3xl ml-3 text-gray-600" href=""><i
                                                        class='bx bxs-heart'></i></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        @endforeach
                    </div>
                    <div class="swiper-pagination text-gray-800"></div>
                </div>

                <div class="flex justify-end mt-3">
                    <div>
                        <a href="#"
                            class="py-2 px-7 border-2 border-gray-900 font-medium hover:bg-gray-900 hover:text-gray-100 transition duration-200">View
                            All</a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    @endif



    <!-- -------New Arrivals------- -->
    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 md:py-20 px-3 sm:px-6 lg:px-3">
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div
                        class="grid grid-cols-1 sm:grid-cols-5 bg-gray-300 text-gray-900 rounded-sm overflow-hidden sm:h-72 md:h-60 lg:h-72 shadow-md">
                        <div
                            class="w-full h-52 sm:h-72 md:h-60 lg:h-72 relative sm:col-span-2 sm:col-start-4 sm:row-start-1 flex items-center pr-4 overflow-hidden">
                            <img class="w-2/3 mx-auto mt-4 sm:w-full sm:mx-0 sm:mt-0" src="{{ asset('storage\header\new1.png') }}"
                                alt="">
                            <h4
                                class="sm:hidden text-md absolute top-0 font-medium mt-4 text-gray-100 bg-gray-900 rounded-r-sm bg-opacity-50 py-2 px-6">
                                New Arrivals
                            </h4>
                        </div>
                        <div class="p-6 sm:col-span-3 sm:col-start-1 sm:row-start-1">
                            <h4
                                class="hidden sm:block text-md md:text-sm font-medium mb-12 md:mb-8 lg:mb-12 text-gray-800">
                                New
                                Arrivals</h4>
                            <h1 class="text-3xl md:text-xl lg:text-3xl font-semibold mb-2">Nike Spark 98</h1>
                            <p class="text-md md:text-sm lg:text-md mb-4 lg:mb-6">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit.
                            </p>
                            <a href=""
                                class="border-2 text-lg md:text-sm lg:text-lg font-medium border-gray-900 px-6 py-2 md:px-3 md:py-1 lg:px-6 lg:py-2 inline-block hover:bg-gray-900 hover:text-gray-100 transition rounded-sm">Browse
                                Collection</a>
                        </div>
                    </div>


                    <div
                        class="grid grid-cols-1 sm:grid-cols-5 bg-gray-300 text-gray-900 rounded-sm overflow-hidden sm:h-72 md:h-60 lg:h-72 shadow-md">
                        <div
                            class="w-full h-52 sm:h-72 md:h-60 lg:h-72 relative sm:col-span-2 sm:col-start-4 sm:row-start-1 flex items-center pr-4 overflow-hidden">
                            <img class="w-2/3 mx-auto mt-4 sm:w-full sm:mx-0 sm:mt-0" src="{{ asset('storage\header\new1.png') }}"
                                alt="">
                            <h4
                                class="sm:hidden text-md absolute top-0 font-medium mt-4 text-gray-100 bg-gray-900 rounded-r-sm bg-opacity-50 py-2 px-6">
                                New Arrivals
                            </h4>
                        </div>
                        <div class="p-6 sm:col-span-3 sm:col-start-1 sm:row-start-1">
                            <h4
                                class="hidden sm:block text-md md:text-sm font-medium mb-12 md:mb-8 lg:mb-12 text-gray-800">
                                New
                                Arrivals</h4>
                            <h1 class="text-3xl md:text-xl lg:text-3xl font-semibold mb-2">Nike Spark 98</h1>
                            <p class="text-md md:text-sm lg:text-md mb-4 lg:mb-6">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit.
                            </p>
                            <a href=""
                                class="text-lg md:text-sm lg:text-lg font-medium px-8 py-3 md:px-4 md:py-2 lg:px-6 lg:py-3 inline-block bg-gray-900 text-gray-100 hover:bg-gray-800 transition rounded-sm">Browse
                                Collection</a>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>


    <!-- ---Offer--- -->

    {{-- <section class="bg-gradient bg-gray-200 dark:bg-gray-800 py-8 md:py-16">
        <div class="max-w-6xl mx-auto px-3 sm:px-6 lg:px-3">
            <div class="flex items-center flex-col md:flex-row bg-gray-700 rounded-sm">
                <div class="w-full px-8 py-10 mb-5 md:mb-0 text-center md:text-left ">
                    <h6 class="uppercase font-semibold text-xs md:text-base text-gray-100 dark:text-gray-100 mb-16">
                        All Up For Grabs
                    </h6>
                    <h3 class="font-bold font-heading text-2xl md:text-5xl text-gray-100 mb-10">
                        Enjoy Up to 50% OFF!
                    </h3>
                    <div class="mt-4 w-full md:w-64">
                        <button type="button" class="py-3 bg-gray-700 hover:bg-gray-100 ring-2 ring-gray-100  focus:ring-gray-100 focus:ring-offset-indigo-200 text-gray-100 hover:text-gray-800 w-full transition ease-in duration-200 text-center text-lg font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-sm ">
                            Browse Collection
                        </button>
                    </div>
                </div>
                <div class="w-full md:w-auto px-5">
                    <div class="flex justify-center text-gray-100 text-center mb-6 md:mb-0">
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span>
                                    0
                                </span>
                                <span>
                                    1
                                </span>
                            </div>
                            <div class="opacity-75 text-xs mt-3 uppercase">
                                Day
                            </div>
                        </div>
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span>
                                    1
                                </span>
                                <span>
                                    8
                                </span>
                            </div>
                            <div class=" opacity-75 text-xs mt-3 uppercase">
                                Hour
                            </div>
                        </div>
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span>
                                    5
                                </span>
                                <span>
                                    0
                                </span>
                            </div>
                            <div class=" opacity-75 text-xs mt-3 uppercase">
                                Min
                            </div>
                        </div>
                        <div class="w-20 md:w-24 border border-gray-100  rounded-lg py-3 md:py-4 mx-2">
                            <div class="text-2xl md:text-3xl font-semibold">
                                <span>
                                    1
                                </span>
                                <span>
                                    9
                                </span>
                            </div>
                            <div class=" opacity-75 text-xs mt-3 uppercase">
                                Second
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <!-- ------Brands Section-------- -->
    <section class="bg-gray-200">
        <div class="max-w-6xl mx-auto py-10 px-2 pb-20">
            <div class="w-full py-3 overflow-hidden">
                <div>
                    <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2 uppercase mb-5">
                        Brands</h1>
                </div>

                <div class="swiper-container mySwiper h-20 md:h-24 lg:h-28 bg-gray-300 overflow-visible shadow-md">
                    <div class="swiper-wrapper">

                        @foreach ($brands as $brand)
                            <a href=""
                            class="swiper-slide text-md flex flex-col items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                <img class="w-10 h-10 mb-1" src="{{ asset('storage') }}/{{ $brand->image }}" alt="">
                                {{ $brand->name }}
                            </a>


                        @endforeach
                        
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>




@push('scripts')


    @if ($s_products->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())

        <script>

            var sale_expire_date = document.getElementById('sale_expire_date').value;
            // Set the date we're counting down to
            var countDownDate = new Date(sale_expire_date).getTime();
            
            // Update the count down every 1 second
            var x = setInterval(function() {
            
            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
            // Output the result in an element 
            document.getElementById("_day").innerHTML = days;
            document.getElementById("_hour").innerHTML = hours;
            document.getElementById("_min").innerHTML = minutes;
            document.getElementById("_sec").innerHTML = seconds;

            }, 1000);
        </script>

    @endif


@endpush
