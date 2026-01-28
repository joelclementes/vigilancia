<?php

namespace Database\Seeders;

use App\Models\TipoVisitas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuariosSeeder::class,
            CloneMunicipiosSeeder::class,
            DependenciasSeeder::class,
            TipoVisitasSeeder::class,
            CloneAreasSeeder::class,
            CloneDiputadosSeeder::class,
        ]);
    }
}
