<?php

namespace Database\Seeders;

use App\Models\BootcampLecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootcampLectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BootcampLecture::factory(50)->create();
    }
}
