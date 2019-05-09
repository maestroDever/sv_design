<aside class="p-8">
    <div id="sidebar-logo" class="mb-8">
        @svg('logos.smartvitaal-colored')
    </div>
    <div id="sidebar-nav">
        <div class="mb-8">
            <div class="flex border-l-4 text-black leading-none font-semibold border-red-500 -ml-8 pl-8 py-2">@svg('icons.home', ['class' => 'w-4 h-4 fill-current text-red-500 mr-4']) {{ __('Dashboard') }}</div>
            <ul class="text-sm my-4 pl-10">
                <li class="py-2"><a class="flex" href="#">@svg('icons.graph', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">{{ __('Scores') }}</span></a></li>
                <li class="py-2"><a class="flex" href="#">@svg('icons.plus', ['class' => 'w-4 h-4 fill-current stroke-current text-red-500 mr-2']) <span class="hover:underline">{{ __('Update') }}</span></a></li>
                <li class="py-2"><a class="flex" href="#">@svg('icons.euro', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">{{ __('Budget') }}</span></a></li>
                <li class="py-2"><a class="flex" href="#">@svg('icons.package', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">{{ __('Orders') }}</span></a></li>
                <li class="py-2"><a class="flex" href="#">@svg('icons.heart', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">{{ __('Favorites') }}</span></a></li>
            </ul>
        </div>
        <div class="mb-8">
            <div class="flex border-l-4 text-black leading-none font-semibold border-transparent -ml-8 mb-4 pl-8 py-2">@svg('icons.apple', ['class' => 'w-4 h-4 fill-current text-red-500 mr-4']) {{ __('Shop') }}</div>
            <ul class="text-sm pl-10">
                <li class="py-2"><a class="flex" href="#">@svg('icons.grid', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">{{ __('Categories') }}</span></a></li>
                <ul class="text-xs uppercase font-bold text-gray-600 my-4 pl-8">
                    <li class="py-1"><a class="flex" href="#">@svg('categories.sport', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Sport</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.balance', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Balans</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.innovation', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Innovatie</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.food', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Voeding</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.medical', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Medisch</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.mental', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Mentaal</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.relax', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Ontspanning</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.free', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Gratis</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.groups', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Groepen</span></a></li>
                    <li class="py-1"><a class="flex" href="#">@svg('categories.insured-care', ['class' => 'w-4 h-4 fill-current mr-2'])<span class="hover:underline">Verzekerde zorg</span></a></li>
                </ul>
                <li class="py-2"><a class="flex" href="#">@svg('icons.euro', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">Prijs</span></a></li>
                <li class="py-2"><a class="flex" href="#">@svg('icons.location', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">Locatie</span></a></li>
                <li class="py-2"><a class="flex" href="#">@svg('icons.station', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2']) <span class="hover:underline">Offline / Online</span></a></li>
            </ul>
        </div>
        <div class="mb-8">
            <div class="flex border-l-4 text-black leading-none font-semibold border-transparent -ml-8 mb-4 pl-8 py-2">@svg('icons.user-profile', ['class' => 'w-4 h-4 fill-current text-red-500 mr-4']) {{ __('Profile') }}</div>
        </div>
        <div class="mb-8">
            <div class="flex border-l-4 text-black leading-none font-semibold border-transparent -ml-8 mb-4 pl-8 py-2">@svg('icons.shoppingcart', ['class' => 'w-4 h-4 fill-current text-red-500 mr-4']) {{ __('Shopping cart') }}</div>
        </div>
        <div class="my-12">
            <a href="#" class="flex ml-2">
                <div class="flex-shrink-0 mr-2">
                    @svg('icons.add-solid', ['class' => 'w-4 h-4 fill-current text-green-500 mr-2'])
                </div>
                <div class="flex-1">
                    <div class="flex justify-between font-semibold leading-none mb-1">
                        <div class="text-black">{{ __('Lifestyle') }}</div>
                        <div class="text-green-500">7,8</div>
                    </div>
                    <div class="text-sm text-gray-700">
                        Goede score
                    </div>
                </div>
            </a>
        </div>
        <div class="my-12">
            <a href="#" class="flex ml-2">
                <div class="flex-shrink-0 mr-2">
                    @svg('icons.add-solid', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2'])
                </div>
                <div class="flex-1">
                    <div class="flex justify-between font-semibold leading-none mb-1">
                        <div class="text-black">{{ __('Hart risk') }}</div>
                        <div class="text-red-500">20%</div>
                    </div>
                    <div class="text-sm text-gray-700">
                        Slechte score
                    </div>
                </div>
            </a>
        </div>
        <div class="my-12">
            <a href="#" class="flex ml-2">
                <div class="flex-shrink-0 mr-2">
                    @svg('icons.add-solid', ['class' => 'w-4 h-4 fill-current text-blue-500 mr-2'])
                </div>
                <div class="flex-1">
                    <div class="flex justify-between font-semibold leading-none mb-1">
                        <div class="text-black">{{ __('Budget') }}</div>
                        <div class="text-blue-500">&euro;&nbsp;500</div>
                    </div>
                    <div class="text-sm text-gray-700">
                        {{ __('Personal budget') }}
                    </div>
                </div>
            </a>
        </div>
    </div>
</aside>