<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use App\Models\Bootcamp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $reviewableType = $this->faker->randomElement(['App\\Models\\User', 'App\\Models\\Course', 'App\\Models\\Bootcamp']);
        $reviewableId = null;

        switch ($reviewableType) {
            case 'App\\Models\\User':
                $reviewableId = User::where('user_type', 'coach')->orWhere('user_type', 'teacher')->pluck('id')->random();
                break;
            case 'App\\Models\\Course':
                $reviewableId = Course::pluck('id')->random();
                break;
            case 'App\\Models\\Bootcamp':
                $reviewableId = Bootcamp::pluck('id')->random();
                break;
        }

        return [
            'reviewable_id' => $reviewableId,
            'reviewable_type' => $reviewableType,
            'user_id' => function () {
                return User::where('user_type', 'coach')->orWhere('user_type', 'teacher')->inRandomOrder()->first()->id;
            },
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph,
        ];
    }
}
