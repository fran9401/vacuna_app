<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{

    public function definition()
    {
        return [
            'nombre' => $this ->faker->name,
            'apellido' => $this ->faker->lastName,
            'fecha_nacimiento' => $this ->faker->date(),
            'cedula' => $this ->faker->creditCardNumber(),
            'barrio' => $this ->faker->address(),
            'ciudad' => $this ->faker->city(),
            'pais' => $this ->faker->country(),
            'sexo' => $this ->faker->randomLetter(),
        ];
    }
}
