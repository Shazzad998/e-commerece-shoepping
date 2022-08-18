<div>
    <section class="bg-gray-200 py-8">
        <div class="max-w-6xl mx-auto py-10 px-4">
            <div class=" flex items-center justify-center  my-6">
                <h1 class=" text-4xl">My Orders</h1>
            </div>
            <div class="container mx-auto px-4">
                <div class="">
                    <div class="-mx-4 sm:-mx-8 px-4  py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-sm overflow-hidden">
                            
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-6 border-b-2  bg-gray-700 text-gray-100 text-left text-xs font-semibold  uppercase tracking-wider">
                                            Order Id
                                        </th>
                                        <th
                                            class="px-5 py-6 border-b-2  bg-gray-700 text-gray-100 text-left text-xs font-semibold  uppercase tracking-wider">
                                            Total
                                        </th>
                                        <th
                                            class="px-5 py-6 border-b-2  bg-gray-700 text-gray-100 text-left text-xs font-semibold  uppercase tracking-wider">
                                            Status
                                        </th>

                                        <th
                                            class="px-5 py-6 border-b-2  bg-gray-700 text-gray-100 text-left text-xs font-semibold  uppercase tracking-wider">
                                            Ordered At
                                        </th>

                                        <th
                                            class="px-5 py-6 border-b-2  bg-gray-700 text-gray-100 text-left text-xs font-semibold  uppercase tracking-wider">
                                            Received At
                                        </th>

                                        <th
                                            class="px-5 py-6 border-b-2  bg-gray-700 text-gray-100 text-center text-xs font-semibold  uppercase tracking-wider">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($my_orders as $my_order)
                                    <tr>
                                        <td class="px-5 py-5 border-b  bg-gray-100 text-sm">
                                            <div class="flex items-center">
                                                #{{ $my_order->id }}
                                            </div>
                                        </td>
                                        
                                        <td class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                ${{ $my_order->total }}
                                            </p>
                                        </td>

                                        
                                        <td class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-gray-600 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0  @if ($my_order->status == 'ordered')
                                                                                bg-yellow-300 
                                                                                @elseif ($my_order->status == 'canceled') bg-red-300 
                                                                                @else 
                                                                                bg-green-300 
                                                                            @endif 
                                                         opacity-50 rounded-full"></span>
                                                <span class="relative">{{ $my_order->status }}</span>
                                            </span>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $my_order->created_at }}
                                            </p>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $my_order->updated_at }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-gray-100 text-sm">
                                            <a href="" class=" flex items-center justify-center text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                                  </svg>
                                            </a>

                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $my_orders->links('layouts.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
