<div class="mb-8">
    <div class="flex items-center font-bold text-sm">
        @svg('icons.arrow-right-rounded', ['class' => 'w-4 h-4 fill-current mr-2']) {{ $title }}
    </div>
    <div class="my-2">
        {{ $slot }}
    </div>
    <div class="flex justify-between text-sm">
        <div class="text-gray-light">{{ $date }}</div>
        <div class="font-bold">&euro;&nbsp;{{ $budget }}</div>
    </div>
</div>