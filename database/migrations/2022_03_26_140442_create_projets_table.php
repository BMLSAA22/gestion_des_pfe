<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('path');
            $table->string('description');
            $table->string('isValidated')->default('invalid');
            $table->foreignId('prof_id')->nullable()->constrained('profs');
            $table->foreignId('niveaux_id')->nullable()->constrained('niveaux');
            $table->foreignId('specialites_id')->nullable()->constrained('specialites');
            
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
