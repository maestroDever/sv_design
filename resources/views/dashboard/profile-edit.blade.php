@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Profile'),
'introBold' => __('Edit'),
'linkTitle' => __('Data'),
'linkIcon' => 'icons.user-profile',
])

@component('components.layout.sectionForm', [
'title' => __('Personal details'),
])

<div class="form__group mb-4">
    {{ html()->label(__('First name'), 'first_name')->class('form__label mb-1 text-sm') }}
    {{ html()->text('first_name')->class('form__input')->required()->attribute('maxlength', 180)->highlightOnError() }}
    {{ html()->formError('first_name') }}
</div>

<div class="form__group mb-4">
    {{ html()->label(__('Insertion') . ' (' . __('optional') . ')', 'insertion')->class('form__label mb-1 text-sm') }}
    <div class="w-1/3">
        {{ html()->text('insertion')->class('form__input')->attribute('maxlength', 180)->highlightOnError() }}
        {{ html()->formError('insertion') }}
    </div>
</div>

<div class="form__group mb-4">
    {{ html()->label(__('Last name'), 'last_name')->class('form__label mb-1 text-sm') }}
    {{ html()->text('last_name')->class('form__input')->required()->attribute('maxlength', 180)->highlightOnError() }}
    {{ html()->formError('last_name') }}
</div>

@endcomponent

@component('components.layout.sectionForm', [
'title' => __('Address details'),
])

<div class="form__group mb-4">
    {{ html()->label(__('Street'), 'address[street_1]')->class('form__label mb-1 text-sm') }}
    {{ html()->text('address[street_1]')->class('form__input')->required()->attribute('maxlength', 180)->highlightOnError() }}
    {{ html()->formError('address[street_1]') }}
</div>
<div class="sm:flex sm:flex-row sm:-mx-4 sm:-my-2">
    <div class="w-1/3 sm:px-4">
        <div class="form__group mb-4">
            {{ html()->label(__('Postal code'), 'address[postal_code]')->class('form__label mb-1 text-sm') }}
            {{ html()->text('address[postal_code]')->class('form__input')->required()->attribute('maxlength', 20)->highlightOnError() }}
            {{ html()->formError('address[postal_code]') }}
        </div>
    </div>
    <div class="w-full sm:w-2/3 sm:px-4">
        <div class="form__group mb-4">
            {{ html()->label(__('City'), 'address[city]')->class('form__label mb-1 text-sm') }}
            {{ html()->text('address[city]')->class('form__input')->required()->attribute('maxlength', 180)->highlightOnError() }}
            {{ html()->formError('address[city]') }}
        </div>
    </div>
</div>
<div class="form__group mb-4">
    {{ html()->label(__('Country'), 'address[country]')->class('form__label mb-1 text-sm') }}
    <div class="w-full inline-block relative">
        {{ html()->select('address[country]', prioritized_localized_countries())->class('form__select')->placeholder(__('general.select_country'))->highlightOnError() }}
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
            @svg('icons.arrow-select', ['class' => 'w-4 h-4 fill-current'])
        </div>
    </div>
    {{ html()->formError('address[country]') }}
</div>

@endcomponent

@component('components.layout.sectionForm', [
'title' => __('Contact details'),
])

<div class="form__group mb-4">
    {{ html()->label(__('Phone number') . ' (' . __('optional') . ')', 'phone_number')->class('form__label mb-1 text-sm') }}
    {{ html()->text('phone_number')->class('form__input')->attribute('maxlength', 80)->highlightOnError() }}
    {{ html()->formError('phone_number') }}
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