<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_compagnie',
        'localisation',
        'contact',
        'lien_google_map',
        'email'
    ];
}
