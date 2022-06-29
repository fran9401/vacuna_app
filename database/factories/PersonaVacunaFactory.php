<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonaVacuna>
 */
class PersonaVacunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'dosis' =>$this->faker->numberBetween(1,5),
            'persona_id'=>$this->faker->numberBetween(1,1000),
            'vacuna_id'=>$this->faker->numberBetween(1,1000),
            'fecha'=>$this->faker->date(),
            'laboratorio'=>$this->faker->company(),
            'lote'=>$this->faker->numberBetween(1,5),
        ];
    }
}
