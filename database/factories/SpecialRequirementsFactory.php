<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SpecialRequirements>
 */
class SpecialRequirementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'requirement' => $this->faker->sentence,
            'price'=> $this->faker->numberBetween(0,500),
            'parking_space_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}