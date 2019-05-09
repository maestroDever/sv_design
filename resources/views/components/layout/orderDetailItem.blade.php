<div class="sm:h-16 sm:flex sm:flex-row sm:items-center border-b">
    <div class="w-full sm:w-1/2 py-2 sm:flex sm:items-center">
        <div class="w-full sm:w-16 sm:flex-shrink-0 sm:mr-4">
            {{ $slot }}
        </div>
        <div class="py-2 sm:py-0 text-lg font-bold sm:text-base sm:font-normal truncate">
            {{ $title }}<br></div>
    </div>
    <div class="flex sm:w-1/2">
        <div class="w-1/3 sm:py-2 sm:text-right">
            <div class="sm:hidden mb-1 text-sm text-slate">
                {{ __('Price') }}</div>
            &euro;&nbsp;{{ $price }}
        </div>
        <div class="w-1/3 sm:py-2 text-center">
            <div class="sm:hidden mb-1 text-sm text-slate">
                {{ __('Number') }}</div>
            {{ $amount }}
        </div>
        <div class="w-1/3 sm:py-2 text-right">
            <div class="sm:hidden mb-1 text-sm text-slate">
                {{ __('Total') }}</div>
            &euro;&nbsp;{{ $total }}
        </div>
    </div>
</div>