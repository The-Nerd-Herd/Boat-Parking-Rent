<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specials = [
            [
                'parking_space_id' => 1,
                'text' => 'Lengte langer dan 18 meter',
                'price' => 'Prijs op aanvraag',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            'parking_space_id' => 1,
            'text' => 'Breedte Groter dan 5 meter',
            'price' => 'Prijs op aanvraag',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ];

        DB::table('specials')->insert($specials);
    }
}
