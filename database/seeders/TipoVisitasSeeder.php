<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TiposVisita;

class TipoVisitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposVisitas = [
            [
                'nombre' => 'Auditorio',
            ],
            [
                'nombre' => 'Area de cajas',
            ],
            [
                'nombre' => 'Asesoria',
            ],
                        [
                'nombre' => 'Cajero banco',
            ],
                        [
                'nombre' => 'Cita',
            ],
                        [
                'nombre' => 'Curso',
            ],
                        [
                'nombre' => 'Entrevista',
            ],
                        [
                'nombre' => 'Entrega de comida',
            ],
                        [
                'nombre' => 'Entrega de documentos',
            ],
                        [
                'nombre' => 'Entrega de facturas',
            ],
        ];

        foreach ($tiposVisitas as $tipoVisita) {
            $tipo = TiposVisita::create($tipoVisita);
        }
    }
}
