<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dash-board') }}
        </h2>

        <a href="{{ route('login') }}">
            VEAMOS LOS PRODUCTOS!!
        </a>
    </x-slot>

</x-app-layout>
