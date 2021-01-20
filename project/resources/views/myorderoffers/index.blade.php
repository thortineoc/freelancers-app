<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __("Job offers to $order->title") }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <p class="my-10">You can choose a few applications. The order in which you select is going to indicate the priorities.</p>

        @forelse ($offers as $offer)

            <div class="flex flex-col w-full sm:max-w-md my-8 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <h2 class="font-bold text-2">
                    {{ $offer->user->name }}
                </h2>
                <div class="text-gray-600 flex-start">
                    <button id="toogle_{{$offer->id}}" onclick="myFunction({{$offer->id}});" class="focus:outline-none">Show user ratings</button>
                </div>
                <div id="ratings_{{$offer->id}}" class="bg-gray-200 m-0 p-5">

                    <div id="quality p-3">
                        <div>
                            Quality of work:
                        </div>
                        <div class="m-3 flex">
                            <div id="quality_{{$offer->id}}" class="flex flex-row"></div>
                            <span class="text-gray-600 mx-6 justify-center">Exact rate: {{ $offer->user->avg_rate_quality }}</span>
                        </div>
                    </div>
                    <div id="time">
                        <div>
                            Satisfaction with time:
                        </div>
                        {{ $offer->user->avg_rate_time }}
                    </div>
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
                <div class="flex justify-end">
                    <span class="m-2 justify-center text-gray-500" id="{{ $offer->id }}_priority"></span>
                    <input type="checkbox" name="{{ $offer->id }}" id="{{ $offer->id }}" class="focus:outline-none form-checkbox h-10 w-10 text-green-600">
                </div>
            </div>

        @empty

            <p>Nobody applied for that job.</p>

        @endforelse

        @if(count($offers))

        <form id="sampleForm" name="sampleForm" method="post" action="{{url('/update')}}" >
            @csrf <!-- {{ csrf_field() }} -->
            <input type="hidden" name="total" id="total" value="">
            <x-my-button onclick="setValue();" class="my-10">Sumbit</x-my-button>
        </form>

        @endif

    </div>

    <script>
        const elementList = document.querySelectorAll('input[type=checkbox]');
        const map = new Map();

        let priority = 1;
        elementList.forEach(element => element.addEventListener('change', function() {
            if(this.checked) {
                map.set(this.id, priority);
                let spanId = this.id + "_priority";
                document.getElementById(spanId).innerHTML = "priority " + priority;
                priority++;
            } else {
                map.delete(this.id);
                let spanId = this.id + "_priority";
                document.getElementById(spanId).innerHTML = "";
                priority--;
            }
        }))

        function mapToJson(m) {
            return JSON.stringify([...m]);
        }

        function setValue() {
            document.sampleForm.total.value = mapToJson(map);
            document.forms["sampleForm"].submit();
        }

    </script>


    <script>
        function myFunction(id) {
            const x = document.getElementById("ratings_" + id);
            const button = document.getElementById("toogle_" + id);
            if(x.style.display === "none") {
                x.style.display = "block";
                button.innerHTML = "Hide";
            } else {
                x.style.display = "none";
                button.innerHTML = "Show user ratings";
            }
        }
    </script>

    <script>
        const r1 = document.getElementById("res1");

        function getRankStars(rank, id){
            const wStars = Math.floor(rank);
            let output="";
            for(let i=1; i<=5; i++) {
                if(i <= wStars){
                    output += "<svg class=\"mx-1 w-4 h-4 fill-current text-yellow-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><path d=\"M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z\"/></svg>"
                } else {
                    output += "<svg class=\"mx-1 w-4 h-4 fill-current text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\"><path d=\"M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z\"/></svg>"

                }
            }
            res1.innerHTML = output;
        }
    </script>

</x-app-layout>
