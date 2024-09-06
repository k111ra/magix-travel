<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'localisation',
        'destinations_id',
        'etoiles',
        'prix',
        'images'
    ];

    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'destinations_id');
    }

}
