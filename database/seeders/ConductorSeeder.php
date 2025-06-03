<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conductor;

class ConductorSeeder extends Seeder
{
    public function run()
    {
        Conductor::insert([
            
            ['nombre' => 'Juan Pérez', 'ciudad' => 'Toledo', 'puntos' => 12],
            ['nombre' => 'Marta Gómez', 'ciudad' => 'Toledo', 'puntos' => 10],
            ['nombre' => 'Carlos Ruiz', 'ciudad' => 'Toledo', 'puntos' => 14],
            ['nombre' => 'Ana Ruiz', 'ciudad' => 'Ciudad Real', 'puntos' => 10],
            ['nombre' => 'Miguel Salas', 'ciudad' => 'Ciudad Real', 'puntos' => 13],
            ['nombre' => 'Lucía Sánchez', 'ciudad' => 'Ciudad Real', 'puntos' => 15],
            ['nombre' => 'Luis Gómez', 'ciudad' => 'Cuenca', 'puntos' => 14],
            ['nombre' => 'Rosa Moreno', 'ciudad' => 'Cuenca', 'puntos' => 11],
            ['nombre' => 'David Torres', 'ciudad' => 'Cuenca', 'puntos' => 9],
            ['nombre' => 'Carmen León', 'ciudad' => 'Albacete', 'puntos' => 9],
            ['nombre' => 'Raúl Castillo', 'ciudad' => 'Albacete', 'puntos' => 13],
            ['nombre' => 'Eva Romero', 'ciudad' => 'Albacete', 'puntos' => 11],
            ['nombre' => 'Pedro Mora', 'ciudad' => 'Guadalajara', 'puntos' => 15],
            ['nombre' => 'Sandra Vidal', 'ciudad' => 'Guadalajara', 'puntos' => 8],
            ['nombre' => 'Javier Núñez', 'ciudad' => 'Guadalajara', 'puntos' => 12],
            ['nombre' => 'Antonio Vidal', 'ciudad' => 'Madrid', 'puntos' => 8],
        ]);
    }
}
