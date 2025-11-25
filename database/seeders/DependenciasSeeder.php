<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependencia;

class DependenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dependencias = [
            
                [
                    'nombre' => 'Presidencia de la República',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nombre' => 'Procuraduría General de la República',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nombre' => 'Secretaría de Comunicaciones y Transportes',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nombre' => 'Secretaría de Desarrollo Social',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nombre' => 'Secretaría de Economía',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nombre' => 'Secretaría de Educación Pública',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nombre' => 'Energía',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            
        ];

        foreach ($dependencias as $dependencia) {
            $dep = Dependencia::create($dependencia);
        }
    }
}
