<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbastecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abastecimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('administrador_id'); // Clave foránea
            $table->string('PUNTnombre');

            $table->timestamps();

            $table->foreign('administrador_id')->references('id')->on('administradors');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abastecimientos');
    }
}
