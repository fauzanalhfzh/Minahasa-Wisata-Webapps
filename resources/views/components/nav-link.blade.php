@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center hover:text-green-700 text-sm text-green-500'
            : 'inline-flex items-center hover:text-green-700 text-sm text-gray-500';
@endphp

<a {{ $navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
