@props(['active'])

@php
$classes = ($active ?? false)
            ? 'py-5 mx-2 cursor-pointer text-blue hover:text-blue font-semibold font-inter text-base'
            : 'py-5 mx-2 cursor-pointer hover:text-blue font-semibold font-inter text-base';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
