@component('layouts.profile')

<h1 class="leading-tight mb-6">{{ __('user::auth/sso/complete-account.title')}}</h1>

<p>{{ __('user::auth/passwords/reset.reset_password_description') }}</p>

{{ html()->form('POST')->open() }}

@formerrors()
@endformerrors

<div class="form__group">
    {{ html()->label(__('general.first_name'), 'first_name')->class('form__label') }}
    {{ html()->text('first_name')->class('form__input')->attribute('maxlength', 190)->required()->highlightOnError() }}
</div>
<div class="form__group">
    {{ html()->label(__('general.last_name'), 'last_name')->class('form__label') }}
    {{ html()->text('last_name')->class('form__input')->attribute('maxlength', 190)->required()->highlightOnError() }}
</div>
<div class="form__group">
    {{ html()->label(__('general.email_address'), 'email')->class('form__label') }}
    {{ html()->text('email')->class('form__input')->attribute('maxlength', 190)->required()->highlightOnError() }}
</div>

<button type="submit" class="btn btn-orange mt-4">
    @lang('user::auth/sso/complete-account.submit')
</button>

{{ html()->form()->close() }}

@endcomponent