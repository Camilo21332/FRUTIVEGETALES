<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('PRODUCTnombres');
            $table->string('PRODUCTtiempo_reclamo');

          // $table->unsignedBigInteger('user_id'); // Clave foránea
          //  $table->unsignedBigInteger('cliente_id'); 

           // $table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('cliente_id')->references('id')->on('clientes');
            
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
        Schema::dropIfExists('productos');
    }
}
