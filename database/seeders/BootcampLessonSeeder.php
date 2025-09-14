<?php

namespace Database\Seeders;

use App\Models\BootcampLesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootcampLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BootcampLesson::factory(50)->create();
    }
}
