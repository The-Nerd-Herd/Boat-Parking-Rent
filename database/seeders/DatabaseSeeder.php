<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ArticleBulletPoints;
use App\Models\SpecialRequirements;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ParkingSpaceSeeder::class,
//            AdditionalInformationSeeder::class,
            SpecialRequirementsSeeder::class,
            HouseRulesSeeder::class,
            ArticleBulletPointsSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
