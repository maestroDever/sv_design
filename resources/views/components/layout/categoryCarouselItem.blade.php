<div class="swiper-slide pr-6">
    <a href="{{ $url ?? '#' }}" class="flex {{ $categoryColor }} h-64 justify-center items-center rounded-lg overflow-hidden shadow">
        <div class="flex flex-col items-center text-white uppercase font-bold p-4">
            @svg($categoryIcon, ['class' => 'w-16 h-16 fill-current mb-4'])
            <div class="font-comfortaa">{{ $category }}</div>
        </div>
    </a>
</div>