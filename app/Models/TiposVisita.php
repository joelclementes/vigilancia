<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposVisita extends Model
{
    //
    protected $table = 'tipos_visita';
    protected $fillable = ["nombre"];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
