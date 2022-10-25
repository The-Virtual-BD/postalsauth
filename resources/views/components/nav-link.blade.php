@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-base font-semibold px-4 py-2 w-full block text-blue px-4 bg-gradient-to-tr from-mblue to-dblue text-white'
            : 'text-base font-semibold px-4 py-2 w-full block text-blue px-4 hover:bg-gradient-to-tr hover:from-mblue hover:to-dblue hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
