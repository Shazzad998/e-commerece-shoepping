<div>
    @if ($paginator->hasPages())
    <div class="px-5 py-5 bg-gray-100 border-t flex flex-col xs:flex-row items-center xs:justify-between">
        <div class="inline-flex mt-2 xs:mt-0">

            @if ($paginator->onFirstPage())
                <button
                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l" disabled>
                Prev
                </button>
            @else
                <button
                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l" wire:click.prevent="previousPage" wire:key="navnext-{{ Str::random(10) }}">
                Prev
                </button>
                
            @endif
            

            @if ($paginator->hasMorePages())
                <button
                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r" wire:click.prevent="nextPage">
                Next
                </button>
            @else
                <button
                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r" disabled>
                Next
                </button>
            @endif
            
        </div>
    </div>
    @endif

</div>