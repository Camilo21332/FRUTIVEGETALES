<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    use HasFactory;
// relacion uno a muchos inversa con clientes
    public function clientes()
    {
        return $this->belongsTo('App\Models\cliente');
    }
}
