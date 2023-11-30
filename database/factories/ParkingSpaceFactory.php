<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParkingSpace>
 */
class ParkingSpaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,3),
            'title'=>$this->faker->text(20),
            'street'=>$this->faker->streetName,
            'number'=>$this->faker->buildingNumber,
            'city'=>$this->faker->city,
            'picture'=>$this->faker->imageUrl,
            'description'=>$this->faker->sentence,
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
