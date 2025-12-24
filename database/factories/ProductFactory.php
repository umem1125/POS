<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'image' => fake()->word(),
            'name' => fake()->name(),
            'sku' => fake()->word(),
            'description' => fake()->text(),
            'stock_quantity' => fake()->numberBetween(-10000, 10000),
            'price' => fake()->numberBetween(-10000, 10000),
            'cost_price' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
