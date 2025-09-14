<?php

namespace Database\Factories;

use App\Models\Bootcamp;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BootcampLesson>
 */
class BootcampLessonFactory extends Factory
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

        return [
            'uuid' => Str::uuid(),
            'bootcamp_id' => $bootcampId,
            'title' => $title,
        ];
    }
}
