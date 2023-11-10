<?php

namespace Database\Seeders;

use Database\Factories\YearlyFeesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\yearlyFees;

class YearlyFeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        yearlyFees::factory(30)->create();
    }
}
