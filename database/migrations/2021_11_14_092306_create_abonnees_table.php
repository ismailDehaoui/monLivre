<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_abonnee');
            $table->string('prenom_abonnee');
            $table->string('email_abonnee')->unique();
            $table->string('adresse_abonnee');
            $table->string('image');
            $table->date('date_naissance_abonnee');
            $table->date('date_expiration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnees');
    }
}
