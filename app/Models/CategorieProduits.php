<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieProduits extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        
    ];

     // une commande est passée par un seul client 
     public function client()
     {
         return $this->hasMany(Produits::class);
     }
}
