<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['nom', 'description', 'type_tours_id','destinations_id', 'duree', 'status','prix', 'place', 'date_depart', 'moyen_transport', 'images'];

    // protected $casts = [
    //     'images' => 'array',
    // ];

    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'destinations_id');
    }

    public function typeTour()
    {
        return $this->belongsTo(TypeTour::class ,'type_tours_id');
    }

}

