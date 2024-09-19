<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'num_persons',
        'destination_depart',
        'destination_final',
        'date_depart',
        'date_retour',
        'nombre_bebe',
        'nombre_enfant',
        'nombre_adultes',
        'ref_reservation',
        'type_reservations_id',

        'nom',
        'prenoms',
        'email',
        'contact',
        'numero_whatsapp',
        'adresse',
    ];

    public static function ref_reser()
    {
        return self::selectRaw('count(*) as count')->first();
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function vol()
    {
        return $this->belongsTo(Vol::class);
    }
    public function client()
    {
        return $this->belongsTo(User::class);
    }

    public function typeReservation()
    {
        return $this->belongsTo(TypeReservation::class ,'type_reservations_id');
    }
}
