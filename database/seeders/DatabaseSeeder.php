<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
            'name' => 'Francis Yolani Jarquin',
            'email' => 'francisyolanijm86@gmail.com',
            'password' => bcrypt('12345678'),

        ]);

         \App\Models\Persona::factory(1000)->create();
         \App\Models\Vacuna::factory(1000)->create();
         \App\Models\PersonaVacuna::factory(5000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
