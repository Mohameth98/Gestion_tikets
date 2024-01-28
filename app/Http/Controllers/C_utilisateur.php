<?php

namespace App\Http\Controllers;
use App\Models\M_utilisateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class C_utilisateur extends Controller
{
    public function index(){
       $user=Auth::user();
        return view('profil',compact('user'));
    }
   
    
    // public function login(Request $request){
    //     //if($user && $user->motDepasse === $request->mdp)//si les mdp ne sont pas haches
    //     $user= M_utilisateur::where('email',$request->email)->first();
    //    // if (Auth::attempt(['email' => $request->email, 'motDepasse' => $request->mdp])) {
    //        // $user = Auth::user(); 
    //        if($user && Hash::check($request->mdp,$user->motDepasse))    // on utilise ce code si les mots de passes sont haches en BDD
    //     {
    //         Auth::login($user);
    //         return view('template.layout',compact('user'));
    //     }
    //     else{
    //         return redirect()->back()->with('error','identifiants invalides');
    //     }
    // }
}