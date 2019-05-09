@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Overview'),
'introBold' => __('Orders'),
'linkTitle' => __('Orders'),
'linkIcon' => 'icons.package',
])

<div class="md:flex md:flex-wrap pb-8 -m-4">
    <div class="w-full lg:w-1/2 p-4">
        <div class="uppercase font-bold mb-2">{{ __('Orders') }}</div>
        <div class="content">
            <p>Jouw leefstijlscore is redelijk, maar je kans op hart- en vaatziekten is vooralsnog laag. 90% van alle hart- en vaatziektes komt door een slechte leefstijl. Het is voor jou dus ontzettend belangrijk om je leefstijl te verbeteren. Dit zal je helpen toekomstige problemen te voorkomen.</p>
        </div>
    </div>
    <div class="lg:flex lg:flex-col lg:items-center w-full lg:w-1/2 p-4">
        <div class="uppercase font-bold mb-2">{{ __('Current budget') }}</div>
        <div class="text-4xl leading-none text-green">&euro;&nbsp;219,00</div>
    </div>
</div>

<div class="mb-8"></div>

<div class="hidden sm:flex sm:flex-row border-b font-bold text-sm py-4">
    <div class="w-1/6 py-2">
        {{ __('Order number') }}
    </div>
    <div class="w-1/3 py-2">
        {{ __('Date') }}
    </div>
    <div class="w-1/6 py-2">
        {{ __('Amount') }}
    </div>
    <div class="flex-1 py-2">
        {{ __('Status') }}
    </div>
    <div class="w-4 py-2">
        &nbsp;
    </div>
</div>

@component('components.layout.orderItem', [
'url' => '#',
'orderNumber' => '468222065',
'date' => '2018-10-29 10:41',
'amount' => '8,00',
])
@endcomponent

@component('components.layout.orderItem', [
'url' => '#',
'orderNumber' => '1234',
'date' => '2018-10-29 10:41',
'amount' => '25,00',
])
@endcomponent


<div class="mb-8"></div>

@endcomponent

@endcomponent