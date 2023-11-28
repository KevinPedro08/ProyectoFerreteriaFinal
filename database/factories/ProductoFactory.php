<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'cantidad' => $this->faker->numberBetween(1, 300),
            'precio' => $this->faker->randomFloat(2, 1, 1000),
            'marca' => fake()->sentence(),
            'descripcion' => fake()->sentence(),
            'user_id' => function(){
                return User::factory()->create()->id;
            }, 
            'imagen' => null,
        ];
    }
}
