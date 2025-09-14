<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        

        $paragraph = '';
        $paras = rand(3, 7);
        for ($x = 0; $x <= $paras; $x++) {
            $words = rand(80, 170);
            $paragraph .= '<p>' . $this->faker->sentence($words) . '</p>';
        }
        return [
            'title' => $title,
            'description' => $paragraph,
        ];
    }
}
