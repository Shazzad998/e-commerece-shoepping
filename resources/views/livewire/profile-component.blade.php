<div>
    

    <section class="bg-gray-200 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto px-2 ">

                <div class="bg-white dark:bg-gray-800">
                    <div class="container mx-auto bg-white dark:bg-gray-800 rounded-sm">
                        <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 bg-white dark:bg-gray-800">
                            <div class="flex w-11/12 mx-auto items-center">
                                <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Profile</p>
                                <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto">
                            <div class="xl:w-9/12 w-11/12 mx-auto">

                                <div class="mt-16 w-32 h-32">
                                    <img src="https://cdn.tuk.dev/assets/webapp/forms/form_layouts/form2.jpg" alt="" class="z-0 object-cover w-full h-full rounded-full shadow" />
                                </div>

                                <div class="mt-8 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                    <label for="name" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Name</label>
                                    <input tabindex="0" type="text" id="name" name="name" wire:model="name" class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded-sm text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="@example" />
                                </div>
                                <div class="mt-8 flex flex-col xl:w-3/5 lg:w-1/2 md:w-1/2 w-full">
                                        <label for="email" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                                        <div class="border border-gray-300 dark:border-gray-700 shadow-sm rounded-sm flex">
                                            <div tabindex="0" class="focus:outline-none px-4 py-3 dark:text-gray-100 flex items-center border-r border-gray-300 dark:border-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <rect x="3" y="5" width="18" height="14" rx="2" />
                                                    <polyline points="3 7 12 13 21 7" />
                                                </svg>
                                            </div>
                                            <input tabindex="0" type="text" id="email" name="email" wire:model="email" class="pl-3 py-3 w-full text-sm focus:outline-none border-none placeholder-gray-500 rounded-sm bg-transparent text-gray-600 dark:text-gray-400" placeholder="example@gmail.com" />
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user()->address)
                    <form wire:submit.prevent="update">
                    @else
                    <form wire:submit.prevent="create">
                    @endif
                    
                        <div class="container mx-auto bg-white dark:bg-gray-800 mt-10 rounded-sm">
                            <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5">
                                <div class="flex w-11/12 mx-auto items-center">
                                    <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Personal Information</p>
                                    <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto pt-16">
                                <div class="xl:w-9/12 w-11/12 mx-auto">
                                    <form class=" mx-auto">
                                        <div class="lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="firstname" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">First Name</label>
                                            <input tabindex="0" type="text" id="firstname" name="firstname" wire:model="firstname" class="border border-gray-300  dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded-sm text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" />
                                            @error('firstname')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="lastname" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Last Name</label>
                                            <input tabindex="0" type="text" id="lastname" name="lastname" wire:model="lastname" class="border border-gray-300  dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded-sm text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" />
                                            @error('lastname')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="phone" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Phone Number</label>
                                            <input tabindex="0" type="text" id="phone" name="phone" wire:model="phone" class="border border-gray-300  dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded-sm text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" />
                                            @error('phone')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="street" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Street Address</label>
                                            <input tabindex="0" type="text" id="street" name="street" wire:model="street" class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded-sm bg-transparent text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" />
                                            @error('street')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="city" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">City</label>
                                            <input tabindex="0" type="text" id="city" name="city" wire:model="city" class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded-sm bg-transparent text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" />
                                            @error('city')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="state" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">State/Province</label>
                                            <input tabindex="0" type="text" id="state" name="state" wire:model="state" class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded-sm text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"  />
                                            @error('state')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <div class="flex items-center pb-2">
                                                <label for="postal_code" class="text-sm font-bold text-gray-800 dark:text-gray-100">Postal Code</label>
                                                <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                        <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" fill="currentColor" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <input tabindex="0" type="text" name="postal_code" wire:model="postal_code" id="postal_code" class="bg-transparent border border-gray-700 pl-3 py-3 shadow-sm rounded-sm text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400" />
                                            @error('postal_code')
                                                <div class="flex justify-between items-center pt-1 text-red-700">
                                                    <p class="text-xs">{{ $message }}</p>
                                                </div>
                                            @enderror
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            
                        <div class="container mx-auto w-11/12">
                            <div class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end">
                                <button role="button" type="submit" wire:click="
                                @if (Auth::user()->address)
                                    update
                                @else
                                    store
                                @endif
                                " class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded-sm text-white px-8 py-2 text-sm" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </section>


    @if (session('success'))
    {!! session('success') !!}
    @endif

    @if (session('error'))
    {!! session('error') !!}
    @endif

</div>
