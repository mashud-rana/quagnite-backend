<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
        $user = User::where('email', 'admin@app.com')->first();
        $images = [
            'demo/images/event/event.jpg',
            'demo/images/event/event-2.jpg',
            'demo/images/event/event-3.jpg',
            'demo/images/event/event-4.jpg',
        ];

        $paragraph = '';
        $paras = rand(3, 7);
        for ($x = 0; $x <= $paras; $x++) {
            $words = rand(80, 150);
            $paragraph .= '<p>' . $this->faker->sentence($words) . '</p>';
        }

        return [
            'user_id' => $user->id,
            'title' => $title,
            'slug'     => $slug,
            'event_start' => $this->faker->dateTimeBetween('now', '+7 days'),
            'event_end' => $this->faker->dateTimeBetween('now', '+14 days'),
            'image' => Arr::random($images),
            'description' => $paragraph,
            'location' => $this->faker->country,
            'event_type' => $this->faker->randomElement([0, 1]),
            'status' => $this->faker->randomElement([ACTIVE, UPCOMING]),
        ];
    }
}
