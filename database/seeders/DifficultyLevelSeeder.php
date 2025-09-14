<?php

namespace Database\Seeders;

use App\Models\DifficultyLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifficultyLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            [
                'title'   => 'Begginer',
            ],
            [
                'title'   => 'Intermediate',
            ],
            [
                'title'   => 'Advance',
            ],
        ];

        foreach ($levels as $item) {
            DifficultyLevel::create($item);
        }
    }
}
