<div class="flex w-full lg:w-1/2 p-4 md:p-8 -mx-4">
    <div class="w-1/2 px-4">
        <div class="relative">
            <figure class="image aspect-ratio-4/3">
                {{ $slot }}
            </figure>
            <div class="absolute inset-0">
                <div class="flex justify-end text-white uppercase text-xs font-bold p-4">
                    {{ $category }} @svg($categoryIcon, ['class' => 'w-4 h-4 fill-current ml-1'])
                </div>
            </div>
        </div>
    </div>
    <div class="w-1/2 px-4">
        <h3 class="mb-2">{{ $title }}</h3>
        <div class="content text-sm mb-4">
            <p>{{ $description }}</p>
        </div>
        <div class="flex items-center justify-between text-sm">
            <div class="uppercase">
                <span class="font-bold mr-1">{{ __('Price') }}</span> &euro;&nbsp;{{ $price }}
            </div>
            @component('components.layout.btnDefault', [
            'url' => '#',
            'text' => __('Purchase'),
            ])
            @endcomponent
        </div>
    </div>
</div>