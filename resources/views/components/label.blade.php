@props(['value'])

<label
    {{ $attributes->merge([
        'class' => 'block font-semibold text-sm text-white mb-2 transition duration-200 ease-in-out hover:text-blue-400',
    ]) }}>
    {{ $value ?? $slot }}
</label>
