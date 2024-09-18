<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'tour_id',
        'hotel_id',
        'vol_id',
        'reservation_date',
        'amount',
        'num_persons',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'nombre_bebe',
        'nombre_enfant',
    ];

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
