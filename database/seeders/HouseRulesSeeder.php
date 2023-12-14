<?php

namespace Database\Seeders;

use App\Models\HouseRules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HouseRules::factory(20)->create();
    }
}
