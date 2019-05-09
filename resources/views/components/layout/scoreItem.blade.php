<div class="w-full md:w-1/2 xl:w-1/3 p-4">
    <div class="flex flex-col text-sm">
        <a href="{{ $url ?? '#' }}" class="flex items-center truncate font-bold mb-2">
            @svg('icons.arrow-right-rounded', ['class' => 'w-3 h-3 flex-shrink-0 mr-2']) {{ $title }}
        </a>
        {{ $slot }}
    </div>
</div>