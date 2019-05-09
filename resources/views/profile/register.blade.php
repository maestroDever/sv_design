@component('layouts.profile', [
'class' => 'max-w-4xl',
])

<h1 class="leading-tight mb-6">{{ __('Create new account') }}</h1>
<div class="md:flex -m-8">
    <div class="w-full md:w-1/2 p-8">
        @formerrors()
        @endformerrors

        <div class="form__group">
            {{ html()->label(__('First name'), 'first_name')->class('form__label') }}
            {{ html()->text('first_name')->class('form__input')->attribute('maxlength', 190)->required()->highlightOnError() }}
        </div>
        <div class="form__group">
            {{ html()->label(sprintf('%s <span class="text-sm">%s</span>', __('Insertion'), __('optional')), 'insertion')->class('form__label') }}
            <div class="w-1/3">
                {{ html()->text('insertion')->class('form__input')->attribute('maxlength', 190)->highlightOnError() }}
            </div>
        </div>
        <div class="form__group">
            {{ html()->label(__('Last name'), 'last_name')->class('form__label') }}
            {{ html()->text('last_name')->class('form__input')->attribute('maxlength', 190)->required()->highlightOnError() }}
        </div>
        <div class="form__group">
            {{ html()->label(__('E-mail address'), 'email')->class('form__label') }}
            {{ html()->text('email')->class('form__input')->attribute('maxlength', 190)->required()->highlightOnError() }}
        </div>
        <div class="form__group">
            {{ html()->label(__('Password'), 'password')->class('form__label') }}
            {{ html()->password('password')->class('form__input')->required()->highlightOnError() }}
        </div>
        <div class="form__group">
            {{ html()->label(__('Password confirm'), 'password_confirmation')->class('form__label') }}
            {{ html()->password('password_confirmation')->class('form__input')->required()->highlightOnError() }}
        </div>
        <div class="my-6">
            <div class="form__group">
                <div class="checkbox">
                    <label class="flex">
                        {{ html()->checkbox('has_accepted_terms')->class('mr-3')->required() }}
                        <div class="text-sm content">
                            {{ __('I\'ve read and accept the') }} <a href="#">{{ __('terms and conditions') }}</a>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form__group">
                <div class="checkbox">
                    <label class="flex">
                        {{ html()->checkbox('has_accepted_medical_data_processing_terms')->class('mr-3')->required() }}
                        <div class="text-sm content">
                            {{ __('I give permission to') }} <a href="#">{{ __('process my medical data') }}</a>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form__group">
                <div class="checkbox">
                    <label class="flex">
                        {{ html()->checkbox('has_accepted_automated_data_processing_terms')->class('mr-3')->required() }}
                        <div class="text-sm content">
                            {{ __('I give permission to allow') }} <a href="#">{{ __('automated data processing') }}</a>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-orange mt-4">
            {{ __('Register') }}
        </button>
        <div class="w-full text-center border-b my-8 leading-0"><span class="bg-white px-4 uppercase text-gray-500">{{ __('or') }}</span></div>
        <a href="#" class="btn flex border border-red-500 text-red-500 hover:bg-red-500 hover:text-white block text-sm my-2">{{ __('Login with your e-mail address') }}</a>
        <a href="#" class="btn flex border border-facebook text-facebook hover:bg-facebook hover:text-white block text-sm my-2">@svg('social/facebook', ['class' => 'fill-current w-4 h-4 mr-2']) {{ __('Login with Facebook') }}</a>
        <a href="#" class="btn flex border border-twitter text-twitter hover:bg-twitter hover:text-white block text-sm my-2">@svg('social/twitter', ['class' => 'fill-current w-4 h-4 mr-2']) {{ __('Login with Twitter') }}</a>
        <a href="#" class="btn flex border border-linkedin text-linkedin hover:bg-linkedin hover:text-white block text-sm my-2">@svg('social/linkedin', ['class' => 'fill-current w-4 h-4 mr-2']) {{ __('Login with LinkedIn') }}</a>
    </div>
    <div class="w-full md:w-1/2 p-8">
        <div class="mb-8">
            <div class="flex items-center">
                <div class="w-8">
                    @svg('icons.check', ['class' => 'w-4 h-4 fill-current text-green-500 mr-2'])
                </div>
                <div class="flex-1">
                    <div class="font-semibold text-lg">Vitaal assistent</div>
                </div>
            </div>
            <div class="flex">
                <div class="w-8"></div>
                <div class="flex-1">
                    <div class="content text-sm">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi ut quos magnam blanditiis quod sapiente quisquam! Numquam, quo corporis aspernatur officiis fuga, consequuntur dolores tempore rem sit eius aliquid impedit?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-8">
            <div class="flex items-center">
                <div class="w-8">
                    @svg('icons.check', ['class' => 'w-4 h-4 fill-current text-green-500 mr-2'])
                </div>
                <div class="flex-1">
                    <div class="font-semibold text-lg">Afspraken en updates</div>
                </div>
            </div>
            <div class="flex">
                <div class="w-8"></div>
                <div class="flex-1">
                    <div class="content text-sm">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi ut quos magnam blanditiis quod sapiente quisquam! Numquam, quo corporis aspernatur officiis fuga, consequuntur dolores tempore rem sit eius aliquid impedit?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-8">
            <div class="flex items-center">
                <div class="w-8">
                    @svg('icons.check', ['class' => 'w-4 h-4 fill-current text-green-500 mr-2'])
                </div>
                <div class="flex-1">
                    <div class="font-semibold text-lg">We snappen je beter</div>
                </div>
            </div>
            <div class="flex">
                <div class="w-8"></div>
                <div class="flex-1">
                    <div class="content text-sm">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi ut quos magnam blanditiis quod sapiente quisquam! Numquam, quo corporis aspernatur officiis fuga, consequuntur dolores tempore rem sit eius aliquid impedit?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-8">
            <div class="flex items-center">
                <div class="w-8">
                    @svg('icons.check', ['class' => 'w-4 h-4 fill-current text-green-500 mr-2'])
                </div>
                <div class="flex-1">
                    <div class="font-semibold text-lg">Favorieten</div>
                </div>
            </div>
            <div class="flex">
                <div class="w-8"></div>
                <div class="flex-1">
                    <div class="content text-sm">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi ut quos magnam blanditiis quod sapiente quisquam! Numquam, quo corporis aspernatur officiis fuga, consequuntur dolores tempore rem sit eius aliquid impedit?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endcomponent