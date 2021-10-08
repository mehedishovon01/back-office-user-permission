<div class="d-block p-4 card-footer">
    <nav class="pagination-{{$style}} float-right" aria-label="Back-office System Pagination">
        <ul class="pagination">
            <li class="page-item @if ($data->appends(request()->query())->currentPage() == 1) disabled @endif">
                <a href="{{ $data->appends(request()->query())->url(1) }}" class="page-link"
                    aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

            @foreach(range(1, $data->appends(request()->query())->lastPage()) as $i)
            @if ($i >= $data->appends(request()->query())->currentPage() - 4 && $i <= $data->appends(request()->query())->currentPage() + 4)
                @if ($i == $data->appends(request()->query())->currentPage())
                    <li class="page-item active">
                        <a href="javascript:void(0);" class="page-link">{{ $i }}</a>
                    </li>
                @else
                    <li class="page-item">
                        <a href="{{ $data->appends(request()->query())->url($i) }}"
                            class="page-link">{{ $i }}</a>
                    </li>
                @endif
            @endif
            @endforeach

            <li class="page-item @if ($data->appends(request()->query())->lastPage() == $data->appends(request()->query())->currentPage()) disabled @endif">
                <a href="{{ $data->appends(request()->query())->url($data->lastPage()) }}" class="page-link"
                    aria-label="Next">
                    <span aria-hidden="true">»</span><span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
