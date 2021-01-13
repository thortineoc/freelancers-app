<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __("Job offers to $order->title") }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        @forelse ($offers as $offer)

            <div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <h2 class="font-bold text-2">
                    {{ $offer->user->name }}
                </h2>
                <div class="my-5">
                    {{ $offer->details }}
                </div>
                <div>
                    Price: {{ $offer->price }} $
                </div>
                <div class="mb-5">
                    Deadline: {{ $offer->deadline }}
                </div>
                <div class="flex justify-end">
                    <input type="checkbox" name="{{ $offer->id }}" id="{{ $offer->id }}" class="focus:outline-none form-checkbox h-10 w-10 text-green-600">
                </div>
                {{ $offer->id }}
            </div>

        @empty

            <p>Nobody applied for that job.</p>

        @endforelse

    </div>
    </div>

    <script>
        let elementList = document.querySelectorAll('input[type=checkbox]');
        let ids = [...elementList].map(item => item.id);
        //console.log(elementList[0]);
        //let array = Array.from(elementList);
        console.log(elementList);
        let map = new Map();
        ids.forEach(element => map.set(element, 0))
        console.log(map);

        let priority = 1;
        elementList.forEach(element => element.addEventListener('change', function() {
            if(this.checked) {
                map.set(this.id, priority);
                priority++;

            } else {
                console.log("unchecked")
            }
        }))

    </script>

</x-app-layout>
