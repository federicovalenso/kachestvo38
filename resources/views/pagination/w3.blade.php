@if ($paginator->hasPages())
    <div class="w3-center">
        <div class="w3-bar" role="navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="w3-button w3-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">&laquo;</a>
            @else
                <a class="w3-button w3-hover-purple" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="w3-button w3-disabled" aria-disabled="true" >{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="w3-button w3-green" aria-current="page">{{ $page }}</a>
                        @else
                            <a class="w3-button w3-hover-red" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="w3-button w3-hover-purple" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            @else
                <a class="w3-button w3-disabled" aria-disabled="true" aria-label="@lang('pagination.next')" aria-hidden="true">&rsaquo;</a>
            @endif
        </div>
    </div>
@endif
