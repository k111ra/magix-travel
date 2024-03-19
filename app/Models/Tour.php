<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['nom', 'description', 'duree', 'prix', 'destination', 'place', 'date_depart', 'moyen_transport', 'images'];

    protected $casts = [
        'images' => 'array',
    ];

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = array_map(function ($image) {
            // Generate a unique name for the image
            $name = uniqid() . '.' . $image->getClientOriginalExtension();

            // Store the image in the folder
            $image->storeAs('public/images/tour', $name);

            return $name;
        }, $value);
    }

}

