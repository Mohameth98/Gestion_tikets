<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


class M_utilisateur extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;
    
    protected $table="users";
    //ce sont les colones de la table commandetickets qu'il faut absolument remplir
    protected $fillable=[
        'nom',
        'prenom',
        'email',
        'num_tel',
        'motDepasse',
        'confMdp',
         'role',
    ];

   // L'utilisateur peut commander plusieurs tickets
   //on lui passe le parametre idUsers pour specifier la cle etrangere
    public function commander(){
        return $this->hasMany(M_commander::class,'idUsers');
    }
 
    // public function getAuthPassword(){
    //     return $this->motDepasse;
    // }

    // public function validateCredentials($user, array $credentials) {
    //     $plain = $credentials['motDepasse'];
    //      return $this->hasher->check($plain, $user->getAuthPassword());
    //        }

    
}
?>