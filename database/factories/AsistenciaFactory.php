<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_alumno' => $this->faker->numberBetween(1, 20),
            'fecha' => $this->faker->date(),
            'tipo_asistencia' => $this->faker->randomElement(['A', 'T', 'F']),
        ];
    }
}
