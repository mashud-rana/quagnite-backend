<?php

namespace Database\Factories;

use App\Models\FaqTopic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FaqEntry>
 */
class FaqEntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question' => $this->faker->sentence,
            'answer' => $this->faker->paragraph,
            'topic_id' => function () {
                return FaqTopic::inRandomOrder()->first()->id;
            },
        ];
    }
}
