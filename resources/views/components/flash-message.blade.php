@if (session()->has('message'))
    {{-- {{ dd(session('message')) }} --}}
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-90 left-1/2 transform -translate-x-1/2 bg-gray-500 text-white px-12 py-2">
        <p>{{ session('message') }}</p>
    </div>
@endif
