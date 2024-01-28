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
        Schema::create('commander', function (Blueprint $table) {
            $table->id();
            $table->string('type_tickets');
            $table->string('nbre_ticket_repas');
            $table->string('nbre_ticket_petitdej');
            $table->unsignedBigInteger('idUsers');
            $table->foreign('idUsers')->references('id')->on('users')->onDelete('cascade');
           // php artisan make:migration add_colonnes_to_ma_table pour ajouter des colonnes dans une table deja exist
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commander');
    }
};
