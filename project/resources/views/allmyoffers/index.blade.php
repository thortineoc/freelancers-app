<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My offer') }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <p>
            There are all of your job offers. When you finish working, please click on the "Finished" button to announce your employer that the job is done.
        </p>

        @forelse ($offers as $offer)

            @if($offer->accepted && $offer->accepted->selected && !$offer->accepted->selected->finished || !$offer->accepted || !$offer->accepted->selected || !$offer->accepted->selected->finished)
                @if($offer->accepted && $offer->accepted->selected && $offer->accepted->selected->rejected)
                    @continue
                @else

                <div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                    <h1 class="font-bold text-2xl mt-2">
                        {{ $offer->order->title }}
                    </h1>
                    <div class="my-2 mt-0 underline text-gray-500">
                        <a href="/orders/{{$offer->order_id}}">Display order</a>
                    </div>
                    <div class="font-bold text-lg text-green-900 mt-2">
                        My offer:
                    </div>
                    <div class="my-5">
                        {{ $offer->details }}
                    </div>
                    <div>
                        Price: {{ $offer->price }} $
                    </div>
                    <div class="mb-5">
                        Deadline: {{ $offer->deadline }}
                    </div>

                    @if($offer->accepted && $offer->accepted->selected)

                        <form method="get" action="{{ route('orders.offer.finish', [$offer->order, $offer]) }}">
                            @csrf
                            <x-my-button>Finished</x-my-button>
                        </form>

                    @endif
                </div>

                @endif
            @endif

        @empty

            <p>You did not apply for any job.</p>

        @endforelse

    </div>

</x-app-layout>
