<section class="px-8 mb-12">
    <div class="bg-white rounded-lg shadow p-4 md:p-8">
        <div class="flex justify-between items-center border-b pb-4 mb-8">
            <div class="uppercase text-xl leading-none">
                @if(!empty($intro))
                {{ $intro }}
                @endif
                @if(!empty($introBold))
                <strong>{{ $introBold }}</strong>
                @endif
            </div>
            <div class="flex justify-center text-xs font-bold uppercase">
                @if(!empty($url))
                <a href="{{ $url }}">
                    {{ $linkTitle ?? 'Dashboard' }} @svg($linkIcon ?? 'icons.home', ['class' => 'w-4 h-4 fill-current ml-3'])
                </a>
                @else
                {{ $linkTitle ?? 'Dashboard' }} @svg($linkIcon ?? 'icons.home', ['class' => 'w-4 h-4 fill-current ml-3'])
                @endif
            </div>
        </div>
        <div class="border-b">
            {{ $slot }}
        </div>
    </div>
</section>