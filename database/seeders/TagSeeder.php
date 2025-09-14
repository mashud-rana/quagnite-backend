<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Support\Str;
use App\Constants\GlobalConstant;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'tag_category_id' => 1,
                'name'            => 'Programming',
                'slug'            => Str::slug('Programming'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Gaming',
                'slug'            => Str::slug('Gaming'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Developer',
                'slug'            => Str::slug('Developer'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Designer',
                'slug'            => Str::slug('Designer'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Coder',
                'slug'            => Str::slug('Coder'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Graphics',
                'slug'            => Str::slug('Graphics'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'SEO',
                'slug'            => Str::slug('SEO'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Digital Marketing',
                'slug'            => Str::slug('Digital Marketing'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Big Data',
                'slug'            => Str::slug('Big Data'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Ethical Hacking',
                'slug'            => Str::slug('Ethical Hacking'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Database',
                'slug'            => Str::slug('Database'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Docker',
                'slug'            => Str::slug('Docker'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Kubernauts',
                'slug'            => Str::slug('Kubernauts'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Dev Ops',
                'slug'            => Str::slug('Dev Ops'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'System Analyst',
                'slug'            => Str::slug('System Analyst'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Business Analyst',
                'slug'            => Str::slug('Business Analyst'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Software Manager',
                'slug'            => Str::slug('Software Manager'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'Software Architect',
                'slug'            => Str::slug('Software Architect'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
            [
                'tag_category_id' => 1,
                'name'            => 'SQA',
                'slug'            => Str::slug('SQA'),
                'status'          => ACTIVE,
                'created_by'      => 1,
            ],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
