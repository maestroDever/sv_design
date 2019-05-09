@component('layouts.master')

<section id="content">
    <div class="max-w-8xl mx-auto">
        <div class="flex flex-grow">
            <div class="flex-shrink-0 bg-white shadow-md md:w-64 xl:w-80 hidden lg:block">
                @component('components.general.sidenav')@endcomponent
            </div>
            <main class="w-full overflow-hidden">
                @component('components.general.contentHeader')@endcomponent
                {{ $slot }}
            </main>
        </div>
    </div>
</section>
@component('components.general.footer')@endcomponent

@endcomponent