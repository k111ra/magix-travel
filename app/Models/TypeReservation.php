<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeReservation extends Model
{
    use HasFactory;

    protected $table = 'type_reservations';

    protected $fillable = [ 
                'nom', 
            ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class,'type_reservations_id');
    }
}
