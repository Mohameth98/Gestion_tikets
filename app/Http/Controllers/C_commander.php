<?php

namespace App\Http\Controllers;
use App\Models\M_commander;
use App\Models\M_utilisateur;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class C_commander extends Controller
{
    public function index(){
        // Récupérer l'utilisateur connecte 
        $user=Auth::user(); 
        //on le passe au formulaire de creation de tickets 
        return view('commander', compact('user'));
    }

    public function ajouter(Request $request) { 
      //valider les donnees du formulaire
       $request->validate([
       // 'type_tickets'=>'required|String',
        'nbre_ticket_repas'=>'required|int',
        'nbre_ticket_petitdej'=>'required|int',
        'idUsers'=> 'required|exists:users,id',
       ]);

      $nbre_ticket_repas=$request->nbre_ticket_repas;
      $nbre_ticket_petitdej=$request->nbre_ticket_petitdej;
     // Calculer le montant total
      $montant_total = (100 * $nbre_ticket_repas) + (50 * $nbre_ticket_petitdej);

       //creer une nouvelle commande
       M_commander::create([
       // 'type_tickets'=> $request->type_tickets,
        'nbre_ticket_repas'=> $request->nbre_ticket_repas,
        'nbre_ticket_petitdej'=>$request->nbre_ticket_petitdej,
        'idUsers' => $request->idUsers,
       ]); 
      

       //$total= 100*{{$nbre_ticket_repas}} + 50*{{$nbre_ticket_petitdej}}; 
       //rediger vers la page de commande de tickets
       return redirect('commander')->with('status',"Commande enregistree !! vous devez payer $montant_total FCFA ")->with('montant_total', $montant_total);
    }

    public function edit(int $id){
        $cmd=M_commander::findOrFail($id);
        $user=Auth::user();
        //return $cmd;
        return view('editCmd',compact('cmd','user'));
    }

    //methode de moodification de commande
    public function editAction(Request $request,int $id){
        $request->validate([
            // 'type_tickets'=>'required|String',
             'nbre_ticket_repas'=>'required|int',
             'nbre_ticket_petitdej'=>'required|int',
             'idUsers'=> 'required|exists:users,id',
            ]);

            M_commander::findOrFail($id)->update([
                // 'type_tickets'=> $request->type_tickets,
                 'nbre_ticket_repas'=> $request->nbre_ticket_repas,
                 'nbre_ticket_petitdej'=>$request->nbre_ticket_petitdej,
                 'idUsers' => $request->idUsers,
                ]); 
             return redirect()->back()->with('status','Commande modifiee');
     
    }
    //methode de supression de commande
    public function delete(int $id){
        $cmd=M_commander::findOrFail($id);
        $cmd->delete();
        return redirect()->back()->with('status','Commande supprimee !!!');
    }
}
?>