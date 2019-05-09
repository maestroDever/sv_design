<section class="section-dashboard px-8 mb-6">
    <div class="flex justify-between pr-3">
        <div class="uppercase mb-4">{{ $title }}</div>
        @if(isset($url))
        <a href="{{ $url }}" class="uppercase mb-4">{{ __('View all') }}</a>
        @endif
    </div>
    {{ $slot }}
</section>