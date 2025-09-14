<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
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
                'name'       => 'Laravel',
                'slug'        => Str::slug('Laravel'),
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
            [
                'name'       => 'PHP',
                'slug'        => Str::slug('PHP'),
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
            [
                'name'       => 'Django',
                'slug'        => Str::slug('Django'),
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
            [
                'name'       => 'Node',
                'slug'        => Str::slug('Node'),
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
        ];

        foreach ($categories as $item) {
            CourseCategory::create($item);
        }
    }
}
