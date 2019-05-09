@component('layouts.profile', [
'class' => 'max-w-2xl',
])

<h1 class="leading-tight mb-6">{{ __('Invitation to join') }}</h1>

<div class="content mb-16">
    <p>{{ __('Invitation joining description') }}</p>
    <p>{{ __('Invitation joining introduction') }}</p>
    <p>{{ __('Invitation joining getting started') }}</p>
</div>

<div class="-m-8 p-8 bg-gray-200 border-t">
    <div class="mb-6">
        <label>
            {{ html()->checkbox('has_accepted_terms') }} {{ __('I\'ve read and accept the terms and conditions')}}
        </label>
    </div>

    {{ html()->submit(__('Activate account and join'))->class('btn btn-orange btn-xl') }}
</div>

@endcomponent