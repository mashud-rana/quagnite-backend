<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\CoachCategory;
use App\Constants\GlobalConstant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoachCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'       => 'Programming',
                'slug'        => Str::slug('Programming'),
                'created_by'  => 1,
            ],
            [
                'name'       => 'Devops',
                'slug'        => Str::slug('Devops'),
                'created_by'  => 1,
            ],
            [
                'name'       => 'Development',
                'slug'        => Str::slug('Development'),
                'created_by'  => 1,
            ],
            [
                'name'       => 'Finance',
                'slug'        => Str::slug('Finance'),
                'created_by'  => 1,
            ],
        ];

        foreach ($categories as $item) {
            CoachCategory::create($item);
        }
    }
}
