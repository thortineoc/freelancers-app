<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editing your offer') }}
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
            <form class="m-3" method="post" action="{{route('orders.offer.update', [$order, $offer])}}">
                @csrf
                @method('PUT')
                <div class="my-3">
                    <x-label for="price" :value="__('price')" class="font-semibold" />
                    <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="$offer->price" required autofocus />
                </div>
                <div class="my-3">
                    <x-label for="details" :value="__('details')" />
                    <textarea id="details" name="details" class="w-full rounded-md shadow-sm border-gray-300 focus:border-green-100 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="4">{{ $offer->details }}</textarea>
                </div>
                <div class="mb-8 mt-3">
                    <x-label for="deadline" :value="__('Deadline')" />
                    <x-data-picker name="deadline" id="deadline" />
                </div>

                <div class="m-500">
                    <x-my-button>Create</x-my-button>
                </div>

            </form>
        </div>

    </div>
</x-app-layout>
