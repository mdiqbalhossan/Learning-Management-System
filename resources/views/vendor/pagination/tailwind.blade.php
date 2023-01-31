@if ($paginator->hasPages())

<nav class="blog-page-navigation">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
        <li class="pagination-arrow"><a role="link" aria-disabled="true"><i class="fa fa-angle-double-left"></i></a>
        </li>
        @else
        <li class="pagination-arrow"><a href="{{ $paginator->previousPageUrl() }}"><i
                    class="fa fa-angle-double-left"></i></a></li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li><a class="active" href="#">{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li><a class="active" role="link" aria-disabled="true">{{ $page }}</a></li>

        @else
        <li><a href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="pagination-arrow"><a href="{{ $paginator->nextPageUrl() }}"><i
                    class="fa fa-angle-double-right"></i></a></li>
        @else
        <li class="pagination-arrow"><a role="link" aria-disabled="true"><i class="fa fa-angle-double-right"></i></a>
        </li>
        @endif
    </ul>
</nav>


@endif