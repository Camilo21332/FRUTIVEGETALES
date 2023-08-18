<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;

    // relacion uno a muchos inversa con cliente
    public function cliente()
    {
        return $this->belongsTo('App\Models\cliente');
    }
}
