<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockAdjustmentFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'quantity_adjusted' => fake()->numberBetween(-10000, 10000),
            'reason' => fake()->text(),
        ];
    }
}
