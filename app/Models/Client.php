<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

     // un client passe  plusieurs commandes
    
     public function commande()
     {
         return $this->hasMany(Commandes::class);
     }

     //un client demande plusieurs devis
     
     public function devis()
     {
        return $this->hasMany(Devis::class);
     }
     
 
}
