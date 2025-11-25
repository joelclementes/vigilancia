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
                'email' => 'lrivera',
                'password' => bcrypt('lrivera'),
            ],
            [
                'name' => 'Jesús Iván Fernández Álvarez',
                'email' => 'jfernandez',
                'password' => bcrypt('jfernandez'),
            ],
            [
                'name' => 'María del Pilar Cobos Barajas',
                'email' => 'mcobos',
                'password' => bcrypt('mcobos'),
            ],
            [
                'name' => 'Isaí Saldaña Rivera',
                'email' => 'isaldaña',
                'password' => bcrypt('isaldaña'),
            ],
        ];

        foreach ($usuarios as $usuario) {
            $user = User::create($usuario);
        }
    }
}
