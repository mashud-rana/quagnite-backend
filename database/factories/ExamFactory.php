<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title);
        $price = rand(10, 100);
        $old_price = $price + rand(10, 50);
        $images = [
            'demo/images/exam/icon-1.png',
            'demo/images/exam/icon-2.png',
            'demo/images/exam/icon-3.png',
            'demo/images/exam/icon-4.png',
        ];

        $paragraph = '';
        $paras = rand(3, 7);
        for ($x = 0; $x <= $paras; $x++) {
            $words = rand(80, 170);
            $paragraph .= '<p>' . $this->faker->sentence($words) . '</p>';
        }

        return [
            'title'    => $title,
            'slug'     => $slug,
            'description'  => $paragraph,
            'price'    => $price,
            'old_price' => $old_price,
            'image'    =>  Arr::random($images),
            'duration' => Arr::random([60, 90, 120]),
        ];
    }
}
