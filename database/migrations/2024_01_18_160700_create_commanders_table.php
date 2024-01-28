<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commandetickets', function (Blueprint $table) {
            $table->id();
            $table->string('type_tickets');
            $table->integer('nbre_ticket_repas');
            $table->integer('nbre_ticket_petitdej');
            $table->unsignedBigInteger('idUtilisateur');
            $table->string('statut')->default('en attente'); // Nouvelle colonne pour le statut
            $table->timestamps();

            // Clé étrangère vers la table M_utilisateur
           // $table->foreignId('idUtilisateur')->constrained('utilisateur');

            $table->foreign('idUtilisateur')->references('id')->on('utilisateur')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandetickets');
    }
};
