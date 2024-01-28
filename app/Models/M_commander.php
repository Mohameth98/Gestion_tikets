<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_commander extends Model
{
    use HasFactory;
    //selectionne la table sur lequel on travaille
    protected $table="commandetickets";
    //ce sont les colonnes de la table commandetickets qu'il faut absolument remplir
    protected $fillable=[
        'type_tickets',
        'nbre_ticket_repas',
        'nbre_ticket_petitdej',
        'idUtilisateur',
        'statut',
    ];

    public function validerCommande($id)
    {
        // Logique pour valider la commande
    }

    public function supprimerCommande($id)
    {
        $commande = M_commander::find($id);

        if (!$commande) {
            return redirect()->route('liste_commandes')->with('error', 'Commande non trouvée');
        }

        $commande->delete();

        return redirect()->route('liste_commandes')->with('success', 'Commande supprimée avec succès');
    }

    //La commande ne peut etre effectuee que par un utilisateur
    public function utilisateur()
    {
        return $this->belongsTo(M_utilisateur::class, 'id');
    }


}

