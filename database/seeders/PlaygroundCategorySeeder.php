<?php

namespace Database\Seeders;

use App\Models\PlaygroundCategory;
use Database\Factories\PlaygroundCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaygroundCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlaygroundCategory::factory(4)->create();
    }
}
