


{{--<!-- Page Nav -->--}}
{{--<div class="page_nav_container mt-5">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col">--}}
                {{--<div class="page_nav">--}}
                    {{--@if ($paginator->hasPages())--}}
                        {{--<ul class="d-flex flex-row align-items-start justify-content-center">--}}
                            {{-- Previous Page Link --}}
                            {{--@if ($paginator->onFirstPage())--}}
                                {{--<li class="disabled"><a href="#"><span>&laquo;</span></a></li>--}}
                            {{--@else--}}
                                {{--<li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>--}}
                            {{--@endif--}}

                            {{-- Pagination Elements --}}
                            {{--@foreach ($elements as $element)--}}
                                {{-- "Three Dots" Separator --}}
                                {{--@if (is_string($element))--}}
                                    {{--<li class="disabled"><a href="#"><span>{{ $element }}</span></a></li>--}}
                                {{--@endif--}}

                                {{-- Array Of Links --}}
                                {{--@if (is_array($element))--}}
                                    {{--@foreach ($element as $page => $url)--}}
                                        {{--@if ($page == $paginator->currentPage())--}}
                                            {{--<li class="active"><a href="#"><span>{{ $page }}.</span></a></li>--}}
                                        {{--@else--}}
                                            {{--<li><a href="{{ $url }}">{{ $page }}.</a></li>--}}
                                        {{--@endif--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}
                            {{--@endforeach--}}

                            {{-- Next Page Link --}}
                            {{--@if ($paginator->hasMorePages())--}}
                                {{--<li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>--}}
                            {{--@else--}}
                                {{--<li class="disabled"><a href="#"><span>&raquo;</span></a></li>--}}
                            {{--@endif--}}
                        {{--</ul>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<div class="stuffpost_paginatinonarea wow slideInLeft">
    @if ($paginator->hasPages())

    <ul class="newstuff_pagnav">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a href="#"><span>&laquo;</span></a></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><a href="#"><span>{{ $element }}</span></a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active_page"><a href="#"><span>{{ $page }}.</span></a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}.</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><a href="#"><span>&raquo;</span></a></li>
        @endif

    </ul>
    @endif

</div>