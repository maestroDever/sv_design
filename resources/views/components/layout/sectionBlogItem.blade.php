<div class="{{ $class }} p-3">
    <div class="relative rounded-lg overflow-hidden shadow">
        <figure class="image aspect-ratio-square">
            {{ $slot }}
        </figure>
        <div class="flex flex-col absolute inset-0 text-white uppercase {{ $categoryColor }} p-4 lg:p-8">
            <div class="flex justify-between text-xs mb-2">
                <div>{{ $date }}</div>
                <div class="flex justify-end font-bold">
                    {{ $category }} @svg($categoryIcon, ['class' => 'w-4 h-4 fill-current ml-1'])
                </div>
            </div>
            <div class="flex items-center flex-grow mb-2">
                <h2 class="text-2xl">{{ $title }}</h2>
            </div>
            <div class="flex justify-between items-center text-xs -mx-2">
                <div class="flex-shrink-0 px-2">
                    @component('components.layout.btnWhite', [
                    'url' => $url,
                    'text' => __('Read'),
                    ])
                    @endcomponent
                </div>
                <div class="text-xs px-2">{{ __('Written by') }} <span class="font-bold">{{ $author }}</span></div>
            </div>
        </div>
    </div>
</div>