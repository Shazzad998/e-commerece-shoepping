<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>

    <!-- ---full content wrapper--- -->
    <div>

        <!-- ---nav--- -->

        <nav class="bg-gray-300">
            <div class="max-w-6xl mx-auto px-3">
                <div class="flex justify-between text-gray-900 py-2 md:pt-0">
                    <div class="hidden md:flex items-center">
                        <a href=""
                            class="py-3 font-bold text-xl md:text-2xl hover:text-gray-600 transition duration-300">LOGO</a>
                    </div>

                    <div class="hidden md:flex space-x-4 items-center font-medium">
                        <a href="" class="px-2 py-3 hover:text-gray-600 transition duration-300">Home</a>
                        <a href="" class="px-2 py-3 hover:text-gray-600 transition duration-300">About</a>
                        <a href="" class="px-2 py-3 hover:text-gray-600 transition duration-300">Contact</a>
                        <a href="" class="px-2 py-3 hover:text-gray-600 transition duration-300">Shop</a>
                        <a href="" class="px-2 py-3 hover:text-gray-600 transition duration-300">FAQ</a>
                    </div>

                    <div class="hidden md:flex space-x-4 items-center">

                        <div class="flex items-center space-x-2">
                            <!-- <input type="text" class="p-1 focus:outline-none"> -->
                            <a href="#" class="py-3 hover:text-gray-600 transition duration-300"><i
                                    class='bx bx-search'></i></a>
                        </div>

                        <a href="#" class="py-3 hover:text-gray-600 transition duration-300"><i
                                class='bx bxs-heart'></i></a>

                        <a href="#" class="py-3 hover:text-gray-600 transition duration-300"><i
                                class='bx bxs-cart-alt'></i></a>

                        <a href="#" class="py-3 hover:text-gray-600 transition duration-300"><i
                                class='bx bxs-user'></i></a>

                        <a href="#"
                            class="px-3 hover:bg-gray-600 rounded-sm py-1 bg-gray-900 font-semibold text-gray-100 transition duration-300">Log
                            In</a>
                    </div>

                    <div class="md:hidden flex items-center text-3xl mr-3">
                        <button class="mobile-menu-button">
                            <i class='bx bx-menu'></i>
                        </button>

                    </div>

                    <div class="md:hidden flex w-full">
                        <input type="text" class="p-1 focus:outline-none w-full">
                        <a href="#" class="py-2 px-3 text-gray-100 hover:bg-gray-600 bg-gray-900"><i
                                class='bx bx-search'></i></a>
                    </div>
                </div>

            </div>

            <!-- -----mobile menu----- -->

            <div class="hidden mobile-menu md:hidden p-2 ">
                <a href="" class="block text-center font-medium py-2 hover:bg-gray-400">Home</a>
                <a href="" class="block text-center font-medium py-2 hover:bg-gray-400">About</a>
                <a href="" class="block text-center font-medium py-2 hover:bg-gray-400">Contact</a>
                <a href="" class="block text-center font-medium py-2 hover:bg-gray-400">Home</a>

                <div class="h-px w-full bg-gray-400 my-4"></div>
            </div>


            <!-- -----end mobile menu----- -->
        </nav>

        <!-- ---end nav--- -->

        <main>
            <!-- ---header section---- -->
            <header class="bg-gray-300">
                <div
                    class="max-w-6xl mx-auto grid grid-cols-1 grid-rows-2 sm:grid-cols-2 sm:grid-rows-1  py-8 px-4 sm:px-8 lg:px-2">
                    <div class="">
                        <div class="relative sm:float-right">
                            <div class="relative sm:w-72 h-56 lg:w-96 lg:h-80">
                                <div
                                    class="w-56 h-56 lg:w-80 lg:h-80 absolute left-1/2 -ml-28 lg:-ml-40 bg-gray-800 rounded-full ">
                                </div>
                                <img class="absolute w-72 h-auto lg:w-96 left-1/2 top-6 -ml-36 lg:-ml-48 transform -rotate-12 animate-wiggle"
                                    src="images/imghome.png" alt="">
                            </div>

                        </div>


                    </div>
                    <div class="sm:col-start-1 sm:row-start-1 mt-6 text-gray-900 lg:my-8">
                        <h1 class="text-5xl lg:text-6xl font-semibold lg:font-medium">Yeezy Boost <br> SPLY-350</h1>
                        <p class="mt-3 lg:mt-4 lg:text-lg font-medium">Explore the new collection of sneakers</p>
                        <a href=""
                            class="inline-block bg-gray-900 text-gray-100  uppercase tracking-wider rounded-sm  font-semibold py-3 px-7 mt-5 lg:mt-16">Explore
                            Now</a>
                    </div>
                </div>
            </header>

            <!-- ---end header section---- -->

            <!-- ----- Browse by category section----- -->
            <section class="bg-gray-200">
                <div class="max-w-6xl mx-auto py-10 px-2 ">
                    <div class="w-full py-3 overflow-hidden">
                        <div class="my-4">
                            <h1 class="text-xl font-semibold inline-block mr-2">Browse by Category</h1>
                            <select name="" id="" class="bg-gray-800 py-1 px-2 text-gray-100 text-xs rounded-sm">
                                <option value="">All Category</option>
                                <option value="">category 1</option>
                                <option value="">category 1</option>
                                <option value="">category 1</option>
                                <option value="">category 1</option>
                            </select>
                        </div>

                        <div class="swiper-container mySwiper h-20 md:h-24 lg:h-28 bg-gray-300 overflow-visible">
                            <div class="swiper-wrapper">
                                <a href=""
                                    class="category__link swiper-slide text-md flex flex-col items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110"> 
                                    <img class="w-10 h-10 mb-1" src="{{ asset('storage/categories/76iFbl70jv1h9PpTyVFUwEtggeeZi8YAoiMZBb3q.svg') }}" alt="">
                                    Men
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bxs-virus'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bx-trip'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bxs-tv'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bxs-face-mask'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bxl-c-plus-plus'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bxs-home-smile'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bx-merge'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bxs-cctv'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-800 hover:bg-gray-800 hover:text-gray-100 transition transform hover:scale-110">
                                    <i class='bx bxs-binoculars'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- -----End  Browse by category section----- -->



            <!-- -------featured section--------- -->
            <section class="bg-gray-300">
                <div class="max-w-6xl mx-auto py-10 md:py-20 px-2">
                    <div>
                        <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block">Featured</h1>
                    </div>

                    <div>
                        <!-- -------featured products---- -->
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4   gap-3 p-4 lg:py-4 lg:px-0 ">
                            <a href="" class="product bg-red-400 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/alex-hudson-J-VOzId2M_g-unsplash.jpg" alt="">
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
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="product bg-red-400 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/clem-onojeghuo-cjjKEdaBobk-unsplash.jpg" alt="">
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
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="product bg-red-400 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/andres-jasso-PqbL_mxmaUE-unsplash.jpg" alt="">
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
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="product bg-red-400 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/erik-mclean-ByjIzFupcHo-unsplash.jpg" alt="">
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
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="product bg-red-200 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/maksim-larin-ezdrvzA1hZw-unsplash.jpg" alt="">
                                <div class=" product-hover absolute inset-0 bg-gray-900 bg-opacity-80 p-5 opacity-0
                                    transition duration-300">
                                    <div class="flex justify-between items-center text-xl">
                                        <div><i class='bx bx-star'></i> 4.7</div>
                                        <div class="flex items-center text-2xl">
                                            <i class='bx bx-heart p-2'></i>
                                            <i class='bx bx-cart-alt p-2'></i>
                                        </div>
                                    </div>

                                    <div class="font-medium absolute bottom-8">
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="product bg-red-200 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/xavier-teo-SxAXphIPWeg-unsplash.jpg" alt="">
                                <div class=" product-hover absolute inset-0 bg-gray-900 bg-opacity-80 p-5 opacity-0
                                    transition duration-300">
                                    <div class="flex justify-between items-center text-xl">
                                        <div><i class='bx bx-star'></i> 4.7</div>
                                        <div class="flex items-center text-2xl">
                                            <i class='bx bx-heart p-2'></i>
                                            <i class='bx bx-cart-alt p-2'></i>
                                        </div>
                                    </div>

                                    <div class="font-medium absolute bottom-8">
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="product bg-red-200 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/paul-esch-laurent--oRLy6p7E_k-unsplash.jpg" alt="">
                                <div class=" product-hover absolute inset-0 bg-gray-900 bg-opacity-80 p-5 opacity-0
                                    transition duration-300">
                                    <div class="flex justify-between items-center text-xl">
                                        <div><i class='bx bx-star'></i> 4.7</div>
                                        <div class="flex items-center text-2xl">
                                            <i class='bx bx-heart p-2'></i>
                                            <i class='bx bx-cart-alt p-2'></i>
                                        </div>
                                    </div>

                                    <div class="font-medium absolute bottom-8">
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="product bg-red-200 relative h-96 text-gray-100 overflow-hidden rounded-sm">
                                <img class="h-full w-full object-center object-cover transition duration-500"
                                    src="images/New folder/mnz-v13tnV6D9lw-unsplash.jpg" alt="">
                                <div class=" product-hover absolute inset-0 bg-gray-900 bg-opacity-80 p-5 opacity-0
                                    transition duration-300">
                                    <div class="flex justify-between items-center text-xl">
                                        <div><i class='bx bx-star'></i> 4.7</div>
                                        <div class="flex items-center text-2xl">
                                            <i class='bx bx-heart p-2'></i>
                                            <i class='bx bx-cart-alt p-2'></i>
                                        </div>
                                    </div>

                                    <div class="font-medium absolute bottom-8">
                                        <span class="text-3xl">$ 600.54</span>
                                        <span class="text-xl ml-4 line-through text-gray-400">
                                            $ 700
                                        </span>
                                        <button
                                            class="border-2 border-gray-50 text-lg font-medium py-2 px-12 mt-4 hover:bg-gray-100 hover:text-gray-900">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>
                            </a>
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

            <!-- -------end featured section--------- -->



            <!-- ----------Pricing section---------- -->
            <section class="bg-gray-200">
                <div class="max-w-6xl mx-auto py-10 px-2 sm:px-6 lg:px-3">
                    <div
                        class="bg-gray-800 p-3 my-8 rounded-sm sm:px-6 md:px-8 md:relative sm:h-72 sm:mb-52 md:mb-44 lg:mb-40">
                        <h1 class="text-gray-100 text-2xl sm:text-3xl md:text-4xl font-semibold my-4 sm:mt-10">Stay in trend
                            with <br class="sm:hidden">
                            Shoeping</h1>

                        <div
                            class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 lg:gap-10 my-10 lg:px-24 md:absolute md:top-20 md:left-0 md:px-8">
                            <div
                                class="bg-gray-300 text-gray-800 p-4 rounded-sm block cursor-pointer transition-all duration-300   hover:bg-gray-700 transform hover:-translate-y-0.5 hover:translate-x-0.5 hover:text-gray-100 hover:shadow-md">
                                <div class="text-6xl mb-2"><i class='bx bxs-hot'></i></div>
                                <h1 class="text-3xl sm:text-xl font-bold mb-3">Latest Style</h1>
                                <p class="mb-8 sm:text-sm sm:mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Nesciunt quae corporis eum assumenda asperiores dolorum reiciendis vitae,
                                    voluptatibus nisi tempora minus
                                </p>
                                <a href="#"
                                    class="flex items-center w-max font-medium sm:text-sm  mb-3 transition duration-300 transform hover:translate-x-1">
                                    Read More <i class='bx bxs-right-arrow-alt ml-2'></i>
                                </a>
                            </div>
                            <div
                                class="bg-gray-300 text-gray-800 p-4 rounded-sm block cursor-pointer transition-all duration-300   hover:bg-gray-700 transform hover:-translate-y-0.5 hover:translate-x-0.5 hover:text-gray-100 hover:shadow-md">
                                <div class="text-6xl mb-2"><i class='bx bxs-hot'></i></div>
                                <h1 class="text-3xl sm:text-xl font-bold mb-3">Latest Style</h1>
                                <p class="mb-8 sm:text-sm sm:mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Nesciunt quae corporis eum assumenda asperiores dolorum reiciendis vitae,
                                    voluptatibus nisi tempora minus
                                </p>
                                <a href="#"
                                    class="flex items-center w-max font-medium sm:text-sm  mb-3 transition duration-300 transform hover:translate-x-1">
                                    Read More <i class='bx bxs-right-arrow-alt ml-2'></i>
                                </a>
                            </div>

                            <div
                                class="bg-gray-300 text-gray-800 p-4 rounded-sm block cursor-pointer transition-all duration-300   hover:bg-gray-700 transform hover:-translate-y-0.5 hover:translate-x-0.5 hover:text-gray-100 hover:shadow-md">
                                <div class="text-6xl mb-2"><i class='bx bxs-hot'></i></div>
                                <h1 class="text-3xl sm:text-xl font-bold mb-3">Latest Style</h1>
                                <p class="mb-8 sm:text-sm sm:mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Nesciunt quae corporis eum assumenda asperiores dolorum reiciendis vitae,
                                    voluptatibus nisi tempora minus
                                </p>
                                <a href="#"
                                    class="flex items-center w-max font-medium sm:text-sm  mb-3 transition duration-300 transform hover:translate-x-1">
                                    Read More <i class='bx bxs-right-arrow-alt ml-2'></i>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- ----------End Pricing section---------- -->


            <!-- -----Popular Products------- -->



            <section class="bg-gray-300">
                <div class="max-w-6xl mx-auto py-10 md:py-20 px-3 sm:px-6 lg:px-3">
                    <div>
                        <div>
                            <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2">
                                Popular
                                Products</h1>
                        </div>
                        <div class="swiper-container product_card_swiper">
                            <div class="swiper-wrapper h-auto py-8">

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-purple-400 rounded-sm absolute p-4 bg-opacity-50">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women4.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-purple-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-purple-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-purple-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-purple-400 text-sm font-medium transition hover:bg-purple-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-purple-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">
                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-red-300 rounded-sm absolute p-4 bg-opacity-50">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women1.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-red-300 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-red-300 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-red-300'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-red-300 text-sm font-medium transition hover:bg-red-300 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-red-300" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-red-400 rounded-sm absolute p-4 bg-opacity-50">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women3.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-red-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-red-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i cla
                                                                class='bx bxs-star text-red-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-red-400 text-sm font-medium transition hover:bg-red-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-red-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">
                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-yellow-700 rounded-sm absolute p-4 bg-opacity-50">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/new2.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-yellow-700 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-yellow-700 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-yellow-700'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-yellow-700 text-sm font-medium transition hover:bg-yellow-700 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-yellow-700" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/new4.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-200 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/new5.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-200 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-200 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-200'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-200 text-sm font-medium transition hover:bg-gray-200 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-200" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/featured3.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-yellow-600 rounded-sm absolute p-4 bg-opacity-50">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women2.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-yellow-600 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-yellow-600 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-yellow-600'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-yellow-600 text-sm font-medium transition hover:bg-yellow-600 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-yellow-600" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
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
            <!-- -----End Popular Products------- -->


            <!-- -----Top Selling Products------- -->

            <section class="bg-gray-200">
                <div class="max-w-6xl mx-auto py-10 md:py-20 px-3 sm:px-6 lg:px-3">
                    <div>
                        <div>
                            <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2">
                                Popular
                                Products</h1>
                        </div>
                        <div class="swiper-container product_card_swiper">
                            <div class="swiper-wrapper h-auto py-8">

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women4.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">
                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women1.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women3.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i cla
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">
                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women2.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women4.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women1.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women3.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div
                                    class="swiper-slide w-[520px] rounded-sm overflow-hidden transition-transform duration-300 transform hover:-translate-y-2">

                                    <div class="w-[520px] h-[340px] relative">
                                        <div class="h-[340px] w-64 bg-gray-400 rounded-sm absolute p-4">
                                            <div class="relative flex">
                                                <h1
                                                    class="text-[9rem] font-black rotate-90 absolute inset-0 left-24 top-11 inline-block opacity-30">
                                                    NIKE
                                                </h1>
                                            </div>
                                            <div class="absolute z-20 h-full flex items-center top-0 px-8">
                                                <img class="-rotate-12" src="images/women2.png" alt="">
                                            </div>
                                        </div>
                                        <div
                                            class="w-96 h-72 bg-gray-800 text-gray-100 rounded-sm absolute right-0 top-1/2 -mt-36 z-10 grid grid-cols-3">
                                            <div class="col-start-2 col-span-2 ml-4 py-4 px-2">
                                                <div class="my-2">
                                                    <h1 class="text-3xl font-light mb-2">Nike Jordan SPLY-350</h1>
                                                    <p class="text-2xl font-semibold">$ 1884.00</p>
                                                </div>
                                                <div class="flex my-2">
                                                    <div class="pr-4 border-r-2 border-gray-400 ">
                                                        <h1 class="text-md font-semibold mb-1">Size</h1>
                                                        <ul class="flex text-xs space-x-1 font-semibold">
                                                            <li
                                                                class=" rounded-full  w-6 h-6 p-1 flex justify-center items-center">
                                                                S
                                                            </li>
                                                            <li
                                                                class="border-2 border-gray-400 rounded-full w-6 h-6 p-1 flex justify-center items-center">
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
                                                        <h1 class="text-md font-semibold mb-1">Rating</h1>
                                                        <span class="text-lg font-bold text-gray-100"><i
                                                                class='bx bxs-star text-gray-400'></i>
                                                            4.7</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center my-4">
                                                    <a class="inline-block px-7 py-2 border border-gray-400 text-sm font-medium transition hover:bg-gray-400 hover:text-gray-800"
                                                        href="">Add to cart</a>
                                                    <a class="text-3xl ml-3 text-gray-400" href=""><i
                                                            class='bx bxs-heart'></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
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
            <!-- -----End Top Selling Products------- -->

            <!-- -------New Arrivals------- -->
            <section class="bg-gray-300">
                <div class="max-w-6xl mx-auto py-10 md:py-20 px-3 sm:px-6 lg:px-3">
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div
                                class="grid grid-cols-1 sm:grid-cols-5 bg-gray-200 text-gray-900 rounded-sm overflow-hidden sm:h-72 md:h-60 lg:h-72 ">
                                <div
                                    class="w-full h-52 sm:h-72 md:h-60 lg:h-72 relative sm:col-span-2 sm:col-start-4 sm:row-start-1">
                                    <img class="w-full h-full object-cover object-center" src="images/New folder/ll.jpg"
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
                                class="grid grid-cols-1 sm:grid-cols-5 bg-gray-200 text-gray-900 rounded-sm overflow-hidden sm:h-72 md:h-60 lg:h-72 ">
                                <div
                                    class="w-full h-52 sm:h-72 md:h-60 lg:h-72 relative sm:col-span-2 sm:col-start-4 sm:row-start-1">
                                    <img class="w-full h-full object-cover object-center" src="images/New folder/ll.jpg"
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
            <!-- -------End New Arrivals------- -->

            <!-- ---Offer--- -->
            <section class="bg-gray-200">
                <div class="max-w-6xl mx-auto py-10 md:py-20 px-3 sm:px-6 lg:px-3">

                    <div class="grid grid-cols-1 sm:grid-cols-5 bg-gray-700 text-gray-100 rounded-sm overflow-hidden ">
                        <div
                            class="flex items-center px-12 pt-12 sm:p-4 md:p-6 md:pr-10 lg:p-10 lg:pr-12 sm:col-span-2 sm:col-start-4 sm:row-start-1">
                            <img class="w-full h-auto object-cover object-center" src="images/new1.png" alt="">

                        </div>
                        <div class="p-6 sm:col-span-3 sm:col-start-1 sm:row-start-1 lg:p-10">
                            <h4 class="text-lg  font-medium mb-4 md:mb-6">
                                All Up For Grabs
                            </h4>
                            <h1 class="text-3xl lg:text-5xl font-semibold mb-2 md:mb-5">Enjoy Up to 50% OFF!
                            </h1>
                            <p class="text-md md:text-sm lg:text-md mb-4 md:mb-10 lg:mb-16">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit.
                            </p>
                            <a href=""
                                class="border-2 text-lg md:text-sm lg:text-lg font-medium border-gray-100 px-6 py-2 md:px-3 md:py-1 lg:px-6 lg:py-2 inline-block hover:bg-gray-100 hover:text-gray-900 transition rounded-sm">Browse
                                Collection</a>
                        </div>
                    </div>

                </div>
            </section>
            <!-- ---End Offer--- -->

            <!-- ------Brands Section-------- -->
            <section class="bg-gray-300">
                <div class="max-w-6xl mx-auto py-10 px-2 pb-20">
                    <div class="w-full py-3 overflow-hidden">
                        <div>
                            <h1 class="text-xl lg:text-2xl font-semibold border-gray-900 border-b-2 inline-block py-2 mb-5">
                                Brands</h1>
                        </div>

                        <div class="swiper-container mySwiper h-20 md:h-24 lg:h-28 bg-gray-200 overflow-visible ">
                            <div class="swiper-wrapper">
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxl-firebase'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxs-virus'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bx-trip'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxs-tv'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxs-face-mask'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxl-c-plus-plus'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxs-home-smile'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bx-merge'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxs-cctv'></i>
                                </a>
                                <a href=""
                                    class="swiper-slide text-4xl md:text-5xl lg:text-6xl flex items-center justify-center text-gray-500 hover:text-gray-800 transition transform hover:scale-125 duration-500">
                                    <i class='bx bxs-binoculars'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- ------End Brands Section-------- -->

        </main>


        <!-- ------Subscription Section----------- -->
        <section class="bg-gray-700">
            <div class="max-w-6xl mx-auto py-10 md:pt-20 md:pb-10 px-3 sm:px-6 lg:px-1">
                <div class="text-gray-100 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-2 mb-8 md:pr-6">
                        <div class="mb-2">
                            <h1 class="text-3xl md:text-2xl font-medium">Subscribe Now</h1>
                        </div>

                        <div class="mb-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Non accusantium possimus
                            </p>
                        </div>
                        <div class="flex items-center bg-gray-800 w-max rounded-sm">
                            <input type="text" class="bg-gray-800 p-2 w-full" placeholder="example@gmail.com">
                            <a href="" class="p-2 text-xl inline-block">
                                <i class='bx bx-mail-send'></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-2 md:pl-6">
                        <div class="mb-2">
                            <h1 class="text-3xl md:text-2xl font-medium">Social Links</h1>
                        </div>

                        <div class="mb-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Non accusantium possimus
                            </p>
                        </div>

                        <div class="space-x-4">
                            <a href=""
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-blue-500">
                                <i class='bx bxl-facebook p-2'></i>
                            </a>
                            <a href=""
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-pink-900">
                                <i class='bx bxl-instagram p-2'></i>
                            </a>
                            <a href=""
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-blue-600">
                                <i class='bx bxl-twitter p-2'></i>
                            </a>
                            <a href=""
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-green-700">
                                <i class='bx bxl-whatsapp p-2'></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ------End Subscription Section----------- -->

        <!-- -----footer section-------- -->
        <section class="bg-gray-800">
            <div class="max-w-6xl mx-auto py-10 md:pt-20 md:pb-3 px-3 sm:px-6 lg:px-1">
                <div class="grid grid-cols-1 md:grid-cols-2 text-gray-100 mb-10">
                    <div class=" p-2 mb-8 md:pr-6">
                        <div class="flex items-center justify-center md:justify-start">
                            <svg class="w-40 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                style="fill:rgb(238, 238, 238);transform:;-ms-filter:">
                                <path
                                    d="M20.205,16.392c-2.469,3.289-7.741,2.179-11.122,2.338 c0,0-0.599,0.034-1.201,0.133c0,0,0.228-0.097,0.519-0.198c2.374-0.821,3.496-0.986,4.939-1.727c2.71-1.388,5.408-4.413,5.957-7.555 c-1.032,3.022-4.17,5.623-7.027,6.679c-1.955,0.722-5.492,1.424-5.493,1.424c0.002,0.002-0.141-0.074-0.143-0.076 c-2.405-1.17-2.475-6.38,1.894-8.059c1.916-0.736,3.747-0.332,5.818-0.825c2.208-0.525,4.766-2.18,5.805-4.344 C21.316,7.64,22.716,13.048,20.205,16.392z M20.247,3.112c-0.293,0.698-0.652,1.327-1.065,1.89 c-1.819-1.867-4.359-3.031-7.167-3.031C6.492,1.971,2,6.463,2,11.985c0,2.895,1.235,5.505,3.205,7.334l0.22,0.194 c-0.366-0.298-0.423-0.836-0.126-1.203c0.299-0.367,0.837-0.423,1.203-0.126c0.367,0.298,0.424,0.837,0.126,1.204 c-0.296,0.367-0.835,0.423-1.202,0.126l0.149,0.132C7.317,21.114,9.563,22,12.015,22c5.278,0,9.613-4.108,9.984-9.292 C22.273,10.169,21.523,6.945,20.247,3.112">
                                </path>
                            </svg>
                            <h1 class="text-5xl font-semibold">Shoeping</h1>
                        </div>

                    </div>
                    <div class="flex justify-between p-2 md:pl-6">
                        <div class="">
                            <div class="mb-2">
                                <h1 class="text-3xl font-medium">Quick Links</h1>
                            </div>
                            <div>
                                <ul>
                                    <li><a href="" class="p-1 mb-1 inline-block">Home</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block">Shop</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block">Featured</a></li>
                                    <li><a href="" class="p-1 mb-1 inline-block">Contact</a></li>
                                    <li><a href="" class="p-1 mb-1 inline-block">New</a></li>

                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="mb-2">
                                <h1 class="text-3xl font-medium">Support</h1>
                            </div>
                            <div>
                                <ul>
                                    <li><a href="" class="p-1 mb-1 inline-block">Warrenty</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block">Returs</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block">FAQ's</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="max-w-6xl mx-auto bg-gray-100 h-px">
                </div>

                <div class="flex flex-col items-center justify-center mt-10 text-gray-100 text-sm">
                    <span class="p-2 ">&copy; 2020 Shoeping || All Rights Reserved</span>
                    <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                </div>
            </div>
        </section>
        <!-- -----End footer section-------- -->


    </div>
    <!-- ---end full content wrapper--- -->


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>