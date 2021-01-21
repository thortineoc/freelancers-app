<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Order') }}
            </h2>
        </div>
    </x-slot>

    <div>
        <p>{{ $order->title }}</p>
        <p>{{ $order->budget }}</p>
    </div>

</x-app-layout>
