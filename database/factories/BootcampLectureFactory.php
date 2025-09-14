<?php

namespace Database\Factories;

use App\Models\Bootcamp;
use Illuminate\Support\Str;
use App\Models\BootcampLesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BootcampLecture>
 */
class BootcampLectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $bootcampId = Bootcamp::inRandomOrder()->first()->id;
        $lessonId = BootcampLesson::inRandomOrder()->first()->id;

        return [
            'uuid' => Str::uuid(),
            'bootcamp_id' => $bootcampId,
            'bootcamp_lesson_id' => $lessonId ,
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'start_time' => $this->faker->dateTimeBetween('+1 day', '+1 week'),
            'duration' => $this->faker->numberBetween(30, 120),
            'password' => $this->faker->optional()->password,
            'meeting_id' => $this->faker->uuid,
            'start_url' => $this->faker->url,
            'join_url' => $this->faker->url,
        ];
    }
}
