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
        'status',
        'images'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destinations_id');
    }

}
