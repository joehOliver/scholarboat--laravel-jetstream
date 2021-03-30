<x-layout>
    <x-slot name="header">
        <h2 class="text-base lg:text-lg text-gray-600">
            Captain on the bridge!
        </h2>
        <h1 class="font-bold text-5xl lg:text-6xl text-blue-darkest">
            {{ __('Dashboard') }}
        </h1>
        
    </x-slot>

    <div class="py-6">
        <div class="container 2xl:mx-auto px-6 md:px-8 lg:px-16">
            <x-bridge />
        </div>
    </div>
</x-layout>
