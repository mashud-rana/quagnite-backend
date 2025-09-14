<?php

namespace Database\Seeders;

use App\Models\CourseLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = [
            [
                'title'   => 'English',
            ],
            [
                'title'   => 'Spanish',
            ],
            [
                'title'   => 'Bangla',
            ],
            [
                'title'   => 'Hindi',
            ],
            [
                'title'   => 'Arabic',
            ],
        ];

        foreach ($langs as $item) {
            CourseLanguage::create($item);
        }
    }
}
