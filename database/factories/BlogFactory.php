<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
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
            'user_id'  => $user->id,
            'title'    => $title,
            'slug'     => $slug,
            'details'  => $paragraph,
            'image'    => Arr::random($images),
            'status'   => PUBLISHED,
            'published_at'   => Carbon::now(),
            'blog_category_id' => BlogCategory::inRandomOrder()->value('id'),
        ];
    }
}
