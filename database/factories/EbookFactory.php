<?php

namespace Database\Factories;

use App\Constants\GlobalConstant;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\EbookCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ebook>
 */
class EbookFactory extends Factory
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
            'demo/images/ebook/ebook-01.jpg',
            'demo/images/ebook/ebook-02.jpg',
            'demo/images/ebook/ebook-03.jpeg',
            'demo/images/ebook/ebook-04.png',
            'demo/images/ebook/ebook-05.png',
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
            'author_name' => $this->faker->name(),
            'details'  => $paragraph,
            'image'    => Arr::random($images),
            'price'    => rand(10, 100),
            'ebook_type' => EBOOK_TYPE_PDF,
            'ebook_file' => 'demo/pdfs/dummy.pdf',
            'average_rating' => mt_rand(40, 50) / 10,
            'status'   => Arr::random([PUBLISHED, DRAFT, UPCOMING]),
            'ebook_category_id' => EbookCategory::inRandomOrder()->value('id'),
        ];
    }
}
