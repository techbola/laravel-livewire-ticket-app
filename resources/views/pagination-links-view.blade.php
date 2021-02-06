@if ($paginator->hasPages())
    <ul class="flex justify-between mt-6">
        <!-- Prev -->
        @if ($paginator->onFirstPage())
            <li class="w-16 px-2 py-1 text-center rounded border bg-gray-100">
                Prev
            </li>
        @else
            <li class="w-16 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" wire:click="previousPage">
                Prev
            </li>
        @endif

        <!-- Page numbers -->
        @foreach($elements as $element)
            <div class="flex">
                @if(is_array($element))
                    @foreach ($element as $page => $url)
                        @if($page == $paginator->currentPage())
                            <li class="w-10 px-2 py-1 text-center rounded border bg-blue-500 text-white">
                                {{ $page }}
                            </li>
                        @else
                            <li class="w-10 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" wire:click="gotoPage({{ $page }})">
                                {{ $page }}
                            </li>
                        @endif
                    @endforeach
                @endif
            </div>
        @endforeach

        <!-- Next -->
        @if ($paginator->hasMorePages())
            <li class="w-16 px-2 py-1 text-center rounded border shadow bg-white cursor-pointer" wire:click="nextPage">
                Next
            </li>
        @else
            <li class="w-16 px-2 py-1 text-center rounded border bg-gray-100">
                Next
            </li>
        @endif
    </ul>
@endif
