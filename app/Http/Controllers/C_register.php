<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_register extends Controller
{
    public function index ()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nom_ut' => 'required',
            'prenom_ut' => 'required',
            'email_ut' => 'required|email|unique:utilisateurs,email',
            'num_tel' => 'required',
            'motDepasse' => 'required|min:6',
        ]);

        $user = new M_utilisateur([
            'nom' => $request->input('nom_ut'),
            'prenom' => $request->input('prenom_ut'),
            'email' => $request->input('email_ut'),
            'num_tel' => $request->input('num_tel'),
            'mot_de_passe' => bcrypt($request->input('motDepasse')),
        ]);

        $user->save();
       // Ou redirigez vers la page de connexion, par exemple
        return Redirect::to('/login')->with('success', 'Enregistrement réussi!');

    }
}
