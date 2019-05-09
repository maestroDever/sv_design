@component('layouts.profile')

<h1 class="leading-tight mb-6">{{ __('Login') }}</h1>
@formerrors()
@endformerrors

<div class="form__group">
    {{ html()->label(__('E-mail address'), 'identifier')->class('form__label') }}
    {{ html()->text('identifier')->class('form__input') }}
</div>
<div class="form__group">
    {{ html()->label(__('Password'), 'password')->class('form__label') }}
    {{ html()->password('password')->class('form__input') }}
</div>
<div class="form__group">
    <div class="flex flex-row text-sm">
        <div class="w-1/2">
            {{ html()->checkbox('remember')->checked(is_null(old('remember')) || old('remember'))}} {{ __('Remember me') }}
        </div>
        <div class="w-1/2 text-right content">
            <a href="#">{{ __('Forgot your password') }}</a>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-orange mt-4">
    {{ __('Login') }}
</button>
<div class="w-full text-center border-b my-8 leading-0"><span class="bg-white px-4 uppercase text-gray-500">{{ __('or') }}</span></div>
<a href="#" class="btn flex border border-red-500 text-red-500 hover:bg-red-500 hover:text-white block text-sm my-2">{{ __('Login with your e-mail address') }}</a>
<a href="#" class="btn flex border border-facebook text-facebook hover:bg-facebook hover:text-white block text-sm my-2">@svg('social/facebook', ['class' => 'fill-current w-4 h-4 mr-2']) {{ __('Login with Facebook') }}</a>
<a href="#" class="btn flex border border-twitter text-twitter hover:bg-twitter hover:text-white block text-sm my-2">@svg('social/twitter', ['class' => 'fill-current w-4 h-4 mr-2']) {{ __('Login with Twitter') }}</a>
<a href="#" class="btn flex border border-linkedin text-linkedin hover:bg-linkedin hover:text-white block text-sm my-2">@svg('social/linkedin', ['class' => 'fill-current w-4 h-4 mr-2']) {{ __('Login with LinkedIn') }}</a>

@endcomponent