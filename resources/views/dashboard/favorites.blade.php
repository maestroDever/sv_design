@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Overview'),
'introBold' => __('Favorites'),
'linkTitle' => __('Favorites'),
'linkIcon' => 'icons.heart',
])

<div class="mb-8">
    <div class="md:flex md:flex-wrap -m-4 lg:-m-8">
        @component('components.layout.favoriteItem', [
        'title' => 'Vitalen in de tent',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum et minus itaque velit sequi atque nihil facilis harum voluptatum.',
        'price' => '56,00',
        'category' => 'Sport',
        'categoryIcon' => 'categories.sport',
        'url' => '#',
        ])

        <img class="rounded-lg" src="https://via.placeholder.com/400x300" alt="">

        @endcomponent

        @component('components.layout.favoriteItem', [
        'title' => 'Vitalen in de tent',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum et minus itaque velit sequi atque nihil facilis harum voluptatum.',
        'price' => '56,00',
        'category' => 'Sport',
        'categoryIcon' => 'categories.sport',
        'url' => '#',
        ])

        <img class="rounded-lg" src="https://via.placeholder.com/400x300" alt="">

        @endcomponent

        @component('components.layout.favoriteItem', [
        'title' => 'Vitalen in de tent',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum et minus itaque velit sequi atque nihil facilis harum voluptatum.',
        'price' => '56,00',
        'category' => 'Sport',
        'categoryIcon' => 'categories.sport',
        'url' => '#',
        ])

        <img class="rounded-lg" src="https://via.placeholder.com/400x300" alt="">

        @endcomponent
    </div>
</div>

@endcomponent

@endcomponent