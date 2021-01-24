<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editing the order') }}
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
            <form class="m-3" method="post" action="{{ route('myorders.update', $order) }}">
                @csrf
                @method("PUT")

                <div class="my-3">
                    <x-label for="title" :value="__('Job type')" class="font-semibold" />
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$order->title" required autofocus />
                </div>
                <div class="my-3">
                    <x-label for="description" :value="__('Description')" />
                    <textarea id="description" name="description" class="w-full rounded-md shadow-sm border-gray-300 focus:border-green-100 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="4">{{$order->description}}</textarea>
                </div>
                <div class="my-3">
                    <x-label for="budget" :value="__('Payment (in $)')" />
                    <x-input id="budget" class="block mt-1 w-full" type="number" min="0.00" step="0.01" name="budget" placeholder="e.g. 799.99" :value="$order->budget" required autofocus />
                </div>
                <div class="mb-8 mt-3">
                    <x-label for="deadline" :value="__('Deadline')" />
                    <x-data-picker name="deadline" id="deadline" old="$order->deadline" />
                </div>

                <x-my-button>Update</x-my-button>

            </form>
        </div>

    </div>
</x-app-layout>
