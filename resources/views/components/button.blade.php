@props(['type' => 'default'])

@php
    $baseClasses =
        'inline-flex items-center justify-center rounded-md font-semibold text-sm px-4 py-2 transition-all duration-300 ease-in-out transform';
    $typeClasses = match ($type) {
        'accept' => 'bg-green-500 text-white hover:bg-green-600 hover:scale-105 active:scale-95',
        'save' => 'bg-blue-500 text-white hover:bg-blue-600 hover:scale-105 active:scale-95',
        'edit' => 'bg-orange-500 text-white hover:bg-orange-600 hover:scale-105 active:scale-95',
        'delete' => 'bg-red-500 text-white hover:bg-red-600 hover:scale-105 active:scale-95',
        'preview' => 'bg-purple-500 text-white hover:bg-purple-600 hover:scale-105 active:scale-95',
        'cancel' => 'bg-gray-300 text-black hover:bg-gray-400 hover:scale-105 active:scale-95',
        'send' => 'bg-cyan-500 text-white hover:bg-cyan-600 hover:scale-105 active:scale-95',
        'download' => 'bg-indigo-500 text-white hover:bg-indigo-600 hover:scale-105 active:scale-95',
        default => 'bg-gray-500 text-white hover:bg-gray-600 hover:scale-105 active:scale-95',
    };
@endphp

<button {{ $attributes->merge(['class' => "$baseClasses $typeClasses"]) }}>
    {{ $slot }}
</button>
