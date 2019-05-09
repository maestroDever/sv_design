<div class="mb-10">
    <div class="max-w-xl">
        <div class="flex flex-col lg:flex-row -m-2 lg:-m-4">
            <div class="w-full lg:w-1/3 p-2 lg:p-4 content text-sm">
                @if(isset($title))
                <h3 class="font-bold mb-1">{{ $title }}</h3>
                @endif
                @if(isset($description))
                <div class="text-sm">
                    {{ $description }}
                </div>
                @endif
            </div>
            <div class="w-full lg:w-2/3 lg:-m-2 p-2 lg:p-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>