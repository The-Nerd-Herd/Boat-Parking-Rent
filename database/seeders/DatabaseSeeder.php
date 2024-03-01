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
            ParkingSpaceSeeder::class,
            YearlySeeder::class,
            MonthlySeeder::class,
            DailySeeder::class,
            SpecialSeeder::class,
        ]);
    }
}
