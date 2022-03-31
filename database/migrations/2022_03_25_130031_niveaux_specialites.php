<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NiveauxSpecialites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('niveaux_specialites', function (Blueprint $table) {
        $table->foreignId('specialites_id')
        ->nullable()
        ->constrained('specialites');
        $table->foreignId('niveaux_id')
        ->nullable()
        ->constrained('niveaux');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('niveaux_specialites');
    }
}
