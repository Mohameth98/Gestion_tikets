<?php

namespace App\Http\Controllers;
use App\Models\M_commander;
use App\Models\M_utilisateur;

use Illuminate\Http\Request;

class C_commander extends Controller
{
    public  $commandeTickets ;
    public function index(){
        // Récupérer tous les utilisateurs pour les passer au formulaires commander
        $commandeTickets = M_commander::all();
        // $commandeTickets = M_commander::with('utilisateur')->get();
        //utilisateur:all() fait reference a la fonction utiisateur cree
        //dans M_commander il puise dans la base de donnees et le passe au modele
        //on les passe au formulaire de creation de tickets
        return view('/voir_commande', compact('commandeTickets'));

    }

    public function ajouter(Request $request) {
      //valider les donnees du formulaire
       $request->validate([
        'type_tickets'=>'required|String',
        'nbre_ticket_repas'=>'required|int',
        'nbre_ticket_petitdej'=>'required|int',
        'idUtilisateur'=> 'required|exists:ut   ilisateur,id',
             ]);

       //creer une nouvelle commande

       M_commander::create([
        'type_tickets'=> $request->type_tickets,
        'nbre_ticket_repas'=> $request->nbre_ticket_repas,
        'nbre_ticket_petitdej'=>$request->nbre_ticket_petitdej,
        'idUtilisateur' => $request->idUtilisateur,
       ]);

       //$total= 100*{{$nbre_ticket_repas}} + 50*{{$nbre_ticket_petitdej}};
       //rediger vers la page de commande de tickets
       return redirect('commander',)->with('status','Commande enregistree!! vous devez payez Francs');
    }

           // la fonction nous permettant de valider le commande
            public function validerCommande($id)
            {
                $commande = M_commander::find($id);

                if (!$commande) {
                    return redirect()->back()->with('error', 'Commande non trouvée.');
                }

                // Appliquer la logique de validation de la commande
                $commande->statut = 'validée';
                $commande->save();

                return redirect()->back()->with('success', 'Commande validée avec succès.');
            }

            public function supprimerCommande($id)
            {
                // Récupérer la commande à supprimer
                $commande = M_commander::find($id);

                if (!$commande) {
                    return redirect()->back()->with('error', 'Commande non trouvée.');
                }

                // Supprimer la commande
                $commande->delete();

                return redirect()->back()->with('success', 'Commande supprimée avec succès.');
            }

  }
