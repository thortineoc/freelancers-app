<?php

namespace App\Notifications;

use App\Models\Offer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FinishSelectNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @param Offer $offer
     * @param string $notificationType
     */
    public function __construct(Offer $offer, string $notificationType)
    {
        $this->offer = $offer;
        $this->notificationType = $notificationType;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'notificationType' => $this->notificationType,
            'offer' => Offer::whereId($this->offer->id)->with('user')->first(),
            'order' => Order::whereId($this->offer->order_id)->with('user')->first()
        ];
    }
}
