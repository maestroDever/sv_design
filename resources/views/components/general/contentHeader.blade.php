<section class="mb-8">
    <div class="gradient-orange-r lg:background-transparent p-8 lg:pb-0">
        <div class="flex justify-end -mx-4">
            <div class="w-80 px-4">
                <div class="relative border-b border-white lg:border-black">
                    <input type="text" class="appearance-none block w-full bg-transparent border-none w-full text-white lg:text-gray-800 py-2 pr-4 pl-8 leading-tight focus:outline-none" placeholder="{{ __('search_placeholder') }}">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                        @svg('icons.search', ['class' => 'fill-current text-white lg:text-black pointer-events-none w-4 h-4'])
                    </div>
                </div>
            </div>
            <div class="flex px-4">
                <div class="px-4">
                    <dropdown>
                        <div class="flex items-center lg:items-start lg:w-64 py-px">
                            <div class="mr-1 lg:mr-3 rounded-full h-8 w-8 flex flex-shrink-0 items-center justify-center bg-gray-300 text-gray-400 text-sm font-bold">
                                RV
                            </div>
                            <div class="flex-1 text-xs truncate hidden lg:block">
                                <div class="font-bold truncate">Richard Vogel</div>
                                <div>Politie account</div>
                            </div>
                            <div class="flex flex-shrink-0 lg:ml-2">
                                @svg('icons.arrow-down', ['class' => 'w-2 h-2 fill-current text-white lg:text-black m-1'])
                            </div>
                        </div>
                        <template v-slot:menu>
                            <ul class="mb-4">
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 font-bold hover:bg-gray-200">
                                        @svg('icons.home', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2'])
                                        {{ __('Dashboard') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 font-bold hover:bg-gray-200">
                                        @svg('icons.apple', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2'])
                                        {{ __('Shop') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 font-bold hover:bg-gray-200">
                                        @svg('icons.user-profile', ['class' => 'w-4 h-4 fill-current text-red-500 mr-2'])
                                        {{ __('Profile') }}
                                    </a>
                                </li>
                            </ul>
                            <ul class="mb-4">
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 font-bold text-gray-400 hover:text-black">
                                        @svg('icons.arrow-right-rounded', ['class' => 'w-4 h-4 fill-current mr-2'])
                                        Raet
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center px-4 py-2 font-bold">
                                        @svg('icons.arrow-right-rounded', ['class' => 'w-4 h-4 fill-current text-black mr-2'])
                                        Politie
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600  text-sm">
                                @svg('icons.logout', ['class' => 'w-4 h-4 fill-current mr-2'])
                                <div class="font-normal hover:underline">{{ __('Logout') }}</div>
                            </a>
                        </template>
                    </dropdown>
                </div>
                <div class="w-12 relative">
                    <dropdown>
                        @svg('icons.shoppingcart', ['class' => 'w-8 h-8 fill-current text-white lg:text-black'])
                        <div class="absolute -top-3 right-0 rounded-full shadow-md h-6 w-6 flex flex-shrink-0 items-center justify-center bg-white lg:bg-red-500 text-red-500 lg:text-white text-sm font-bold">
                            5
                        </div>
                        <template v-slot:menu>
                            <div class="p-4">
                                <div class="text-sm">
                                    <div class="uppercase mb-4">{{ __('Products') }}</div>
                                    <div class="mb-4">
                                        <div class="flex justify-between -mx-1 py-2">
                                            <div class="font-bold truncate px-1">Mom's Balans</div>
                                            <div class="flex-shrink-0 px-1">
                                                &euro;&nbsp;56,50
                                            </div>
                                        </div>
                                        <div class="flex justify-between -mx-1 py-2">
                                            <div class="font-bold truncate px-1">Mom's Balansmetlangere titel</div>
                                            <div class="flex-shrink-0 px-1">
                                                &euro;&nbsp;220,50
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-6 uppercase">
                                        <div class="flex justify-between -mx-1 py-1">
                                            <div class="truncate px-1">{{ __('Subtotal') }}</div>
                                            <div class="flex-shrink-0 px-1">
                                                &euro;&nbsp;56,50
                                            </div>
                                        </div>
                                        <div class="flex justify-between font-bold -mx-1 py-1">
                                            <div class="truncate px-1">{{ __('Total') }}</div>
                                            <div class="flex-shrink-0 px-1">
                                                &euro;&nbsp;56,50
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @component('components.layout.btnDefault', [
                                'url' => '#',
                                'text' => __('Pay'),
                                'class' => 'flex btn-xl',
                                ])
                                @endcomponent
                            </div>
                        </template>
                    </dropdown>
                </div>
            </div>
            <div class="lg:hidden flex px-4">
                <div class="flex-1 flex justify-end">
                    <button class="flex justify-center items-center border border-white text-white p-2 rounded lg:hidden focus:outline-none text-sm uppercase focus:outline-none" onclick="navMenu.toggle()">
                        <svg id="js-nav-menu-show" xmlns="http://www.w3.org/2000/svg" class="fill-current h-9 w-4 mr-2" viewBox="0 0 20 20">
                            <path d="M17.5 6h-15a.5.5 0 0 1 0-1h15a.5.5 0 0 1 0 1zM17.5 11h-15a.5.5 0 0 1 0-1h15a.5.5 0 0 1 0 1zM17.5 16h-15a.5.5 0 0 1 0-1h15a.5.5 0 0 1 0 1z" />
                        </svg>

                        <svg id="js-nav-menu-hide" xmlns="http://www.w3.org/2000/svg" class="hidden fill-current h-9 w-4 mr-2" viewBox="0 0 20 20">
                            <path d="M10.707 10.5l5.646-5.646a.5.5 0 0 0-.707-.707L10 9.793 4.354 4.147a.5.5 0 0 0-.707.707L9.293 10.5l-5.646 5.646a.5.5 0 0 0 .708.707l5.646-5.646 5.646 5.646a.498.498 0 0 0 .708 0 .5.5 0 0 0 0-.707L10.709 10.5z" />
                        </svg>
                        Menu
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="js-nav-menu" class="hidden bg-white shadow">
        Menu
    </div>
</section>