<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('conductores', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('ciudad');
        $table->integer('puntos');
        //no he incluido el timestamp porque vi en la captura del pdf que no lo incluia
        
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductores');
    }
};

