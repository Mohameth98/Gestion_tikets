<?php

use App\Http\Controllers;
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


Route::any('/login', [Controllers\AuthController::class,'showLoginForm'])->name('login');
Route::post('/loginAction', [Controllers\AuthController::class,'login'])->name('action/login');
Route::any('logout', [Controllers\AuthController::class,'logout'])->name('logout');

   
Route::get('/layout', [Controllers\Controller::class,'index'])->name('layout');

Route::middleware(['auth','role:etudiant'])->group(function () {
 
    // formulaire de commande
Route::get('/commander', [Controllers\C_commander::class,'index'])->name('commander');

//ajouter commande dans la base de donnees 
Route::any('ajouter/cmd', [Controllers\C_commander::class,'ajouter'])->name('ajouter/cmd');

//profil
Route::get('/profil', [Controllers\C_utilisateur::class,'index'])->name('profil');

//afficher commande utilisateur specifiquement
Route::get('/voirCmd', [Controllers\voirCmd::class,'index'])->name('voirCmd');

 Route::get('edit/{id}/cmd',[Controllers\C_commander::class,'edit'])->name('edit/cmd');

 Route::any('edit/{id}/Action',[Controllers\C_commander::class,'editAction'])->name('edit/Action');

 Route::get('delete/{id}/cmd',[Controllers\C_commander::class,'delete'])->name('delete/cmd');
}); 


 Route::middleware(['auth','role:agent'])->group(function(){
   Route::get('testAgent', [Controllers\Controller::class,'index2'])->name('testAgent');
 })


?>