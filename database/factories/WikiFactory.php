<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Wiki;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\WikiCategory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wiki>
 */
class WikiFactory extends Factory
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

        if (Wiki::where('slug', $slug)->count() > 0) {
            $slug = $slug . '-' . rand(100000, 999999);
        }

        $user = User::where('email', 'admin@app.com')->first();
        $images = [
            'demo/images/blog/blog.jpg',
            'demo/images/blog/blog-2.jpg',
            'demo/images/blog/blog-3.jpg',
            'demo/images/blog/blog-4.jpg',
        ];

        $paragraph = '';
        $paras = rand(3, 7);
        for ($x = 0; $x <= $paras; $x++) {
            $words = rand(80, 170);
            $paragraph .= '<p>' . $this->faker->sentence($words) . '</p>';
        }

        return [
            'user_id' => $user->id,
            'title' => $title,
            'slug' => $slug,
            'details' => $paragraph,
            'image' => Arr::random($images),
            'status' => PUBLISHED,
            'published_at'   => Carbon::now(),
            'wiki_category_id' => WikiCategory::inRandomOrder()->value('id'),
        ];
    }
}
