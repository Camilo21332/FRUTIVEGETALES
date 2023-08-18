<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
           $table->unsignedBigInteger('administrador_id')->nullable();
            $table->string('MENnombre_chat');
         
       //relacion con cliente
           /* $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes')->onDelete('set null');*/

            //relacion con user
              $table->foreign('user_id')
             ->references('id')
              ->on('users')->onDelete('set null');

            //relacion con adminstrador
            $table->foreign('administrador_id')
            ->references('id')
            ->on('administradors')->onDelete('set null');
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
        Schema::dropIfExists('mensajes');
    }
}
