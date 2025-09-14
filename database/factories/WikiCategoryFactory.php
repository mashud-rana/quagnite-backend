<?php

namespace Database\Factories;

use App\Constants\GlobalConstant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WikiCategory>
 */
class WikiCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->text(10);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'status' => ACTIVE,
        ];
    }
}
