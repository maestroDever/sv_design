@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Overview'),
'introBold' => __('Scores'),
'linkTitle' => __('Scores'),
'linkIcon' => 'icons.graph',
])

<div class="border-b pb-8 mb-8">
    <div class="lg:flex -m-4">
        <div class="w-full lg:w-1/2 p-4">
            <div class="md:flex -m-4 lg:border-r">
                <div class="w-full md:w-1/2 p-4 md:border-r">
                    <div class="uppercase font-bold mb-2">{{ __('Lifestyle')}}</div>
                    <div class="content text-sm">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero explicabo autem, odit beatae porro eveniet animi natus fugit dolor sit quam eligendi. Vel molestiae possimus cum, eveniet sit earum provident!</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-4">Grafiek</div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 p-4">
            <div class="md:flex -m-4">
                <div class="w-full md:w-1/2 p-4 md:border-r">
                    <div class="uppercase font-bold mb-2">{{ __('Hart risk') }}</div>
                    <div class="content text-sm">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero explicabo autem, odit beatae porro eveniet animi natus fugit dolor sit quam eligendi. Vel molestiae possimus cum, eveniet sit earum provident!</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-4">Grafiek</div>
            </div>
        </div>
    </div>
</div>

<div class="lg:flex pb-8 -m-4">
    <div class="w-full lg:w-1/2 p-4 md:border-r">
        <div class="flex flex-wrap -m-4">
            @component('components.layout.scoreItem', [
            'title' => __('BMI'),
            ])
            <div class="flex items-end text-orange-500 leading-none">
                <div class="text-3xl font-bold">27.3</div>
                <div class="text-xs mb-1 ml-1">(89.5kg)</div>
            </div>
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Smoke'),
            ])
            <div class="flex items-end text-green-500 leading-none">
                <div class="text-3xl font-bold">Nee</div>
            </div>
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Vegetable'),
            ])
            <div class="flex items-end text-red-500 leading-none">
                <div class="text-3xl font-bold">86</div>
                <div class="text-xs mb-1 ml-1">gr/dag</div>
            </div>
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Movement'),
            ])
            <div class="flex items-end text-red-500 leading-none">
                <div class="text-3xl font-bold">30</div>
                <div class="text-xs mb-1 ml-1">minuten</div>
            </div>
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Fat'),
            ])
            <div class="flex items-end text-green-500 leading-none">
                <div class="text-3xl font-bold">7</div>
                <div class="text-xs mb-1 ml-1">gr/dag</div>
            </div>
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Sleep'),
            ])
            <div class="flex items-end text-green-500 leading-none">
                <div class="text-3xl font-bold">12</div>
                <div class="text-xs mb-1 ml-1">punten</div>
            </div>
            @endcomponent
        </div>
    </div>
    <div class="w-full lg:w-1/2 p-4">
        <div class="flex flex-wrap pb-8 -m-4">
            @component('components.layout.scoreItem', [
            'title' => __('HDL cholesterol'),
            ])
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Total cholesterol'),
            ])
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Blood pressure'),
            ])
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Glucose'),
            ])
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Diabetes'),
            ])
            @endcomponent
            @component('components.layout.scoreItem', [
            'title' => __('Rheumatism'),
            ])
            @endcomponent
        </div>
    </div>
</div>


@endcomponent

@endcomponent