<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = Blog::select('id')->get();

        foreach ($blogs as $blog) {
            BlogTag::create([
                'blog_id' => $blog->id,
                'tag_id' => Tag::inRandomOrder()->value('id'),
            ]);
        }
    }
}
