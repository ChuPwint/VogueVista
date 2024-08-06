<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 6),
            'pname' => $this->faker->words(2, true),
            // 'p_photo' => $this->faker->imageUrl(),
            'stock' => $this->faker->numberBetween(1, 100),
            'p_detail' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(10, 1000),
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
        ];
    }
}
