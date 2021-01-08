<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Jobs') }}
            </h2>
            <x-button>
                Add new one...
            </x-button>
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
                <div>
                    Deadline: {{ $order->deadline }}
                </div>
                <div class="max-w-100 mt-8">
                    <x-button>Apply</x-button>
                </div>

            </div>
        @empty

            <p>No job offer is currenty avaliable.</p>

        @endforelse

        </div>

    </div>
</x-app-layout>
