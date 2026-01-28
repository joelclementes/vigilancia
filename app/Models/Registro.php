<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';
    protected $fillable = [
        'para_evento',
        'num_personas',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'a_quien_visita',
        'asunto',
        'dependencia_id',
        'tipo_visita_id',
        'municipio_id',
        'area_id',
        'diputado_id',
        'gafet',
        'user_id',
    ];

    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }

    // 🔹 Relación con Tipo de visita
    public function tipoVisita()
    {
        return $this->belongsTo(TiposVisita::class, 'tipo_visita_id');
    }

    // 🔹 Relación con Municipio
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function diputado()
    {
        return $this->belongsTo(Diputado::class);
    }

    // 🔹 Relación con Usuario (modelo User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
}
