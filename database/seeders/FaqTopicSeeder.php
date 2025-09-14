<?php

namespace Database\Seeders;

use App\Models\FaqTopic;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaqTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = ["General", "Getting Started", "Account/Profile", "Troubleshooting", "Purchase/Refund", "Course Taking", "General", "Booking Activity", "Payment", "Booking Changes"];
        $description = "Lorem ipsum is placeholder text commonly used on websites.";
        $createdTopics = [];

        foreach ($topics as $topic) {
            if (!in_array($topic, $createdTopics)) {
                $slug = Str::slug($topic);
                FaqTopic::create(['name' => $topic, 'slug' => $slug, 'description' => $description]);
                $createdTopics[] = $topic;
            }
        }
    }
}
