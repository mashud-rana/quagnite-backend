<!-- resources/views/components/pagination.blade.php -->
@props(['paginator'])

@php
    $prevClass = $paginator->onFirstPage() ? 'disabled' : '';
    $nextClass = $paginator->hasMorePages() ? '' : 'disabled';
@endphp

<div class="ic-pagination">
    <ul>
        <li class="{{ $prevClass }}">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link" aria-label="Previous">
                <i class="ri-arrow-left-line"></i>
            </a>
        </li>

        @foreach ($paginator->render()->elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-link disabled">{{ $element }}</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="{{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    </li>
                @endforeach
            @endif
        @endforeach

        <li class="{{ $nextClass }}">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="Next">
                <i class="ri-arrow-right-line"></i>
            </a>
        </li>
    </ul>
</div>
