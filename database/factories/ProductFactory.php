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
            'category_id' => rand(1, 10),
            'name' => $this->faker->sentence(),
            'sku' => $this->faker->unique()->bothify('SKU########'),
            'description' => $this->faker->paragraph(true),
            'stock_quantity' => 1000,
            'cost_price' => $costPrice = $this->faker->numberBetween(10000, 100000),
            'price' => $costPrice + ($costPrice * (20 / 100)),
        ];
    }
}
