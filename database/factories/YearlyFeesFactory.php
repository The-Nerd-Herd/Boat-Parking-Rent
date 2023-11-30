<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\yearlyFees>
 */
class YearlyFeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'length'=>$this->faker->numberBetween(0,10),
            'amount'=>$this->faker->numberBetween(80,150),
            'parking_space_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
