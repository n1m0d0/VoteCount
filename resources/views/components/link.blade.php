@props(['type' => 'default'])

@php
    $baseClasses =
        'inline-flex items-center justify-center rounded-md font-semibold text-sm px-4 py-2 transition-all duration-300 ease-in-out transform cursor-pointer';

    $typeClasses = match ($type) {
        'accept' => 'text-green-500 hover:text-green-600 hover:scale-105 active:scale-95',
        'save' => 'text-blue-500 hover:text-blue-600 hover:scale-105 active:scale-95',
        'edit' => 'text-orange-500 hover:text-orange-600 hover:scale-105 active:scale-95',
        'delete' => 'text-red-500 hover:text-red-600 hover:scale-105 active:scale-95',
        'preview' => 'text-purple-500 hover:text-purple-600 hover:scale-105 active:scale-95',
        'cancel' => 'text-gray-300 hover:text-gray-400 hover:scale-105 active:scale-95',
        'send' => 'text-cyan-500 hover:text-cyan-600 hover:scale-105 active:scale-95',
        'download' => 'text-indigo-500 hover:text-indigo-600 hover:scale-105 active:scale-95',
        default => 'text-gray-500 hover:text-gray-600 hover:scale-105 active:scale-95',
    };
@endphp

<a {{ $attributes->merge(['class' => "$baseClasses $typeClasses"]) }}>
    {{ $slot }}
</a>
