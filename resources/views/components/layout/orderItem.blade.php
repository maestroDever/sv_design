<div class="sm:flex sm:flex-row sm:items-center border-b text-sm py-4">
    <div class="w-full sm:w-1/6 py-2 truncate">
        <div class="sm:hidden mb-1 font-bold">{{ __('Order number') }}</div>
        <a href="{{ $url }}" title="{{ __('View details') }}" class="hover:underline">
            {{ $orderNumber }}
            @svg('icons.search', ['class' => 'sm:hidden w-4 h-4 align-middle fill-current text-gray-600 hover:text-blue ml-2'])
        </a>
    </div>
    <div class="w-full sm:w-1/3 py-2 truncate">
        <div class="sm:hidden mb-1 font-bold">{{ __('Date') }}</div>
        <span title="6 months ago">{{ $date }}</span>
    </div>
    <div class="w-full sm:w-1/6 py-2 truncate">
        <div class="sm:hidden mb-1 font-bold">{{ __('Amount') }}</div>
        &euro;&nbsp;{{ $amount }}
    </div>
    <div class="w-full sm:flex-1 py-2 truncate">
        <div class="sm:hidden mb-1 font-bold">{{ __('Status') }}</div>
        @component('components.layout.orderStatusBadge')@endcomponent
    </div>
    <div class="hidden sm:block w-full sm:w-4 py-2 truncate text-right">
        <a class="flex justify-center" href="{{ $url }}" title="Bekijk in detail">
            @svg('icons.search', ['class' => 'w-4 h-4 fill-current'])
        </a>
    </div>
</div>