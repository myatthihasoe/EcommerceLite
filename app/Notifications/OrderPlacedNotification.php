<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderPlacedNotification extends Notification
{
    use Queueable;

    protected $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Order Confirmation')
            ->greeting('Hello ' . $notifiable->name . ',')
            ->line('Thank you for your order!')
            ->line('Order ID: ' . $this->order->id)
            ->line('Total Amount: ' . $this->order->total . ' MMK')
            ->action('View Order', url('/orders/' . $this->order->id))
            ->line('We appreciate your business!');
    }
}
