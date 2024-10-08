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
    public $reception;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reservation, $reception)
    {
        // 
        $this->reservation = $reservation;
        $this->reception = $reception;
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
        if ($this->reception == 'customer') {
            return (new MailMessage)
                ->subject('Nous avons bien reçu votre réservation')
                ->view('alerte.reservationVol.client', ['reservation' => $this->reservation]);
        } elseif ($this->reception == 'admin') {
            return (new MailMessage)
                ->subject('Nouvelle réservation effectuée')
                ->view('alerte.reservationVol.admin', ['reservation' => $this->reservation]);
        }
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
            // Ajoute ici des données supplémentaires si nécessaire
        ];
    }
}
