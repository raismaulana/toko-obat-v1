<!-- =========================================================================================
  Name: Toko Obat V1 Website
  Author: Muhammad Fauzan
  Author URL: http://fauzanishere.my.id
  Repository: https://github.com/fauzan121002/toko-obat-v1
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">@lang('pagination.previous')</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link">@lang('pagination.next')</span>
            </li>
        @endif
    </ul>
@endif
