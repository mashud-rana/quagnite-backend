<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use Illuminate\Database\Seeder;
use App\Models\BootcampCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BootcampCategorySeeder extends Seeder
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
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
            [
                'name'       => 'Devops',
                'slug'        => Str::slug('Devops'),
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
            [
                'name'       => 'Accounting',
                'slug'        => Str::slug('Accounting'),
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
            [
                'name'       => 'Marketing',
                'slug'        => Str::slug('Marketing'),
                'status'      => ACTIVE,
                'created_by'  => 1,
            ],
        ];

        foreach ($categories as $item) {
            BootcampCategory::create($item);
        }
    }
}
