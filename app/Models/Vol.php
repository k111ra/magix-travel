<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;

    protected $fillable = [
        'compagnie_aerienne',
        'depart_id',
        'destination_id',
        'date_depart',
        'prix',
    ];

    public function depart()
    {
        return $this->belongsTo(Destination::class, 'depart_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
