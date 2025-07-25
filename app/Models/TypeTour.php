<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTour extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class, 'type_tours_id');
    }
}
