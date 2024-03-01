<?php

namespace Database\Seeders;

use App\Models\Yearly;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $years =[

            [
            'parking_space_id' => 1,
            'text' => 'Eerste 7 meters',
            'price' => '150 € / meter',
            'created_at' => now(),
            'updated_at' => now(),
        ],
            [
                'parking_space_id' => 1,
                'text' => 'Volgende 5 meters (tot 12 meters)',
                'price' => '100 € per meter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parking_space_id' => 1,
                'text' => 'Elke meter boven de 12 (tot 18 meters)',
                'price' => '80 € per meter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parking_space_id' => 1,
                'text' => 'Ligplaats buiten ponton van langssteiger 10% opslag over totaal',
                'price' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];
        DB::table('yearlies')->insert($years);
    }
}
