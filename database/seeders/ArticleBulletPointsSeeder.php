<?php

namespace Database\Seeders;

use App\Models\ArticleBulletPoints;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleBulletPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    ArticleBulletPoints::factory(300)->create();
    }
}
