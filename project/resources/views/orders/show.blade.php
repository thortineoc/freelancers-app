<title>Order Directory For Freelancers</title>
<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Order') }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <h2 class="font-bold text-2xl my-3">
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

        </div>

    </div>
</x-app-layout>
