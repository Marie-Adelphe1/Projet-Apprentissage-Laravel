<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="py-4 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{ route('search') }}" class="color: blue text-blue-600 dark:text-blue-300 px-3 py-2 text-sm font-medium hover:bg-black-200 dark:hover:bg-black-700 dark:hover:text-black-100 rounded-md">
                    {{ __('Search') }}
                </a>
                <a href="{{ route('add') }}" class="text-blue-600 dark:text-blue-300 px-3 py-2 text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-100 rounded-md">
                    {{ __('Add Article') }}
                </a>
                <a href="{{ route('showBasket') }}" class="text-blue-600 dark:text-blue-300 px-3 py-2 text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-100 rounded-md">
                    {{ __('View Basket') }}
                </a>
                
            </div>
        </div>
    </div>
</x-app-layout>
