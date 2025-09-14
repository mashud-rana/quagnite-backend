<?php

namespace Database\Seeders;

use App\Constants\GlobalConstant;
use App\Models\Subscription;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = [
            [
                'title' => 'Playground Plus',
                'type' => MONTHLY,
                'course_limit' => 1,
                'exam_limit' => 1,
                'bootcamp_limit' => 1,
                'ebook_limit' => 1,
                'coaching_limit' => 1,
                'playground_limit' => 1,
                'price' => '25',
                'footer_text' => 'But if paid yearly 10% off: $270.00',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to all the playgrounds</p>
                </li>',

            ],
            [
                'title' => 'Playground Plus',
                'type' => YEARLY,
                'course_limit' => 10,
                'unlimited_exam' => 1,
                'bootcamp_limit' => 10,
                'unlimited_ebook' => 1,
                'coaching_limit' => 10,
                'unlimited_playground' => 1,
                'price' => '270',
                'old_price' => '300',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to all the playgrounds</p>
                </li>',

            ],
            [
                'title' => 'Standard',
                'type' => MONTHLY,
                'course_limit' => 2,
                'exam_limit' => 2,
                'bootcamp_limit' => 2,
                'ebook_limit' => 2,
                'coaching_limit' => 2,
                'playground_limit' => 2,
                'price' => '34.99',
                'footer_text' => 'But if paid yearly 25% off: $314.91',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to the selected course, and the platform</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited All hands-on lab</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited Monthly exams</p>
                </li>',

            ],
            [
                'title' => 'Standard',
                'type' => YEARLY,
                'course_limit' => 20,
                'exam_limit' => 20,
                'bootcamp_limit' => 20,
                'ebook_limit' => 20,
                'coaching_limit' => 20,
                'playground_limit' => 20,
                'price' => '314.91',
                'old_price' => '419.88',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to the selected course, and the platform</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited All hands-on lab</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited Monthly exams</p>
                </li>',

            ],
            [
                'title' => 'Premium',
                'type' => MONTHLY,
                'course_limit' => 3,
                'exam_limit' => 3,
                'bootcamp_limit' => 3,
                'ebook_limit' => 3,
                'coaching_limit' => 3,
                'playground_limit' => 3,
                'price' => '64.99',
                'footer_text' => 'But if paid yearly 25% off: $584.91',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to the 3 courses of your choice</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited All hands-on lab</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited Monthly exams</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to 2 playgrounds of your choice for practices</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Interview prep assistance</p>
                </li>',

            ],
            [
                'title' => 'Premium',
                'type' => YEARLY,
                'course_limit' => 30,
                'exam_limit' => 30,
                'bootcamp_limit' => 30,
                'ebook_limit' => 30,
                'coaching_limit' => 30,
                'playground_limit' => 30,
                'price' => '584.91',
                'old_price' => '779.88',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to the 3 courses of your choice</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited All hands-on lab</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited Monthly exams</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to 2 playgrounds of your choice for practices</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Interview prep assistance</p>
                </li>',

            ],
            [
                'title' => 'Plus',
                'type' => MONTHLY,
                'course_limit' => 4,
                'exam_limit' => 4,
                'bootcamp_limit' => 4,
                'ebook_limit' => 4,
                'coaching_limit' => 4,
                'playground_limit' => 4,
                'price' => '74.99',
                'footer_text' => 'But if paid yearly 25% off: $674.91',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to the 4 courses of your choice</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to 5 playgrounds of your choice for practices</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited Monthly exams</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Interview prep assistance</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Resume review</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Success Coach assignment</p>
                </li>',

            ],
            [
                'title' => 'Plus',
                'type' => YEARLY,
                'course_limit' => 40,
                'exam_limit' => 40,
                'bootcamp_limit' => 40,
                'ebook_limit' => 40,
                'coaching_limit' => 40,
                'playground_limit' => 40,
                'price' => '674.91',
                'old_price' => '899.88',
                'desc' => '
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to the 4 courses of your choice</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited access to 5 playgrounds of your choice for practices</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Unlimited Monthly exams</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Interview prep assistance</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Resume review</p>
                </li>
                <li>
                    <i class="ri-checkbox-circle-fill"></i>
                    <p>Success Coach assignment</p>
                </li>',

            ],
        ];

        foreach ($subscriptions as $item) {
            Subscription::create($item);
        }
    }
}
