<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                'name' => 'Joel Clemente Serrano',
                'email' => 'joel@prueba.com',
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Lorena Rivera Ruiz',
                'email' => 'lorenarr@prueba.com',
                'password' => bcrypt('123456789'),
            ],
        ];

        foreach ($usuarios as $usuario) {
            $user = User::create($usuario);
        }
    }
}
