<?php
namespace App\Models;

use App\Models\Vol;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'images','status'];

    // protected $casts = [
    //     'images' => 'array',
    // ];

    public function volsDepart()
    {
        return $this->hasMany(Vol::class, 'depart_id');
    }

    public function volsArrivee()
    {
        return $this->hasMany(Vol::class, 'destination_id');
    }

    public function tours()
    {
        return $this->hasMany(Tour::class, 'destinations_id');
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'hotel_id');
    }
}

