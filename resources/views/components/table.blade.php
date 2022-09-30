@props(['numbers'])
<div class="w-full">
    <div class="my-6 bg-white rounded shadow-md">
        <table class="w-full table-auto min-w-max">
            <thead>
                <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                    <th class="px-6 py-3 text-left">Number</th>
                    <th class="px-6 py-3 text-center">Status</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm font-light text-gray-600">
                @foreach ($numbers as $number)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-6 py-3 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium">{{ $number->number }}</span>
                            </div>

                        <td class="px-6 py-3 text-center">
                            @if ($number->isWhitelisted)
                                <span class="px-3 py-1 text-xs text-green-600 bg-green-200 rounded-full">Active</span>
                            @else
                                <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">Blocked</span>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-center">
                            <div class="flex justify-center item-center">

                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <a href="{{ route('number.edit', $number->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <form action="{{ route('number.delete', $number->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>

                                    </form>
                                </div>

                                <div>
                                    <a href="{{ route('number.blacklist', $number->id) }}">
                                        @if (!$number->isWhitelisted)
                                            <span class="px-3 py-1 text-xs text-green-600 bg-green-200">Whitelist</span>
                                        @else
                                            <span class="px-3 py-1 text-xs text-red-600 bg-red-200">Blacklist</span>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{ $numbers->links() }}
            </tbody>
        </table>
    </div>
</div>
