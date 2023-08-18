<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\Models\user');
    }
//relacion uno a muchos con compra
    public function compras()
    {
        return $this->hasMany('App\Models\compra');
    }
// relacion uno a muchos con pagos
    public function pagos()
    {
        return $this->hasMany('App\Models\pago');
    }

}
