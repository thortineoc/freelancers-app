<?php

namespace App\Listeners;

use App\Events\SelectFinish;
use App\Models\User;
use App\Notifications\FinishSelectNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class SendSelectFinishNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SelectFinish  $event
     * @return void
     */
    public function handle(SelectFinish $event)
    {
        $offer = $event->offer;
        $notificationType = $event->notificationType;
        if($notificationType == "accept")
        {
            $user = User::where('id', $offer->user_id)->get();
        }
        else
        {
            $offer = $offer::where('id', $offer->id)->with('order')->first();
            $user = User::where('id', $offer->order->user_id)->get();
        }
        Notification::send($user, new FinishSelectNotification($offer, $notificationType));
    }
}

