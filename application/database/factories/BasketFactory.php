<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Basket>
 */
class BasketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $grossTotal = $this->faker->randomDigit();
        $promotionTotal = $this->faker->randomDigit();
        $netTotal = $this->faker->randomDigit();

        return [
            'gross_total' => $grossTotal,
            'discount_total' => $promotionTotal,
            'net_total' => $netTotal
        ];
    }
}
