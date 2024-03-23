<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

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
}
