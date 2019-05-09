@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Overview'),
'introBold' => __('Profile'),
'linkTitle' => __('Data'),
'linkIcon' => 'icons.user-profile',
])

<div class="border-b pb-8 mb-8">
    <div class="flex -mx-4">
        <div class="w-64 px-4">
            <div class="flex justify-center items-center bg-gray-200 rounded-lg text-gray-600 font-bold text-4xl h-48">
                MG
            </div>
        </div>
        <div class="flex-1 px-4">
            <h3 class="mb-2">{{ __('Personal details') }}</h3>
            <div class="mb-4">
                <div>Mark de Groot</div>
                <div>Man</div>
            </div>
            @component('components.layout.btnDefault', [
            'url' => '#',
            'text' => __('Modify')
            ])
            @endcomponent
        </div>
    </div>
</div>

<div class="border-b pb-8 mb-8">
    <div class="flex -mx-4">
        <div class="w-64 px-4">
            <figure class="image aspect-ratio-4/3">
                <img class="w-full rounded-lg" src="https://via.placeholder.com/400x300" alt="">
            </figure>
        </div>
        <div class="flex-1 px-4">
            <h3 class="mb-2">{{ __('Address details') }}</h3>
            <div class="mb-4">
                <div>[Street]</div>
                <div>[zip] [city]</div>
                <div>[country]</div>
            </div>
            @component('components.layout.btnDefault', [
            'url' => '#',
            'text' => __('Modify')
            ])
            @endcomponent
        </div>
    </div>
</div>

<div class="pb-8">
    <div class="flex -mx-4">
        <div class="w-64 px-4">
            <figure class="image aspect-ratio-4/3">
                <img class="w-full rounded-lg" src="https://via.placeholder.com/400x300" alt="">
            </figure>
        </div>
        <div class="flex-1 px-4">
            <h3 class="mb-2">{{ __('Contact details') }}</h3>
            <div class="mb-4">
                <div>[phone]</div>
                <div>[email address]</div>
            </div>
            @component('components.layout.btnDefault', [
            'url' => '#',
            'text' => __('Modify')
            ])
            @endcomponent
        </div>
    </div>
</div>

@endcomponent

@endcomponent