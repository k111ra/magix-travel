<?php

namespace App\Notifications;

use App\Mail\AlerteCommande;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AlerteCommandes extends Notification
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
        // if ($this->reception == 'customer') {
        //     return (new MailMessage)
        //         ->subject('Nous avons bien reçu votre réservation')
        //         ->view('alerte.reservationTour.client', ['reservation' => $this->reservation]);
        // } elseif ($this->reception == 'admin') {
        //     return (new MailMessage)
        //         ->subject('Nouvelle réservation effectuée')
        //         ->view('alerte.reservationTour.admin', ['reservation' => $this->reservation]);
        // }

        if ($this->reception == 'customer') {
            return (new MailMessage)
                ->subject('Nous avons bien reçu votre réservation')
                ->view('alerte.reservationTour.client', ['reservation' => $this->reservation]);
        } elseif ($this->reception == 'admin') {
            return (new MailMessage)
                ->subject('Nouvelle réservation effectuée')
                ->view('alerte.reservationTour.admin', ['reservation' => $this->reservation]);
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
