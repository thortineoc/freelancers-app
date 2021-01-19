<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Creating a new order') }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        @if ($errors->any())
            <div>
                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md sm:rounded-lg">
            <p> ORDER: {{ $order->title }}</p>
                <div class="my-3">
                    <x-label for="price" :value="__('price')" class="font-semibold" />
                    <p>{{ $offer->price }}</p>
                </div>
                <div class="my-3">
                    <x-label for="details" :value="__('details')" />
                    <p>{{ $offer->details }}</p>
                </div>
                <div class="mb-8 mt-3">
                    <x-label for="deadline" :value="__('Deadline')" />
                    <p>{{ $offer->deadline }}</p>
                </div>

            <form method="get" action="{{route('orders.offer.edit', [$order, $offer])}}">
                <div class="m-500">
                    <x-my-button>Edit</x-my-button>
                </div>
            </form>
            <form method="post" action="{{route('orders.offer.destroy', [$order, $offer])}}">
                @method('DELETE')
                @csrf
                <div class="m-500">
                    <x-my-button>Delete</x-my-button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
