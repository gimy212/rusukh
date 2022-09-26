@if ($paginator->hasPages())
    <div style="text-align: center;padding-top: 25px;" class="flex items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span style="border-radius: 10px;padding: -9px;zoom: 85%;" class="rounded-l rounded-sm border border-brand-light px-3 py-2 cursor-not-allowed no-underline">Previous</span>
        @else
            <a
                class="rounded-l rounded-sm border-t border-b border-l border-brand-light px-3 py-2 text-brand-dark hover:bg-brand-light no-underline"
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
                <span style="text-decoration: none;" class="border-t border-b border-l border-brand-light px-3 py-2 cursor-not-allowed no-underline">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span style="text-decoration: none;" class="border-t border-b border-l border-brand-light px-3 py-2 bg-brand-light no-underline">{{ $page }}</span>
                    @else
                        <a style="text-decoration: none;" class="border-t border-b border-l border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a style="border-radius: 10px;padding: -9px;zoom: 85%;text-decoration: none;" class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
        @else
            <span class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline cursor-not-allowed">&raquo;</span>
        @endif
    </div>
@endif
