<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DailySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dailies = [[
            'parking_space_id' => 1,
            'text' => 'Dagtarief',
            'price' => '1.5 € per meter',
            'created_at' => now(),
            'updated_at' => now(),
        ]];

        DB::table('dailies')->insert($dailies);
    }
}
