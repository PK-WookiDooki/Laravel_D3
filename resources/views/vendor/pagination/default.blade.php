@if ($paginator->hasPages())
    <nav>
        <ul class="pagination flex items-center gap-2 justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled w-[30px] h-[30px] text-center leading-[30px] border border-black rounded" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="w-[30px] h-[30px] text-center leading-[30px] border border-black rounded hover:bg-black hover:text-white duration-200">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled w-[30px] h-[30px] text-center leading-[30px] border border-black rounded hover:bg-black hover:text-white duration-200" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="w-[30px] h-[30px] text-center leading-[30px] border border-black rounded hover:bg-black hover:text-white duration-200 cursor-pointer active:text-white active:bg-black" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a class="w-[30px] h-[30px] block text-center leading-[30px] border border-black rounded hover:bg-black hover:text-white duration-200 cursor-pointer" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="w-[30px] h-[30px] text-center leading-[30px] border border-black rounded hover:bg-black hover:text-white duration-200 active:bg-black active:text-white cursor-pointer">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled w-[30px] h-[30px] text-center leading-[30px] border border-black rounded hover:bg-black hover:text-white duration-200 active:bg-black active:text-white cursor-pointer" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
