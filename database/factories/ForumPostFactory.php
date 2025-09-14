<?php

namespace Database\Factories;

use App\Models\ForumCategory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForumPost>
 */
class ForumPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $paragraph = '';
        $paras = rand(3, 7);
        for ($x = 0; $x <= $paras; $x++) {
            $words = rand(80, 170);
            $paragraph .= '<p>' . $this->faker->sentence($words) . '</p>';
        }

        return [
            'user_id'  => User::inRandomOrder()->value('id'),
            'forum_category_id'  => ForumCategory::inRandomOrder()->value('id'),
            'title'    => $this->faker->sentence(),
            'description'  => $paragraph,
            'seen'    =>  rand(1, 100),
            'status'   => ACTIVE,
        ];
    }
}
