@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Your'),
'introBold' => __('BMI'),
'linkTitle' => __('Scores'),
'linkIcon' => 'icons.graph',
])

<div class="md:flex md:flex-wrap pb-8 -m-4">
    <div class="w-full lg:w-1/2 xl:w-1/4 p-4 border-r-none md:border-r">
        <div class="uppercase font-bold mb-2">{{ __('Last update') }}</div>
        <div class="content text-sm">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero explicabo autem, odit beatae porro eveniet animi natus fugit dolor sit quam eligendi. Vel molestiae possimus cum, eveniet sit earum provident!</p>
        </div>
    </div>
    <div class="w-full lg:w-1/2 xl:w-1/4 p-4 xl:border-r">
        <div class="uppercase font-bold mb-2">{{ __('Progress') }}</div>
        Grafiek
    </div>
    <div class="w-full lg:w-1/2 xl:w-1/4 p-4 border-r-none md:border-r">
        <div class="uppercase font-bold mb-2">Scores</div>
        <div class="mb-4">
            <div class="flex text-sm -mx-2">
                <div class="w-32 flex-shrink-0 font-bold px-2">{{ __('Your score') }}</div>
                <div class="flex-1 px-2">215 minuten</div>
            </div>
            <div class="flex text-sm -mx-2">
                <div class="w-32 flex-shrink-0 font-bold px-2">{{ __('Ideal score') }}</div>
                <div class="flex-1 px-2">150 minuten of meer</div>
            </div>
        </div>
        Grafiek
    </div>
    <div class="w-full lg:w-1/2 xl:w-1/4 p-4">
        <div class="uppercase font-bold mb-2">{{ __('Important') }}</div>
        <div class="content text-sm mb-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero explicabo autem, odit beatae porro eveniet animi natus fugit dolor sit quam eligendi. Vel molestiae possimus cum, eveniet sit earum provident!</p>
        </div>
        <a href="#" class="flex items-center uppercase font-bold">
            @svg('icons.add-solid', ['class' => 'w-4 h-4 fill-current mr-2']) {{ __('Update') }}
        </a>
    </div>
</div>

@endcomponent

<section class="px-8 mb-8">
    <div class="relative rounded-lg shadow overflow-hidden bg-center bg-cover" style="background-image: url('https://via.placeholder.com/1920x600');">
        <div class="absolute inset-0 gradient-black-b"></div>
        <div class="flex items-center px-4 py-16 md:px-8 md:py-32">
            <h2 class="section-title font-normal text-white z-10">{!! __('Everything you need to know about') !!} <strong>BMI</strong></h2>
        </div>
    </div>
</section>

@component('components.layout.sectionWhite', [
'intro' => __('Explanation'),
'introBold' => __('BMI'),
'linkTitle' => __('Scores'),
'linkIcon' => 'icons.graph',
])

@component('components.layout.scoreItemDescription', [
'title' => 'BMI Scores'
])

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea officiis itaque accusantium nulla similique odit saepe hic incidunt cum laboriosam dolore, libero, at vitae officia dignissimos vero quod a nisi.</p>

@endcomponent

@component('components.layout.scoreItemDescription', [
'title' => 'BMI en spieren'
])

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea officiis itaque accusantium nulla similique odit saepe hic incidunt cum laboriosam dolore, libero, at vitae officia dignissimos vero quod a nisi.</p>

@endcomponent


@endcomponent

@endcomponent