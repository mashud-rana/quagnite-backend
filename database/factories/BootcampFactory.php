<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\CourseLanguage;
use App\Models\DifficultyLevel;
use App\Models\BootcampCategory;
use App\Constants\GlobalConstant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bootcamp>
 */
class BootcampFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $price = rand(10, 100);
        $old_price = $price + rand(10, 50);
        $images = [
            'demo/images/blog/blog.jpg',
            'demo/images/blog/blog-2.jpg',
            'demo/images/blog/blog-3.jpg',
            'demo/images/blog/blog-4.jpg',
        ];

        // Generate a random date between now and a future date (e.g., 30 days from now)
        $randomDate = $this->faker->dateTimeBetween('now', '+30 days');
        $startDate = Carbon::instance($randomDate);
        $endDate = $startDate->copy()->addDays(90);

        return [
            'title'             =>  $title,
            'subtitle'          =>  $this->faker->text($maxNbChars = 50),
            'description'      =>  $this->faker->realText($maxNbChars = 200),
            'start_date' => $startDate->toDateString(),
            'end_date' => $endDate->toDateString(),
            'image'             =>  Arr::random($images),
            'learner_accessibility' =>  Arr::random([COURSE_ACCESS_FREE, COURSE_ACCESS_PAID]),
            'price' => $price,
            'old_price' => $old_price,
            'status'            =>  APPROVED,
            'bootcamp_category_id'   =>  BootcampCategory::get()->random()->id,
            'course_language_id'   =>  CourseLanguage::get()->random()->id,
            'difficulty_level_id'  =>  DifficultyLevel::get()->random()->id,
            'user_id'           =>  User::where('user_type', 'teacher')->get()->random()->id,
        ];
    }
}
