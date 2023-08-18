<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    
    // Relacion Uno a Muchos 
    public function mensajes(){
        return $this->hasMany('App\Models\mensaje');
    }


    public function clientes()
    {
        return $this->hasMany('App\Models\cliente');
    }
}
