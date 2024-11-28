@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'peer block w-full rounded-md border-2 border-gray-500 bg-transparent px-4 pt-2 pb-2 text-sm text-white placeholder-transparent focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all',
]) !!}>
