<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['name', 'description'];


    public function volsDepart()
    {
        return $this->hasMany(Vol::class, 'depart_id');
    }

    public function volsArrivee()
    {
        return $this->hasMany(Vol::class, 'destination_id');
    }
}

