<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $monthly = [[
            'parking_space_id' => 1,
            'text' => 'Maandtarief',
            'price' => 'Jaartarief / 10',
            'created_at' => now(),
            'updated_at' => now(),
        ]];

        DB::table('monthlies')->insert($monthly);
    }
}
