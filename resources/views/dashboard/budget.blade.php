@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Overview'),
'introBold' => __('Budget'),
'linkTitle' => __('Budget'),
'linkIcon' => 'icons.euro',
])

<div>
    <div class="lg:flex -m-4">
        <div class="w-full lg:w-1/2 p-4">
            <div class="uppercase font-bold mb-2">{{ __('Information budget') }}</div>
            <div class="content mb-4 md:mb-8">
                <p>
                    {{ __('Information budget description') }}
                </p>
            </div>
            @component('components.layout.btnDefault', [
            'url' => '#',
            'text' => __('To shop'),
            ])
            @endcomponent
        </div>
        <div class="w-full lg:w-1/2 p-4">
            <div class="uppercase font-bold mb-2">{{ __('Total budget') }}</div>
            @component('components.layout.budgetItem', [
            'title' => 'Politie budget',
            'date' => '12-03-2017 t/m 14-12-2018',
            'budget' => '95,00',
            ])

            Grafiek

            @endcomponent
            @component('components.layout.budgetItem', [
            'title' => 'Raet budget',
            'date' => '12-03-2017 t/m 14-12-2018',
            'budget' => '95,00',
            ])

            Grafiek

            @endcomponent
        </div>
    </div>
</div>

@endcomponent

@endcomponent