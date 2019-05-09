@component('layouts.master')

<div class="p-6 min-h-screen flex justify-center items-center bg-center bg-no-repeat bg-contain" style="background-image: url('/img/sv_home_image.png');">
    <div class="w-full {{ $class ?? 'max-w-md' }}">
        <div class="my-8 bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-8">
                <div class="border-b pb-8 mb-8">
                    @svg('logos.smartvitaal-colored', ['class' => 'h-12 mx-auto'])
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

@endcomponent