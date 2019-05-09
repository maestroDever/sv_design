<div class="swiper-slide pr-6">
    <div class="flex flex-col h-full bg-white rounded-lg overflow-hidden shadow">
        <a class="relative" href="{{ $url ?? '#' }}">
            <figure class="image aspect-ratio-16/9">
                {{ $slot }}
            </figure>
            <div class="absolute inset-0">
                <div class="flex justify-end text-white uppercase text-xs font-bold p-4">
                    {{ $category }} @svg($categoryIcon, ['class' => 'w-4 h-4 fill-current ml-1'])
                </div>
            </div>
        </a>
        <div class="flex-grow p-4">
            <div class="flex-grow">
                <h4 class="mb-2"><a href="#">{{ $title }}</a></h4>
                <div class="text-sm">
                    <p>{{ $description }}</p>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-between text-sm px-4 pb-4">
            @component('components.layout.btnDefault', [
            'url' => $url,
            'text' => __('Purchase'),
            ])
            @endcomponent
            <div class="uppercase">
                <span class="font-bold mr-1">{{ __('Price') }}</span> &euro;&nbsp;{{ $price }}
            </div>
        </div>
    </div>
</div>