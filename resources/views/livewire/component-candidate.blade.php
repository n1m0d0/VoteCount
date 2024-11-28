<div>
    <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
        <x-label for="name" value="{{ __('Name') }}" />

        <x-input id="name" type="text" wire:model.live='form.name' class="mb-4" />

        <x-input-error for="form.name" class="mt-2" />

        <div class="flex flex-row-reverse gap-2">
            <x-button wire:click='save' type="save">Guardar</x-button>

            <x-button wire:click='clear' type="cancel">Cancelar</x-button>
        </div>
    </div>

    <hr class="border-gray-300 my-4">

    <div class="overflow-x-auto bg-gray-800 rounded-lg shadow-lg">
        <table class="min-w-full table-auto text-gray-200">
            <thead>
                <tr class="bg-gray-700 border-b border-gray-600">
                    <th class="px-6 py-3 text-left text-sm font-semibold">{{ __('Id') }}</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold">{{ __('Name') }}</th>
                    <th class="px-6 py-3 text-center text-sm font-semibold">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                    <tr class="hover:bg-gray-700 hover:shadow-md transition-all duration-300 ease-in-out">
                        <td class="px-6 py-4 text-sm text-gray-50">{{ $candidate->id }}</td>
                        <td class="px-6 py-4 text-sm text-gray-300">{{ $candidate->name }}</td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <x-link type="edit" wire:click='edit({{ $candidate->id }})'>
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                </svg>

                                {{ __('Edit') }}
                            </x-link>

                            <x-link type="delete">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                </svg>

                                {{ __('Delete') }}
                            </x-link>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-2">
        {{ $candidates->links() }}
    </div>
</div>
