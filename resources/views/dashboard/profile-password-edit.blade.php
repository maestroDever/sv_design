@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Edit'),
'introBold' => __('Password'),
'linkTitle' => __('Data'),
'linkIcon' => 'icons.user-profile',
])

@component('components.layout.sectionForm', [
'title' => __('Password'),
'description' => __('Edit password description'),
])

<div class="form__group mb-4">
    {{ html()->label(__('Password'), 'password')->class('form__label mb-1 text-sm') }}
    {{ html()->password('password')->class('form__input')->required()->attribute('minlength', 10)->highlightOnError() }}
    {{ html()->formError('password') }}
</div>

<div class="form__group mb-4">
    {{ html()->label(__('Password confirm'), 'password_confirmation')->class('form__label mb-1 text-sm') }}
    {{ html()->password('password_confirmation')->class('form__input')->required()->attribute('minlength', 10)->highlightOnError() }}
    {{ html()->formError('password_confirmation') }}
</div>

@endcomponent

@component('components.layout.sectionForm')

@component('components.layout.btnDefault', [
'url' => '#',
'text' => __('Save'),
])
@endcomponent

@endcomponent

@endcomponent

@endcomponent