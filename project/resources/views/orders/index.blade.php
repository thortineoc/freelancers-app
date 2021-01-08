<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <h2>Zamówienia</h2>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->title }}</td>
                </tr>
                <tr>
                    <td>{{ $order->description }}</td>
                </tr>
                <tr>
                    <td>{{ $order->budget }}</td>
                </tr>
                <tr>
                    <td>{{ $order->deadline }}</td>
                </tr>
            @empty
                <p>Brak dostępnych zleceń</p>
            @endforelse

        </div>

        <div class="rounded shadow p-2 m-3 text-blue-800 bg-gray-300">
            <a href="/books/create">Create new...</a>
        </div>

    </div>
</x-app-layout>
