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
            'user_id'=>$this->faker->numberBetween(1,5),
            'picture'=> "public/images/underwater.jpg",
            'description'=>'this is a description',
            'rules'=>$this->faker->text(),
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
