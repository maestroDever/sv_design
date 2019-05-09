@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Edit'),
'introBold' => __('E-mail address'),
'linkTitle' => __('Data'),
'linkIcon' => 'icons.user-profile',
])

@component('components.layout.sectionForm', [
'title' => __('E-mail address'),
'description' => __('Edit e-mail address description'),
])

<div class="form__group mb-4">
    {{ html()->label(__('E-mail address'), 'email')->class('form__label mb-1 text-sm ') }}
    {{ html()->text('email')->class('form__input')->required()->attribute('maxlength', 190)->highlightOnError() }}
    {{ html()->formError('email') }}
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