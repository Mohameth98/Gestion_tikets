<?php

namespace App\Http\Controllers;
use App\Models\M_utilisateur;
use App\Models\M_commander;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //appel le login form
    public function showLoginForm()
    {
        return view('login');
    }

    //fonction connexion
    public function login(Request $request){
        //if($user && $user->motDepasse === $request->mdp)//si les mdp ne sont pas haches
        $user= M_utilisateur::where('email',$request->email)->first();
           if($user && Hash::check($request->mdp,$user->motDepasse))    // on utilise ce code si les mots de passes sont haches en BDD
        {
            $nombreUtilisateurs = M_utilisateur::count();
            $nombreCommande=M_commander::count();
            Auth::login($user);//recupere l'utilisateur loger et la passe a la vue
            return view('template.layout',compact('user','nombreUtilisateurs','nombreCommande'));
        }
        else{
            return redirect()->back()->with('error','identifiants invalides');
        }
    }

    //deconnexion
    public function logout()
    {
        Auth::logout();
        return redirect('login'); // Rediriger vers la page de connexion après la déconnexion
    }


    
}
