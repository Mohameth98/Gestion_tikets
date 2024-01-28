<?php


namespace App\Http\Controllers;
use App\Models\M_utilisateur;
use App\Models\M_commander;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class voirCmd extends Controller
{ 
    public function index(){
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();
        // Récupérer les commandes associées à l'utilisateur
        $commandes = $user->commander;
        return view('voirCommande',compact('commandes','user'));
    }
}
