<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_commander extends Model
{
    use HasFactory;
    //selectionne la table sur lequel on travaille
    protected $table="commander";
    //ce sont les colonnes de la table commandetickets qu'il faut absolument remplir
    protected $fillable=[
       // 'type_tickets',
        'nbre_ticket_repas',
        'nbre_ticket_petitdej',
        'idUsers',
        'statut',
    ];
    
    //La commande ne peut etre effectuee que par un utilisateur 
    //on lui passe id en parametre pour trouver l'utilisateur qui effectue la commande
    public function users()
    {
        return $this->belongsTo(M_utilisateur::class,'id');
    }   
   
}
?>