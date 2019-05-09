@component('layouts.profile')

<h1 class="leading-tight mb-6">{{ __('Reset password')}}</h1>

<div class="content mb-10">
    <p>{{ __('Reset password description') }}</p>
</div>

{{ html()->form('POST')->open() }}

@formerrors()
@endformerrors

<div class="form__group">
    {{ html()->label(__('E-mail address'), 'email')->class('form__label') }}
    {{ html()->text('email')->class('form__input')->highlightOnError() }}
</div>

<div class="form__group">
    {{ html()->label(__('Password'), 'password')->class('form__label') }}
    {{ html()->password('password')->class('form__input')->highlightOnError() }}
</div>

<div class="form__group">
    {{ html()->label(__('Password confirm'), 'password_confirmation')->class('form__label') }}
    {{ html()->password('password_confirmation')->class('form__input')->highlightOnError() }}
</div>

<button type="submit" class="btn btn-orange mt-4">
    {{ __('Reset password') }}
</button>

{{ html()->form()->close() }}

@endcomponent