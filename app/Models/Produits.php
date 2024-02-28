<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'libelle',
        
    ];
     
    public function commande()  
    {  
        // Une commande concerne plusieurs produits. 
        return $this->belongsToMany(Commandes::class);  
    } 

     public function devis()  
     {  
         // Un devis concerne plusieurs produits. 
         return $this->belongsToMany(Devis::class);  
     } 

     public function users()  
     {  
         // Un produit concerne un seul utilisateur. 
         return $this->belongs(User::class);  
     } 

     public function Categorie()  
     {  
         // Un devis concerne plusieurs devis. 
         return $this->belongsTo(CategorieProduits::class);  
     } 
}
