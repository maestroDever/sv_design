<div class="category-carousel relative">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            {{ $slot }}
        </div>
        <div class="swiper-button-next flex bg-white rounded-full shadow p-2">@svg('icons.arrow-right-rounded', ['class' => 'w-5 h-5 ml-4'])</div>
    </div>
    <div class="absolute inset-y-0 left-0 w-4 z-10 gradient-grey-transparent-r"></div>
    <div class="absolute inset-y-0 right-0 w-4 z-10 gradient-transparent-grey-r"></div>
</div>