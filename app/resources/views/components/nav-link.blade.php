@props(['active'])

@php
    /**
    * TODO: create active classes
    */
        $default_classes = 'flex items-center';
        $classes = ($active ?? false)
                                    ? $default_classes . ''
                                    : $default_classes . ''

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
