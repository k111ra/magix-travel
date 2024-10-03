<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Mail\AlerteCommandeVol;
use App\Mail\AlerteCommandeHotel;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AlerteCommandesVol extends Notification
{
    use Queueable;

    public $reservation;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reservation)
    {
        //
        $this->reservation =$reservation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new AlerteCommandeVol($notifiable))
        ->to($notifiable->email);      
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
            //
        ];
    }
}
