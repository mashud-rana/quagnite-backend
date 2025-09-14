<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CMSPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $templates = Template::where('status', Template::STATUS_ACTIVE)->get();

        foreach($templates as $template) {

            $pages = [];

            if($template->slug == '/')
            {
                $pages[] = [
                    'template_id' => $template->id,
                    'name' => [
                        'en' => 'home'
                    ],
                    'slug' => $template->slug,
                    'meta_title' => [
                        'en' => 'This is home page'
                    ],
                    'meta_description' => [
                        'en' => 'This is home page description'
                    ],
                    'status' => Template::STATUS_ACTIVE,
                ];
            }

            foreach ($pages as $page) {
                Page::updateOrCreate(
                    ['slug' => $template->slug, 'template_id' => $template->id],
                    $page
                );
            }
        }
    }
}
