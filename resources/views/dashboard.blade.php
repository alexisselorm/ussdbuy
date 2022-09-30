<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-cards :card="$card" />
                    <x-flash-message />
                    <a href="{{ route('number.create') }}">
                        <x-button>ADD A NEW NUMBER</x-button>
                    </a>

                    <x-table :numbers="$numbers" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
