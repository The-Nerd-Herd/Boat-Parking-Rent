<?php

namespace Database\Seeders;

use App\Models\SpecialRequirements;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialRequirementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpecialRequirements::factory(20)->create();
    }
}
