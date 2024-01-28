<?php

use App\Http\Controllers\C_commander;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('voir_commande', function () {
//      return view('voir_commande');});

Route::get('/voir_commande', [C_commander::class, 'index'])->name('voir_commande');
// le controller de profile
Route::get('/profile', [ProfileController::class, 'Monprofile'])->name('profile');
// controller pour faire un ajout
Route::post('/ajouter-commande', [C_commander::class, 'ajouter']);
//controller pour faire une validation
Route::post('/valider-commande/{id}', [C_commander::class, 'validerCommande'])->name('valider_commande');
//controller pour faire une suppression
Route::delete('/supprimer-commande/{id}', [C_commander::class, 'supprimerCommande'])->name('supprimer_commande');
