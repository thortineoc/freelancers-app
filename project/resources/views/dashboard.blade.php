<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>

        .rating {
            width: 90px;
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
            position: relative;
        }

        .rating > label {
            float: right;
            display: inline;
            padding: 0;
            margin: 0;
            position: relative;
            width: 1.1em;
            cursor: pointer;
            color: #6B7280;
        }

        .rating > label:hover,
        .rating > label:hover ~ label,
        .rating > input.radio-btn:checked ~ label {
            color: transparent;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before,
        .rating > input.radio-btn:checked ~ label:before,
        .rating > input.radio-btn:checked ~ label:before {
            content: "\2605";
            position: absolute;
            left: 0;
            color: #F59E0B;
        }

    </style>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                <!-- dispaly if is finished -->

                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="my-3">Please rate $name $surname's work on $order</div>
                        <form method="post" action="\dashboard">
                            <div>Quality of work:</div>
                            <div class="rating">
                                <input id="star5" name="quality_rate" type="radio" value="5" class="radio-btn hidden" />
                                <label for="star5" class="w-6 h-6">★</label>
                                <input id="star4" name="quality_rate" type="radio" value="4" class="radio-btn hidden" />
                                <label for="star4">★</label>
                                <input id="star3" name="quality_rate" type="radio" value="3" class="radio-btn hidden" />
                                <label for="star3">★</label>
                                <input id="star2" name="quality_rate" type="radio" value="2" class="radio-btn hidden" />
                                <label for="star2">★</label>
                                <input id="star1" name="quality_rate" type="radio" value="1" class="radio-btn hidden" />
                                <label for="star1">★</label>
                            </div>

                            <div>Satisfaction with time:</div>
                            <div class="rating">
                                <input id="star6" name="time_rate" type="radio" value="5" class="radio-btn hidden" />
                                <label for="star6" class="w-6 h-6">★</label>
                                <input id="star7" name="time_rate" type="radio" value="4" class="radio-btn hidden" />
                                <label for="star7">★</label>
                                <input id="star8" name="time_rate" type="radio" value="3" class="radio-btn hidden" />
                                <label for="star8">★</label>
                                <input id="star9" name="time_rate" type="radio" value="2" class="radio-btn hidden" />
                                <label for="star9">★</label>
                                <input id="star10" name="time_rate" type="radio" value="1" class="radio-btn hidden" />
                                <label for="star10">★</label>
                            </div>

                            <x-my-button>Sumbit</x-my-button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
