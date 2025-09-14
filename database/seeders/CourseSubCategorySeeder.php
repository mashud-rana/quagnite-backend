<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;
use App\Models\CourseSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retrieve existing course categories for reference
        $courseCategories = CourseCategory::all();

        // Sample data for course_sub_categories with real names
        $subCategories = [
            [
                'name' => 'Laravel Fundamentals',
                'slug' => Str::slug('Laravel Fundamentals'),
                'status' => 1, // Set status to 1
                'course_category_id' => $courseCategories->random()->id,
                'created_by' => 1,
            ],
            [
                'name' => 'Advanced Laravel Techniques',
                'slug' => Str::slug('Advanced Laravel Techniques'),
                'status' => 1,
                'course_category_id' => $courseCategories->random()->id,
                'created_by' => 1,
            ],
            [
                'name' => 'PHP Basics',
                'slug' => Str::slug('PHP Basics'),
                'status' => 1,
                'course_category_id' => $courseCategories->random()->id,
                'created_by' => 1,
            ],
            [
                'name' => 'Django Web Development',
                'slug' => Str::slug('Django Web Development'),
                'status' => 1,
                'course_category_id' => $courseCategories->random()->id,
                'created_by' => 1,
            ],
            [
                'name' => 'Node.js Essentials',
                'slug' => Str::slug('Node.js Essentials'),
                'status' => 1,
                'course_category_id' => $courseCategories->random()->id,
                'created_by' => 1,
            ],
            // Add more items as needed
            [
                'name' => 'Vue.js Mastery',
                'slug' => Str::slug('Vue.js Mastery'),
                'status' => 1,
                'course_category_id' => $courseCategories->random()->id,
                'created_by' => 1,
            ],
            [
                'name' => 'React.js for Beginners',
                'slug' => Str::slug('React.js for Beginners'),
                'status' => 1,
                'course_category_id' => $courseCategories->random()->id,
                'created_by' => 1,
            ],
            // Add more items as needed
        ];

        // Insert data into course_sub_categories table
        foreach ($subCategories as $subcategory) {
            CourseSubCategory::create($subcategory);
        }
    }
}
