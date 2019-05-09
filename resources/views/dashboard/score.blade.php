@component('layouts.back')

@component('components.layout.sectionWhite')

<div class="flex flex-col-reverse lg:flex-row pb-8 -mx-8">
    <div class="w-full lg:w-2/3 px-8">
        <h2 class="font-normal section-title mb-4">{{ __('High hart risk score')}}</h2>
        <div class="content mb-4 md:mb-8">
            <p>
                {{ __('High hart risk score description')}}
            </p>
        </div>
    </div>
    <div class="w-64 lg:w-1/3 mx-auto px-8">
        <div class="relative mb-4 lg:mb-0">
            @svg('icons.score-low', ['class' => 'svg-wait'])
            <div class="absolute inset-0 flex justify-center items-center">
                <h2 class="text-4xl text-red-500 text-center font-normal p-4">{{ __('Get in contact') }}</h2>
            </div>
        </div>
    </div>
</div>

@endcomponent

@endcomponent