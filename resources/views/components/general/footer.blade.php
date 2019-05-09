<section id="footer" class="relative bg-white">
    <div class="container">
        <div class="py-16">
            <div id="footer-logo">
                @svg('logos.smartvitaal-colored', ['class' => 'w-64'])
            </div>
        </div>
        <div class="flex flex-wrap md:-m-4 lg:-m-8">
            <div class="w-full md:w-1/2 lg:w-1/4 my-4 md:m-0 md:p-4 lg:p-8">
                <div class="text-black font-semibold uppercase mb-2">{{ __('Make a choice') }}</div>
                <ul class="text-gray-600">
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Dashboard') }}</a></li>
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Shop') }}</a></li>
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Profile') }}</a></li>
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Shopping cart') }}</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 my-4 md:m-0 md:p-4 lg:p-8">
                <div class="text-black font-semibold uppercase mb-2">{{ __('Help') }}</div>
                <ul class="text-gray-600">
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('FAQ') }}</a></li>
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Contact') }}</a></li>
                </ul>
                <div class="text-black font-semibold uppercase mt-4 mb-2">{{ __('Learn more') }}</div>
                <ul class="text-gray-600">
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('About :site_name', ['site_name' => config('app.name')]) }}</a></li>
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Press') }}</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 my-4 md:m-0 md:p-4 lg:p-8">
                <div class="text-black font-semibold uppercase mb-2">{{ __('Legal') }}</div>
                <ul class="text-gray-600">
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Terms of use') }}</a></li>
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Privacy policy') }}</a></li>
                    <li class="py-1"><a class="hover:underline" href="#">{{ __('Cookies') }}</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 my-4 md:m-0 md:p-4 lg:p-8">
                <div class="text-black font-semibold uppercase mb-2">{{ __('Social') }}</div>
                <div class="content text-gray-600 leading-loose mb-4">
                    <p>{{ __('Follow us on social media') }}</p>
                </div>
                <div class="flex">
                    <a class="mr-4" href="#">@svg('social.facebook-rounded', ['class' => 'w-8 h-8 text-facebook fill-current'])</a>
                    <a class="mr-4" href="#">@svg('social.youtube-rounded', ['class' => 'w-8 h-8 text-youtube fill-current'])</a>
                    <a class="mr-4" href="#">@svg('social.instagram-rounded', ['class' => 'w-8 h-8 text-instagram fill-current'])</a>
                    <a class="mr-4" href="#">@svg('social.twitter-rounded', ['class' => 'w-8 h-8 text-twitter fill-current'])</a>
                </div>
            </div>
        </div>
        <div id="footer-copyright">
            <div class="my-8 text-sm text-gray-600 text-right">
                <p>{{ __('All rights reserved') }} {{ date('Y') }} {{ config('app.name') }}</p>
            </div>
        </div>
    </div>
</section>