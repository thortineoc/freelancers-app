<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __("Job offers to $order->title") }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <p class="my-10">You can choose up to 3 applications. The order in which you select is going to indicate the priorities.</p>

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
            </div>

        @empty

            <p>Nobody applied for that job.</p>

        @endforelse

        <form id="sampleForm" name="sampleForm" method="post" action="" >
            <input type="hidden" name="total" id="total" value="">
            <a href="#" onclick="setValue();">Click to submit</a>
        </form>

    </div>
    </div>

    <script>
        let elementList = document.querySelectorAll('input[type=checkbox]');
        let ids = [...elementList].map(item => item.id);
        let map = new Map();
        ids.forEach(element => map.set(element, 0))

        let priority = 1;
        elementList.forEach(element => element.addEventListener('change', function() {
            if(this.checked) {
                map.set(this.id, priority);
                console.log(this.id, 'has priority', priority);
                priority++;
            } else {
                map.set(this.id, 0);
                priority--;
            }
        }))

        function mapToJson(m) {
            return JSON.stringify([...m]);
        }

        function setValue() {
            document.sampleForm.total.value = mapToJson(map);
            console.log(document.sampleForm.total.value);
            document.forms["sampleForm"].submit();
        }

    </script>

</x-app-layout>
