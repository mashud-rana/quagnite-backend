<?php

namespace Database\Seeders;

use App\Models\WikiTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WikiTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WikiTag::factory(120)->create();
    }
}
