<?php

namespace Database\Seeders;

use App\Models\TagCategory;
use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use Illuminate\Database\Seeder;

class TagCategorySeeder extends Seeder
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
                'name'       => 'Default',
                'slug'       => Str::slug('Default'),
                'status'     => ACTIVE,
                'created_by' => 1,
            ]
        ];

        foreach ($categories as $category) {
            TagCategory::create($category);
        }
    }
}
