<div class="col-12">
    <div class="pagination d-flex justify-content-center mt-5">
        @if ($foods->onFirstPage())
            <a class="disabled rounded " style="cursor: pointer;">&laquo;</a>
        @else
            <a href="{{ $foods->previousPageUrl() }}" class="rounded">&laquo;</a>
        @endif
        @for ($i = 1; $i <= $foods->lastPage(); $i++)
            @if ($i == $foods->currentPage())
                <a href="{{ $foods->url($i) }}" class="active rounded">{{ $i }}</a>
            @else
                <a href="{{ $foods->url($i) }}" class="rounded">{{ $i }}</a>
            @endif
        @endfor
        @if ($foods->onLastPage())
            <a class="disabled rounded" style="cursor: pointer;">&raquo;</a>
        @else
            <a href="{{ $foods->nextPageUrl() }}" class="rounded">&raquo;</a>
        @endif
    </div>
</div>
