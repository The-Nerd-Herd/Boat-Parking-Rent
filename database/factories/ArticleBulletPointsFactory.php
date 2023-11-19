<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleBulletPoints>
 */
class ArticleBulletPointsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text'=>$this->faker->sentence,
            'house_rules_id'=>$this->faker->numberBetween(1,20),
        ];
    }
}
