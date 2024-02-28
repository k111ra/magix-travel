<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'libelle',
        
    ];

     // une commande est passée par un seul client 
     public function client()
     {
         return $this->belongsTo(Client::class);
     }
     
     public function produit()  
     {  
         // Un produit concerne plusieurs commandes. 
         return $this->belongsToMany(Produits::class);  
     } 
}
