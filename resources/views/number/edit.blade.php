<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-sidebar />
                    <form action="{{ route('number.update',$number->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label for="number"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NUMBER</label>
                            <input type="text" id="number" name="number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="NUMBER" required value="{{ $number->number }}">
                        </div>
                        <x-button>EDIT NUMBER</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
