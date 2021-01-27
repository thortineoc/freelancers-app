<title>Order Directory For Freelancers</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
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

            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!
            </div>
            @if($user->number_of_rates)
                <div class="p-6 bg-white border-b border-gray-200">
                    Your rating is: {{$user->avg_rate_time}} for time of work and {{$user->avg_rate_quality}} for quality.
                </div>
            @endif

        @foreach($user->notifications as $notification)

                @if($notification->data['notificationType'] == 'finish')
                <!-- display if is finished -->
                <div>
                    <div class="flex justify-between p-6 bg-yellow-100 font-bold border-yellow-500 mt-5">
                        <span>User {{$notification->data['offer']['user']['name']}} has just finished working on {{$notification->data['order']['title']}}</span>
                        <i>
                            <svg class="w-8 h-8 animate-pulse text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </i>
                    </div>

                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="my-3">Please rate {{$notification->data['offer']['user']['name']}}'s work on {{$notification->data['order']['title']}}</div>
                            <form method="post" action="\rate">
                                @csrf
                                <div>Quality of work:</div>
                                <div class="rating">
                                    <input id="star5" name="quality_rate" type="radio" value=5 class="radio-btn hidden" />
                                    <label for="star5">★</label>
                                    <input id="star4" name="quality_rate" type="radio" value=4 class="radio-btn hidden" />
                                    <label for="star4">★</label>
                                    <input id="star3" name="quality_rate" type="radio" value=3 class="radio-btn hidden" />
                                    <label for="star3">★</label>
                                    <input id="star2" name="quality_rate" type="radio" value=2 class="radio-btn hidden" />
                                    <label for="star2">★</label>
                                    <input id="star1" name="quality_rate" type="radio" value=1 class="radio-btn hidden" />
                                    <label for="star1">★</label>
                                </div>

                                <div>Satisfaction with time:</div>
                                <div class="rating">
                                    <input id="star10" name="time_rate" type="radio" value=5 class="radio-btn hidden" />
                                    <label for="star10" class>★</label>
                                    <input id="star9" name="time_rate" type="radio" value=4 class="radio-btn hidden" />
                                    <label for="star9">★</label>
                                    <input id="star8" name="time_rate" type="radio" value=3 class="radio-btn hidden" />
                                    <label for="star8">★</label>
                                    <input id="star7" name="time_rate" type="radio" value=2 class="radio-btn hidden" />
                                    <label for="star7">★</label>
                                    <input id="star6" name="time_rate" type="radio" value=1 class="radio-btn hidden" />
                                    <label for="star6">★</label>
                                </div>

                                <div>
                                    <input type="hidden" name="user_id" id="user_id" value={{intVal($notification->data['offer']['user_id'])}} />
                                    <input type="hidden" name="notification_id" id="notification_id" value="{{$notification->id}}" />
                                </div>

                                <x-my-button>Submit</x-my-button>
                            </form>
                        </div>
                    </div>

                @endif
                @if($notification->data['notificationType'] == 'accept')

                <!-- display if need to be accepted-->
                <div>
                    <div class="flex justify-between p-6 bg-yellow-100 font-bold border-yellow-500 mt-5">
                        <span>Your job offer to {{$notification->data['order']['title']}} was selected.</span>
                        <i>
                            <svg class="w-8 h-8 animate-pulse text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </i>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="post" action="{{route('orders.offer.accept', [$notification->data['order']['id'], $notification->data['offer']['id']])}}">
                            @csrf
                            <div class="my-2 text-green-700">
                                <label for="accept">Accept</label>
                                <input type="radio" value=1 id="accept" name="accept" class="text-green-700 cursor-pointer ml-2" />
                            </div>
                            <div class="mb-4 mt-2 text-red-700">
                               <label for="decline">Decline</label>
                               <input type="radio" value=0 id="decline" name="accept" class="text-red-700 cursor-pointer ml-2" />
                                <input type="hidden" name="notification_id" id="notification_id" value="{{$notification->id}}" />
                            </div>
                            <x-my-button>Confirm</x-my-button>
                        </form>
                    </div>
                </div>

                @endif
                @endforeach
        </div>
    </div>
</x-app-layout>
