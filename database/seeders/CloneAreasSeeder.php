<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CloneAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rutaArchivo = database_path('seeders/catareas.sql');

        // Verificar si el archivo existe
        if (!File::exists($rutaArchivo)) {
            $this->command->error("El archivo $rutaArchivo no existe.");
            return;
        }

        // Leer el contenido del archivo .sql
        $sql = File::get($rutaArchivo);

        // Ejecutar las consultas SQL
        DB::unprepared($sql);

        // Obtengo los registros de la tabla municipio
        $areas = DB::table('catareas_ant')->get();

        // Itero los registros y los clono en la tabla municipio
        foreach ($areas as $area) {
                DB::table('areas')->insert([
                    'nombre' => $area->nombre,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        }

        DB::statement('DROP TABLE IF EXISTS catareas_ant;');
    }
}
