
@if ($paginator->hasPages())

    <nav aria-label="Page navigation example">
        <ul class="pagination">

                @if ($paginator->onFirstPage())
                    <li class="page-item disabled p-0 m-0">
                        <a class="page-link border-0 p-0 m-0" href="#" aria-label="Previous">
                            <img src="images/pagleft.png" class="img-fluid h-100 p-0 m-0">
                        </a>
                    </li>
                @else
                    <li class="page-item p-0 m-0">
                        <a class="page-link border-0 p-0 m-0" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                            <img src="images/pagleft.png" class="img-fluid h-100 p-0 m-0">
                        </a>
                    </li>
                @endif

                @foreach ($elements as $element)

                    @if (is_string($element))
                            <li class="page-item p-0 m-0"><a class="page-link border-0 p-0 m-0" href="#">{{ $element }}</a></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item p-0 m-0">
                                    <a class="page-link border-0 p-0 m-0">
                                        <img src="images/page{{ $page }}a.png" class="img-fluid h-100 p-0 m-0">
{{--                                        <span class="display-3 px-2">{{ $page }}</span>--}}
                                    </a>
                                </li>
                            @else
                                <li class="page-item p-0 m-0">
                                    <a class="page-link border-0 p-0 m-0" href="{{ $url }}">
                                        <img src="images/page{{ $page }}.png" class="img-fluid h-100 p-0 m-0">
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item p-0 m-0">
                        <a class="page-link border-0 p-0 m-0" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                            <img src="images/pagright.png" class="img-fluid h-100 p-0 m-0">
                        </a>
                    </li>
                @else
                    <li class="page-item disabled p-0 m-0">
                        <a class="page-link border-0 p-0 m-0" href="#" aria-label="Next">
                            <img src="images/pagright.png" class="img-fluid h-100 p-0 m-0">
                        </a>
                    </li>
                @endif
        </ul>
    </nav>
@endif
