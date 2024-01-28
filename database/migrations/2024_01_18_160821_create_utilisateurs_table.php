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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('nom_ut');
            $table->string('prenom_ut');
            $table->string('email_ut')->unique();
            $table->string('num_tel');
            $table->string('motDePasse');
            $table->string('confMdp');
            $table->string('role');
            $table->timestamps();

                // Ajout de la clé étrangère

            $table->foreignId('commandeticket_id')->constrained('commandetickets')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateur');
    }
};
