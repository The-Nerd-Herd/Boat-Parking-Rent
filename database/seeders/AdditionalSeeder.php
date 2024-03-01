<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdditionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $additionals=[
        [
            'parking_space_id' => 1,
            'text' => 'Prijzen zijn inclusief BTW',
            'created_at' => now(),
            'updated_at' => now(),
        ],
            [
                'parking_space_id' => 1,
                'text' => 'Aan dit overzicht kunnen geen rechten worden ontleend',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parking_space_id' => 1,
                'text' => 'Voor een ligplaatsaanvraag neemt u contact op met Hoop Maritiem BV',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parking_space_id' => 1,
                'text' => 'Houd er rekening mee dat deze tarieven onderhevig zijn aan wijzigingen Het is raadzaam om direct contact op te nemen met Hoop Maritiem BV voor de meest actuele prijzen en beschikbaarheid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];
        DB::table('additionals')->insert($additionals);
    }
}
