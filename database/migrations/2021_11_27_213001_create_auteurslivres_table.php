<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteurslivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteurslivre', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('livres_id')->constrained('livres')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('auteurs_id')->constrained('auteurs')->onDelete('cascade')->onUpdate('cascade');
             $table->timestamps();
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auteurslivre');
    }
}
