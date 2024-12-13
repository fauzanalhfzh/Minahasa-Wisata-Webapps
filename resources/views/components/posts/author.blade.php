@props(['author', 'size'])

@php
    $imageSize = match ($size ?? null) {
        'xs' => 'w-7 h-7',
        'sm' => 'w-9 h-9',
        'md' => 'w-10 w-10',
        'lg' => 'w-14 w-14',
        default => 'w-10 h-10'
    };

    $textSize = match ($size ?? null) {
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-md',
        'base' => 'text-base',
        'lg' => 'text-lg',
        default => 'text-sm'
    };
@endphp

<img class="{{ $imageSize }} rounded-full mr-3" src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}">
<span class="{{ $textSize }} mr-1">{{ $author->name }}</span>

