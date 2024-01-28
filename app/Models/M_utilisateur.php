<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_utilisateur extends Model
{
    use HasFactory;


    protected $table = "utilisateur";

    protected $fillable = [
        'nom_ut',
        'prenom_ut',
        'email_ut',
        'motDePasse',
        'num_tel',
    ];

    // L'utilisateur peut commander plusieurs tickets
    public function commandetickets()
    {
        return $this->hasMany(M_commander::class, 'id');
    }
}
