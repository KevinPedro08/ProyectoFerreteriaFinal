<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->locale('es_ES');
        return [
            'nombre' => fake()->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => fake()->phoneNumber(),
            'tipo' => fake()->randomElement(['Empresa', 'Persona', 'Distribuidora']),
        ];
    }
}
