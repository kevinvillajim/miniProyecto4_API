<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_alumno' => fake()->numberBetween(1, 20),
            'id_curso' => fake()->numberBetween(1, 20),
            'fecha' => fake()->date(),
            'estado' => fake()->boolean(),
        ];
    }
}
