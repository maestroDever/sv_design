@component('layouts.back')

<section class="hero-header px-8 mb-12">
    <div class="relative">
        <figure class="image aspect-ratio-16/9 rounded-lg overflow-hidden">
            <img src="//placehold.it/1920x1080" alt="">
        </figure>
        <div class="flex flex-col absolute inset-0 h-full w-full p-8">
            <div class="w-full flex justify-end">
                <div class="flex justify-center text-white text-xs font-bold uppercase">
                    {{ __('Dashboard') }} @svg('icons.home', ['class' => 'w-4 h-4 fill-current ml-3'])
                </div>
            </div>
            <div class="w-full h-full flex items-center">
                <div>
                    <h2 class="section-title text-white font-normal mb-4">{!! __('Start with your personal Vitality assistant') !!}</h2>
                    <div class="flex -m-4">
                        <div class="p-4">
                            @component('components.layout.btnDefault', [
                            'url' => '#',
                            'text' => __('Start test'),
                            'class' => 'md:btn-xl',
                            ])
                            @endcomponent
                        </div>
                        <div class="p-4">
                            @component('components.layout.btnDefault', [
                            'url' => '#',
                            'text' => __('View video'),
                            'class' => 'md:pl-12 md:py-3',
                            'icon' => 'icons.play',
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@component('components.layout.sectionDashboard', [
'title' => 'Producten met een positieve impact op je gezondheid',
'url' => '#',
])

@component('components.layout.productCarousel')

@component('components.layout.productCarouselItem', [
'url' => '#',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'title' => 'Personal Training',
'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, repudiandae aut magni.',
'price' => '56,00',
])
<img class="w-full" src="//placehold.it/285x160" alt="">
@endcomponent

@component('components.layout.productCarouselItem', [
'url' => '#',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'title' => 'Vitalent 2',
'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, repudiandae aut magni.',
'price' => '57,00',
])
<img class="w-full" src="//placehold.it/285x160" alt="">
@endcomponent

@component('components.layout.productCarouselItem', [
'url' => '#',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'title' => 'Vitalent 3',
'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, repudiandae aut magni.',
'price' => '58,00',
])
<img class="w-full" src="//placehold.it/285x160" alt="">
@endcomponent

@endcomponent

@endcomponent

@component('components.layout.sectionDashboard', [
'title' => __('Search all categories'),
'url' => '#',
])

@component('components.layout.categoryCarousel')

@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'categoryColor' => 'gradient-blue-b',
])
@endcomponent

@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Balans',
'categoryIcon' => 'categories.balance',
'categoryColor' => 'gradient-red-b',
])
@endcomponent
@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Innovatie',
'categoryIcon' => 'categories.innovation',
'categoryColor' => 'gradient-purple-b',
])
@endcomponent
@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Voeding',
'categoryIcon' => 'categories.food',
'categoryColor' => 'gradient-green-b',
])
@endcomponent
@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Medisch',
'categoryIcon' => 'categories.medical',
'categoryColor' => 'gradient-teal-b',
])
@endcomponent
@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Mentaal',
'categoryIcon' => 'categories.mental',
'categoryColor' => 'gradient-yellow-b',
])
@endcomponent
@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Ontspanning',
'categoryIcon' => 'categories.relax',
'categoryColor' => 'gradient-purple-blue-b',
])
@endcomponent
@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Gratis',
'categoryIcon' => 'categories.free',
'categoryColor' => 'gradient-green-blue-b',
])
@endcomponent
@component('components.layout.categoryCarouselItem', [
'url' => '#',
'category' => 'Groepen',
'categoryIcon' => 'categories.groups',
'categoryColor' => 'gradient-orange-b',
])
@endcomponent

@endcomponent

@endcomponent

@component('components.layout.sectionDashboard', [
'title' => 'Vitaal krant',
'url' => '#',
])

@component('components.layout.sectionBlog')

@component('components.layout.sectionBlogItem', [
'url' => '#',
'class' => 'w-full md:w-1/2 xl:w-1/3',
'date' => 'maandag 26 juli 2018',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'categoryColor' => 'gradient-transparent-blue-b',
'title' => 'De invloed van slaapgebruik op jou baby',
'author' => 'Daniel vermeulen',
])
<img class="w-full" src="//placehold.it/600x600" alt="">
@endcomponent

@component('components.layout.sectionBlogItem', [
'url' => '#',
'class' => 'w-full md:w-1/2 xl:w-1/3',
'date' => 'maandag 26 juli 2018',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'categoryColor' => 'gradient-transparent-purple-b',
'title' => 'De invloed van slaapgebruik op jou baby',
'author' => 'Daniel vermeulen',
])
<img class="w-full" src="//placehold.it/600x600" alt="">
@endcomponent

@component('components.layout.sectionBlogItem', [
'url' => '#',
'class' => 'w-full md:w-1/2 xl:w-1/3',
'date' => 'maandag 26 juli 2018',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'categoryColor' => 'gradient-transparent-teal-b',
'title' => 'De invloed van slaapgebruik op jou baby',
'author' => 'Daniel vermeulen',
])
<img class="w-full" src="//placehold.it/600x600" alt="">
@endcomponent

@component('components.layout.sectionBlogItem', [
'url' => '#',
'class' => 'w-full md:w-1/2',
'date' => 'maandag 26 juli 2018',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'categoryColor' => 'gradient-transparent-yellow-b',
'title' => 'De invloed van slaapgebruik op jou baby',
'author' => 'Daniel vermeulen',
])
<img class="w-full" src="//placehold.it/600x600" alt="">
@endcomponent
@component('components.layout.sectionBlogItem', [
'url' => '#',
'class' => 'w-full md:w-1/2',
'date' => 'maandag 26 juli 2018',
'category' => 'Sport',
'categoryIcon' => 'categories.sport',
'categoryColor' => 'gradient-transparent-green-b',
'title' => 'De invloed van slaapgebruik op jou baby',
'author' => 'Daniel vermeulen',
])
<img class="w-full" src="//placehold.it/600x600" alt="">
@endcomponent

@endcomponent

@endcomponent

@endcomponent