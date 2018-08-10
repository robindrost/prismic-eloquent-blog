@if ($paginator->hasPages())
    <div class="flex items-center justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="rounded-l rounded-sm border border-brand-light px-3 py-2 cursor-not-allowed no-underline -mr-px">&laquo;</span>
        @else
            <a
                class="rounded-l rounded-sm border-t border-b border-l border-brand-light px-3 py-2 text-grey-darker hover:text-grey-darkest no-underline -mr-px"
                href="{{ $paginator->previousPageUrl() }}"
                rel="prev"
            >
                &laquo;
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="border-t border-b border-l border-brand-light px-3 py-2 cursor-not-allowed no-underline">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="border-t border-b border-l border-brand-light px-3 py-2 bg-brand-light no-underline">{{ $page }}</span>
                    @else
                        <a class="border-t border-b border-l border-brand-light px-3 py-2 hover:bg-brand-light text-grey-darker no-underline" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:text-grey-darkest text-grey-darker no-underline" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            <span class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline cursor-not-allowed">&raquo;</span>
        @endif
    </div>
@endif
