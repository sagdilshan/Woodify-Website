<title>Woodify - Crafting Dreams into Wooden Reality</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: red;">
            {{ __('Unauthorized Activity') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Unauthorized activity detected. For security reasons') }}<br>
                    <span style="color:red;">{{ __('Please log out and log in again.') }}</span>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
