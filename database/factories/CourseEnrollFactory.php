<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseEnroll>
 */
class CourseEnrollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id'      => Course::get()->random()->id,
            'user_id'        => User::where('user_type', 'student')->get()->random()->id,
            'status'         => 'enrolled'
        ];
    }
}
