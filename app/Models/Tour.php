<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['nom', 'description', 'destinations_id', 'duree', 'prix', 'place', 'date_depart', 'moyen_transport', 'images'];

    // protected $casts = [
    //     'images' => 'array',
    // ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

}

