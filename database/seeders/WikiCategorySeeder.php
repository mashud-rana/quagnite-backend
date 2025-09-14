<?php

namespace Database\Seeders;

use App\Models\WikiCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WikiCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WikiCategory::factory(10)->create();
    }
}
