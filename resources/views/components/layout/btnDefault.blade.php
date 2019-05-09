<a class="btn btn-orange {{ $class ?? '' }}" href="{{ $url ?? '#' }}">
    {{ $text }}
    @isset($icon)
    @svg($icon, ['class' => 'w-3 h-3 fill-current ml-8'])
    @endisset
</a>