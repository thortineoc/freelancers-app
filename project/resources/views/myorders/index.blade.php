<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My orders') }}
            </h2>
            <x-link-button href="{{ route('myorders.create') }}">Create new...</x-link-button>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        @forelse ($orders as $order)

            <div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <h1 class="font-bold text-2xl">
                    {{ $order->title }}
                </h1>
                <div class="my-5">
                    {{ $order->description }}
                </div>
                <div>
                    Payment: {{ $order->budget }} $
                </div>
                <div class="mb-5">
                    Deadline: {{ $order->deadline }}
                </div>


            </div>

        @empty

            <p>You have not created any job offer or all of them has already finished.</p>

        @endforelse

    </div>

    </div>
</x-app-layout>
