<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speaker>
 */
class SpeakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $images = [
            'demo/images/speaker/speaker.jpg',
            'demo/images/speaker/speaker-2.jpg',
            'demo/images/speaker/speaker-3.jpg',
            'demo/images/speaker/speaker-4.jpg',
        ];
        return [
            'uuid' => Str::uuid(),
            'full_name' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'about' => $this->faker->paragraph,
            'avatar' => Arr::random($images),
        ];
    }
}
