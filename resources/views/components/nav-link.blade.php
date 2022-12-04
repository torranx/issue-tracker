@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-primary active'
            : 'text-dark';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
