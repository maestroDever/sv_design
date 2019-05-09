@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Password'),
'introBold' => __('Confirm'),
'linkTitle' => __('Data'),
'linkIcon' => 'icons.user-profile',
])

<div class="max-w-md mx-auto mb-8">
    <h2 class="mb-2">{{ __('Confirm your password') }}</h2>
    <p class="mb-6">{{ __('Reauthenticate description') }}</p>

    {{ html()->form('POST')->open() }}

    @formerrors()
    @endformerrors

    <div class="form__group">
        {{ html()->label(__('Password'), 'password')->class('form__label mb-1 text-sm') }}
        {{ html()->password('password')->class('form__input')->required()->highlightOnError() }}
    </div>

    {{ html()->submit(__('Confirm'))->class('btn btn-orange mt-4') }}

    {{ html()->form()->close() }}
</div>

@endcomponent

@endcomponent