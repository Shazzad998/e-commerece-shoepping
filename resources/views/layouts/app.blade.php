<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/dist/css/iziToast.min.css') }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @livewireStyles
</head>

<body class=" font-cus">

    <!-- ---full content wrapper--- -->
    <div>

        <!-- ---nav--- -->

        <nav class="bg-gray-200 dark:bg-gray-900  w-full fixed top-0 z-30 shadow-sm">
            <div class="max-w-6xl mx-auto px-3">
                <div class="flex justify-between text-gray-800 dark:text-gray-100 py-2">
                    <div class="hidden md:flex items-center">
                        <a href="{{ route('home') }}"
                            class="py-3 font-bold text-xl md:text-2xl hover:text-gray-600 transition duration-300">LOGO</a>
                    </div>

                    <div class="hidden md:flex space-x-4 items-center font-medium">
                        <a href="{{ route('home') }}" class="px-2 py-3 hover:text-gray-600 transition duration-300">Home</a>
                        <a href="" class="px-2 py-3 hover:text-gray-600 transition duration-300">About</a>
                        <a href="{{ route('contact') }}" class="px-2 py-3 hover:text-gray-600 transition duration-300">Contact</a>
                        <a href="{{ route('shop') }}" class="px-2 py-3 hover:text-gray-600 transition duration-300">Shop</a>
                        <a href="" class="px-2 py-3 hover:text-gray-600 transition duration-300">FAQ</a>
                    </div>

                    <div class="hidden md:flex space-x-4 items-center">

                        <div class="flex items-center space-x-2">
                            <!-- <input type="text" class="p-1 focus:outline-none"> -->
                            <a href="#" class="py-3 hover:text-gray-600 transition duration-300"><i
                                    class='bx bx-search'></i></a>
                        </div>

                        <div>
                            @livewire('wishlist-count-component')
                        </div>

                        <div>
                            @livewire('cart-count-component')
                        </div>
 
                        @auth
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button" class="user-button flex items-center justify-center w-full rounded-md  px-4 py-2 text-sm font-medium dark:text-gray-50  dark:hover:bg-gray-500 focus:outline-none " id="options-menu">
                                    <svg width="20" fill="currentColor" height="20" class="text-gray-800 dark:text-gray-100" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1523 1339q-22-155-87.5-257.5t-184.5-118.5q-67 74-159.5 115.5t-195.5 41.5-195.5-41.5-159.5-115.5q-119 16-184.5 118.5t-87.5 257.5q106 150 271 237.5t356 87.5 356-87.5 271-237.5zm-243-699q0-159-112.5-271.5t-271.5-112.5-271.5 112.5-112.5 271.5 112.5 271.5 271.5 112.5 271.5-112.5 112.5-271.5zm512 256q0 182-71 347.5t-190.5 286-285.5 191.5-349 71q-182 0-348-71t-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="user-menu hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5">
                                <div class="py-1 " role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    @if (Auth::user()->is_admin)
                                    <a href="{{ route('admin.dashboard.index') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
                                        <span class="flex flex-col">
                                            <span>
                                                Dashboard
                                            </span>
                                        </span>
                                    </a>


                                    @endif
                                    <a href="{{ route('profile') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
                                        <span class="flex flex-col">
                                            <span>
                                                Profile
                                            </span>
                                        </span>
                                    </a>

                                    <a href="{{ route('my_orders') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
                                        <span class="flex flex-col">
                                            <span>
                                                My Orders
                                            </span>
                                        </span>
                                    </a>

                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <span>
                                            Logout
                                        </span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        @else   
                        <a href="{{ route('login') }}"
                            class="px-3 hover:bg-gray-600 rounded-sm py-1 border border-gray-900 dark:border-gray-100 font-semibold text-gray-900 dark:text-gray-100 transition duration-300">
                            Login</a>

                        <a href="{{ route('register') }}"
                        class="px-3 hover:bg-gray-600 rounded-sm py-1 bg-gray-900 dark:bg-gray-100 font-semibold text-gray-100   dark:text-gray-800 transition duration-300">
                        Register</a>
                        @endauth        
                        
                    </div>

                    <div class="md:hidden flex items-center text-3xl mr-3">
                        <button class="mobile-menu-button">
                            <i class='bx bx-menu'></i>
                        </button>

                    </div>

                    <div class="md:hidden flex w-full">
                        <input type="text" class="p-1 appearance-none border-none outline-none w-full dark:bg-gray-800 dark:text-gray-100">
                        <a href="#" class="py-2 px-3 text-gray-100 hover:bg-gray-600 bg-gray-900"><i
                                class='bx bx-search'></i></a>
                    </div>
                </div>

            </div>

            <!-- -----mobile menu----- -->

            <div class="hidden mobile-menu md:hidden p-2 text-gray-100">
                <a href="{{ route('home') }}" class="block text-center font-medium py-2 hover:bg-gray-400">Home</a>
                <a href="" class="block text-center font-medium py-2 hover:bg-gray-400">About</a>
                <a href="{{ route('shop') }}" class="block text-center font-medium py-2 hover:bg-gray-400">Shop</a>
                <a href="{{ route('contact') }}" class="block text-center font-medium py-2 hover:bg-gray-400">Contact</a>

            </div>


            <!-- -----end mobile menu----- -->
        </nav>

        <div class="py-8 bg-gray-300"></div>

        <!-- ---end nav--- -->

        <main>

            {{ $slot }}
        </main>

        <!-- ------Subscription Section----------- -->
        <section class="bg-gray-800">
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
                        <div class="flex items-center bg-gray-900 w-max rounded-sm shadow-2xl">
                            <input type="text" class="bg-gray-900 p-2 w-full" placeholder="example@gmail.com">
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
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-blue-500 shadow-xl">
                                <i class='bx bxl-facebook p-2'></i>
                            </a>
                            <a href=""
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-pink-900 shadow-xl">
                                <i class='bx bxl-instagram p-2'></i>
                            </a>
                            <a href=""
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-blue-600 shadow-xl">
                                <i class='bx bxl-twitter p-2'></i>
                            </a>
                            <a href=""
                                class="bg-gray-900 inline-block rounded-full transition duration-500 text-2xl overflow-hidden hover:bg-green-700 shadow-xl">
                                <i class='bx bxl-whatsapp p-2'></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ------End Subscription Section----------- -->

        <!-- -----footer section-------- -->
        <section class="bg-gray-900">
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
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">Home</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">Shop</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">Featured</a></li>
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">Contact</a></li>
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">New</a></li>

                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="mb-2">
                                <h1 class="text-3xl font-medium">Support</h1>
                            </div>
                            <div>
                                <ul>
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">Warrenty</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">Returs</a> </li>
                                    <li><a href="" class="p-1 mb-1 inline-block transition-all duration-200 hover:translate-x-1 hover:text-gray-300">FAQ's</a></li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('assets/modules/izitoast/dist/js/iziToast.min.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>


    @stack('scripts')
    @livewireScripts
</body>

</html>




