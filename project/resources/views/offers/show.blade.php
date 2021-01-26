<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Your offer') }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

            <div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <h2 class="font-bold text-2xl my-3">
                    {{ $order->title }}
                </h2>

                <div class="my-5">
                    {{ $offer->details }}
                </div>
                <div>
                    Price: {{ $offer->price }} $
                </div>
                <div class="mb-5">
                    Time needed: {{ $offer->deadline }}
                </div>

                <div class="flex justify-end">

                    <div class="flex">

                        @if(!$offer->accepted)

                        <form method="get" action="{{route('orders.offer.edit', [$order, $offer])}}">
                            <button class="focus:outline-none" id="edit">
                                <svg class="m-2 h-6 w-6 text-gray-500 hover:text-gray-900 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                        </form>

                        <form method="post" action="{{route('orders.offer.destroy', [$order, $offer])}}">
                            @csrf
                            @method("DELETE")

                            <button class="focus:outline-none" id="delete">
                                <svg class="m-2 h-6 w-6 text-gray-500 hover:text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>

                        @endif

                    </div>
                </div>
            </div>

    </div>
</x-app-layout>
