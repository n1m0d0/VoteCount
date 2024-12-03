@props(['show' => false])

<div x-data="{ isOpen: @entangle($attributes->wire('model')) }" x-show="isOpen"
    class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-75 transition-opacity" x-cloak
    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

    <div class="bg-gray-800 rounded-lg p-6 shadow-lg max-w-lg w-full" x-show="isOpen"
        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

        <!-- Modal Header -->
        <div class="flex justify-between items-center border-b border-gray-700 pb-3">
            {{ $title }}
        </div>

        <!-- Modal Body -->
        <div class="mt-4">
            {{ $slot }}
        </div>
    </div>
</div>
