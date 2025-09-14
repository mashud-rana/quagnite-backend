<?php

namespace Database\Factories;

use App\Models\CourseCategory;
use App\Models\CourseLanguage;
use App\Models\DifficultyLevel;
use App\Models\User;
use App\Constants\GlobalConstant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teacher_id = User::where('email', 'teacher@app.com')->first()->id;
        $title = $this->faker->sentence();
        $price = rand(10, 100);
        $old_price = $price + rand(10, 50);
        $images = [
            'demo/images/blog/blog.jpg',
            'demo/images/blog/blog-2.jpg',
            'demo/images/blog/blog-3.jpg',
            'demo/images/blog/blog-4.jpg',
        ];

        return [
            'title'             =>  $title,
            'subtitle'          =>  $this->faker->text($maxNbChars = 50),
            'description'      =>  $this->faker->realText($maxNbChars = 200),
            'image'             =>  Arr::random($images),
            'learner_accessibility' =>  Arr::random([COURSE_ACCESS_FREE, COURSE_ACCESS_PAID]),
            'price' => $price,
            'old_price' => $old_price,
            'status'            =>  Arr::random([APPROVED, HOLD, PENDING]),
            'course_category_id'   =>  CourseCategory::inRandomOrder()->value('id'),
            'course_language_id'   =>  CourseLanguage::inRandomOrder()->value('id'),
            'difficulty_level_id'  =>  DifficultyLevel::inRandomOrder()->value('id'),
            'user_id'           =>  Arr::random([User::where('user_type', 'teacher')->inRandomOrder()->value('id'), $teacher_id]),
        ];
    }
}
