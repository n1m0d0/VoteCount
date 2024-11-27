@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center mt-2 px-5 py-2 bg-orange-600 border border-transparent rounded-lg font-semibold text-md text-white tracking-widest shadow-md hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-gray-900 active:bg-orange-700 disabled:opacity-50 transition duration-200 ease-in-out transform hover:scale-105'
            : 'inline-flex items-center mt-2 px-5 py-2 bg-gray-600 border border-transparent rounded-lg font-semibold text-md text-white tracking-widest shadow-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 focus:ring-offset-gray-900 active:bg-gray-700 disabled:opacity-50 transition duration-200 ease-in-out transform hover:scale-105';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
