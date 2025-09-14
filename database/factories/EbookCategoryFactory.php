<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EbookCategory>
 */
class EbookCategoryFactory extends Factory
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
