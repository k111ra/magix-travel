<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['nom', 'description', 'duree', 'prix', 'destination', 'place', 'date_depart', 'moyen_transport', 'images'];

    protected $casts = [
        'images' => 'array',
    ];



}

