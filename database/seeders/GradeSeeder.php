<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'letter_grade'      => 'A+',
                'GPA'               => 4.0,
                'start_percentage'  => 97,
                'end_percentage'  => 100,
            ],
            [
                'letter_grade'      => 'A',
                'GPA'               => 3.9,
                'start_percentage'  => 93,
                'end_percentage'  => 96,
            ],
            [
                'letter_grade'      => 'A-',
                'GPA'               => 3.7,
                'start_percentage'  => 90,
                'end_percentage'  => 92,
            ],
            [
                'letter_grade'      => 'B+',
                'GPA'               => 3.3,
                'start_percentage'  => 87,
                'end_percentage'  => 89,
            ],
            [
                'letter_grade'      => 'B',
                'GPA'               => 3.0,
                'start_percentage'  => 83,
                'end_percentage'  => 86,
            ],
            [
                'letter_grade'      => 'B-',
                'GPA'               => 2.7,
                'start_percentage'  =>80,
                'end_percentage'  =>82,
            ],
            [
                'letter_grade'      => 'C+',
                'GPA'               => 2.3,
                'start_percentage'  =>77,
                'end_percentage'  =>79,
            ],
            [
                'letter_grade'      => 'C',
                'GPA'               => 2.0,
                'start_percentage'  =>73,
                'end_percentage'  =>76,
            ],
            [
                'letter_grade'      => 'C-',
                'GPA'               => 1.7,
                'start_percentage'  =>70,
                'end_percentage'  =>72,
            ],
            [
                'letter_grade'      => 'D+',
                'GPA'               => 1.3,
                'start_percentage'  =>67,
                'end_percentage'  =>69,
            ],
            [
                'letter_grade'      => 'D',
                'GPA'               => 1.0,
                'start_percentage'  =>63,
                'end_percentage'  =>66,
            ],
            [
                'letter_grade'      => 'D-',
                'GPA'               => 0.7,
                'start_percentage'  =>60,
                'end_percentage'  =>62,
            ],
            [
                'letter_grade'      => 'F',
                'GPA'               => 0.0,
                'start_percentage'  =>0,
                'end_percentage'  =>59,
            ],
        ];


        foreach ($items as $item) {
            Grade:: create($item);
        }
    }
}
