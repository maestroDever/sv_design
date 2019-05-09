<div class="md:flex my-8 -mx-4">
    <div class="w-full md:w-1/3 px-4 mb-2">
        <div class="flex items-center uppercase font-bold">
            @svg('icons.arrow-right-rounded', ['class' => 'w-4 h-4 fill-current mr-2']) {{ $title }}
        </div>
    </div>
    <div class="w-full md:w-2/3 px-4">
        <div class="content">
            {{ $slot }}
        </div>
    </div>
</div>