<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use App\Models\Bootcamp;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $discussionableType = $this->faker->randomElement(['App\\Models\\Course', 'App\\Models\\Bootcamp']);
        $discussionableId = null;

        switch ($discussionableType) {
            case 'App\\Models\\Course':
                $discussionableId = Course::pluck('id')->random();
                break;
            case 'App\\Models\\Bootcamp':
                $discussionableId = Bootcamp::pluck('id')->random();
                break;
        }

        return [
            'discussionable_id' => $discussionableId,
            'discussionable_type' => $discussionableType,
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];
    }
}
