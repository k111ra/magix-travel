<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'libelle',
        
    ];

     // une filiere peut appartenir a plusieurs etudiants
    
     public function client()
     {
         return $this->belongsTo(Client::class);
     }
     
     public function produit()  
     {  
         // Un devis concerne plusieurs produits. 
         return $this->belongsToMany(Produits::class);  
     }  
}
