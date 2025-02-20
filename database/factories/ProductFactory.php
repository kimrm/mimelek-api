<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'stock' => $this->faker->randomNumber(2),
            'status' => 'active',
            'image' => $this->faker->imageUrl(),
            'user_id' => 1,
            'published_at' => now(),
            'archived_at' => null,
            'deleted_at' => null,
        ];
    }
}
