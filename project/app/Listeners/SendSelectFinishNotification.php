<?php

namespace App\Listeners;

use App\Events\SelectFinish;
use App\Models\User;
use App\Notifications\FinishSelectNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
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
            $order = $offer::with('order')->get();
            $user = User::where('id', $order->user_id)->get();
        }
        Notification::send($user, new FinishSelectNotification($user, $notificationType));
    }
}
