<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class OrderStoredNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['mail']; // کانال ایمیل
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('سفارش جدید ثبت شد')
                    ->greeting('سلام 👋')
                    ->line('یک سفارش جدید ثبت شده است.')
                    ->line('شماره سفارش: ' . $this->order->id)
                    ->action('مشاهده سفارش', url('/orders/'.$this->order->id))
                    ->line('با تشکر از شما');
    }
}