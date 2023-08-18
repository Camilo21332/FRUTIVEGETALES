<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class administrador extends Model
{
    use HasFactory;

   //Relacion Uno a Muchos
   public function mensajes(){
    return $this->hasMany('App\Models\mensaje');
}

   
    public function ventas()
    {
        return $this->hasMany('App\Models\ventas');
    }

}


