<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'customer_id' => Customer::factory(),
            'order_number' => fake()->word(),
            'order_name' => fake()->word(),
            'discount' => fake()->numberBetween(-10000, 10000),
            'total' => fake()->numberBetween(-10000, 10000),
            'profit' => fake()->numberBetween(-10000, 10000),
            'payment_method' => fake()->word(),
            'status' => fake()->word(),
        ];
    }
}
