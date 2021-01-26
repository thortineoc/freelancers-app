<title>Order Directory For Freelancers</title>
<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Jobs') }}
            </h2>
            <x-link-button href="{{ route('myorders.create') }}">Create new...</x-link-button>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        @forelse ($orders as $order)

            <div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <h2 class="font-bold text-2xl">
                    {{ $order->title }}
                </h2>
                <div class="my-5">
                    {{ $order->description }}
                </div>
                <div>
                    Payment: {{ $order->budget }} $
                </div>
                <div class="mb-5">
                    Deadline: {{ $order->deadline }}
                </div>
                @if ($order->user_id != $user->id)
                <div class="flex">
                    <div class="m-w-50">
                        <x-link-button href="{{ route('orders.offer.create', $order) }}">Apply</x-link-button>
                    </div>
                </div>
                @else
                    <div class="flex">
                        <div class="m-w-50">
                            It's your order
                        </div>
                    </div>
                @endif
            </div>

        @empty

            <p>No job offer is currently available.</p>

        @endforelse

        </div>

    </div>
</x-app-layout>
