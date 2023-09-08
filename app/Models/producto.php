<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function carritosCompras()
    {
        return $this->hasMany('App\Models\carrito_compra');
    }
}
